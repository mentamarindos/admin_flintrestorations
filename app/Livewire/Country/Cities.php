<?php

namespace App\Livewire\Country;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;
use Livewire\WithPagination;

class Cities extends Component
{
    use WithPagination;
    public Country $country;
    public $search = '';

    public function render()
    {
        return view('livewire.country.cities', [
            'cities' => $this->country->cities()->when($this->search, fn ($q) => $q->whereLike('name', $this->search))->orderBy('name')->paginate()
        ]);
    }

    public function deleteCity($id)
    {
        City::find($id)->delete();
    }
}
