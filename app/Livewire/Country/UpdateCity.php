<?php

namespace App\Livewire\Country;

use App\Models\City;
use App\Models\Country;
use Livewire\Attributes\On;
use Livewire\Component;

class UpdateCity extends Component
{
    public Country $country;
    public City $city;
    public $name = '';

    public function render()
    {
        return view('livewire.country.update-city');
    }

    #[On('city-edit')]
    public function editCity($id)
    {
        $this->city = City::find($id);
        $this->name = $this->city->name;
    }

    public function updateCity()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $this->city->update(['name' => $this->name]);
        return $this->redirect(route('countries.show', $this->country));
    }
}
