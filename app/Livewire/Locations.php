<?php

namespace App\Livewire;

use App\Models\Location;
use Livewire\Component;
use Livewire\WithPagination;

class Locations extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.locations', [
            'locations' => Location::when($this->search, fn ($q) => $q->whereLike('name', $this->search))->paginate()
        ]);
    }

    public function showLocation($id)
    {
        $location = Location::find($id);

        $this->dispatch('show-location', name: $location->name, image: $location->image);
    }
}
