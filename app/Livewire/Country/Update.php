<?php

namespace App\Livewire\Country;

use App\Models\Country;
use Livewire\Component;
use Livewire\Attributes\On;

class Update extends Component
{
    public ?Country $country;
    public $name, $code, $dialing_code;

    public function render()
    {
        return view('livewire.country.update');
    }

    #[On('country-edit')]
    public function listenEvent($id)
    {
        $this->country = Country::find($id);
        $this->name = $this->country->name;
        $this->code = $this->country->code;
        $this->dialing_code = $this->country->dialing_code;
    }

    public function updateCountry()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:255'],
            'dialing_code' => ['required', 'string', 'max:255'],
        ]);

        $this->dispatch('country-update', url: route('countries.update', $this->country));
    }
}
