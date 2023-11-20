<?php

namespace App\Livewire;

use App\Models\Amenity;
use Livewire\Component;
use Livewire\WithPagination;

class Amenities extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.amenities', [
            'amenities' => Amenity::paginate()
        ]);
    }

    public function showAmenity($id)
    {
        $amenity = Amenity::find($id);

        $this->dispatch('show-amenity', name: $amenity->name, image: $amenity->photo);
    }
}
