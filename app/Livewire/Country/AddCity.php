<?php

namespace App\Livewire\Country;

use App\Models\City as ModelsCity;
use App\Models\Country;
use Livewire\Component;

class AddCity extends Component
{
    public Country $country;
    public ModelsCity $city;
    public $name = '';


    public function render()
    {
        return view('livewire.country.add-city');
    }

    public function addCity()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $this->country->cities()->create(['name' => $this->name]);
        return $this->redirect(route('countries.show', $this->country));
    }
}
