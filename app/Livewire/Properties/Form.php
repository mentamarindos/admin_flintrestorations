<?php

namespace App\Livewire\Properties;

use App\Livewire\Forms\PropertyForm;
use App\Models\Amenity;
use App\Models\PropertyCategory;
use App\Models\City;
use App\Models\Country;
use App\Models\Document;
use App\Models\Image;
use App\Models\Property;
use App\Models\Video;
use App\Traits\FileUpload;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads, FileUpload;

    public PropertyForm $form;
    public $country_id = '';
    public $cities = [];
    public $selected_amenities = [];
    public $amenity;
    public $feature = '';
    public $docs = [];
    public $documents = [];
    public $doc_iteration = 1;
    public $iteration = 1;
    public $attachments = [];
    public $files = [];
    public $images = [];
    public $videos = [];
    public $is_property_exist = false;

    public function mount($property)
    {
        if ($property) {
            $this->is_property_exist = true;
            // dd($property->images);
            $this->form->setProperty($property);
            $this->country_id = $property->country_id;
            $this->cities = City::where('country_id', $this->country_id)->orderBy('name')->get();

            // amenities
            foreach ($property->amenities as $amenity) {
                $this->selected_amenities[] = $amenity->id;
            }

            // images
            foreach ($property->images as $image) {
                $this->images[] = $image->filename;
                $item = [];
                $item['type'] = 'image';
                $item['file'] = $image->filename;
                $this->files[] = $item;
            }

            // videos
            foreach ($property->videos as $video) {
                $this->videos[] = $video->filename;
                $item = [];
                $item['type'] = 'video';
                $item['file'] = $video->filename;
                $this->files[] = $item;
            }

            // documents
            foreach ($property->documents as $document) {
                $item = [];
                $item['name'] = $document->name;
                $item['filename'] = $document->filename;
                $this->documents[] = $item;
            }
        }
    }

    public function render()
    {
        return view('livewire.properties.form', [
            'countries' => Country::select(['id', 'name'])->orderBy('name')->get(),
            'categories' => PropertyCategory::orderBy('name')->get(),
            'amenities' => Amenity::whereNotIn('id', $this->selected_amenities)->get(),
        ]);
    }

    public function updatedCountryId()
    {
        $this->form->country_id = $this->country_id;
        $this->cities = City::where('country_id', $this->country_id)->orderBy('name')->get();
    }

    public function updatedAmenity()
    {
        $this->selected_amenities[] = $this->amenity;
        $this->amenity = null;
    }

    public function deleteAmenity($index)
    {
        unset($this->selected_amenities[$index]);
        array_splice($this->selected_amenities, 0, 0);
    }

    public function addFeature()
    {
        $this->form->features[] = $this->feature;
        $this->feature = '';
    }

    public function deleteFeature($index)
    {
        unset($this->form->features[$index]);
        array_splice($this->form->features, 0, 0);
    }

    public function updatedDocs()
    {
        // $this->validate([
        //     'docs.*' => ['mimes:pdf,xlsx,csv']
        // ]);

        foreach ($this->docs as $file) {
            $item = [];
            $item['name'] = $file->getClientOriginalName();
            $item['filename'] = $this->fileUpload($file, 'documents');

            $this->documents[] = $item;
        }

        $this->docs = [];
        $this->doc_iteration++;
    }
    public function deleteDocument($index, $file)
    {
        unset($this->documents[$index]);
        array_splice($this->documents, 0, 0);

        Document::where('filename', $file)->delete();
        $this->deleteFile($file);
    }

    public function updatedAttachments()
    {
        $this->validate([
            'attachments.*' => ['mimes:jpg,jpeg,png,webp,webm,mp4,mov,webm,mkv,flv,avi']
        ]);

        $image_types = ['jpg', 'jpeg', 'png', 'webp', 'webm'];
        if (count($this->attachments) > 0) {
            foreach ($this->attachments as $file) {
                // check file type
                if (in_array($file->getClientOriginalExtension(), $image_types)) {
                    // file is image
                    $item['type'] = 'image';
                } else {
                    // file is video
                    $item['type'] = 'video';
                }
                // upload file
                $path = $this->fileUpload($file, $item['type'] . 's');
                $item['file'] = $path;

                $this->files[] = $item;
            }
        }

        $this->attachments = [];
        $this->iteration++;

        $this->separate_files();
    }

    public function deleteAttachment($index, $file)
    {
        unset($this->files[$index]);
        array_splice($this->files, 0, 0);

        Image::where('filename', $file)?->delete();
        Video::where('filename', $file)?->delete();
        $this->deleteFile($file);
        $this->separate_files();
    }

    // separating files to iamges and videos
    public function separate_files()
    {
        $this->images = [];
        $this->videos = [];

        foreach ($this->files as $file) {
            if ($file['type'] === 'image') {
                $this->images[] = $file['file'];
            } else {
                $this->videos[] = $file['file'];
            }
        }
    }

    public function fetchCoordinates()
    {
        $country_name = Country::find($this->form->country_id)?->name;
        $city_name = City::find($this->form->city_id)?->name;

        $address = $this->form->location . ',' . $city_name . ',' . $country_name;
        $coordinates = findAddressCoordinates($address);
        if (isset($coordinates['geometry'])) {
            $this->form->latitude = $coordinates['geometry']['location']['lat'];
            $this->form->longitude = $coordinates['geometry']['location']['lng'];
            session()->flash('location_success', __('Coordinates Fetched Successfully!'));
        } else {
            session()->flash('location_error', $coordinates);
        }
    }
    public function saveProperty()
    {
        $this->validate();

        if ($this->form->property) {
            $this->form->property->update($this->form->all());
            $proprty = $this->form->property;
        } else {
            $proprty = Property::create($this->form->all());
        }

        // attaching amenities
        $proprty->amenities()->sync($this->selected_amenities);

        // creating documents
        $proprty->documents()->delete();
        foreach ($this->documents as $document) {
            $proprty->documents()->create([
                'name' => $document['name'],
                'filename' => $document['filename'],
            ]);
        }

        // creating images
        $proprty->images()->delete();
        foreach ($this->images as $image) {
            $proprty->images()->create([
                'filename' => $image,
            ]);
        }

        // creating videos
        $proprty->videos()->delete();
        foreach ($this->videos as $video) {
            $proprty->videos()->create([
                'filename' => $video,
            ]);
        }

        if ($this->form->property) {
            session()->flash('success', __('Property Updated Successfully.'));
        } else {
            session()->flash('success', __('New Property Created Successfully.'));
        }


        $this->redirect('/properties');
    }
}
