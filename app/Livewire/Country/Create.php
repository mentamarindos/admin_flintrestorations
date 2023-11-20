<?php

namespace App\Livewire\Country;

use Livewire\Component;

class Create extends Component
{
    public $name, $code, $dialing_code;

    public function render()
    {
        return view('livewire.country.create');
    }

    public function addCountry()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:255'],
            'dialing_code' => ['required', 'string', 'max:255'],
        ]);

        $this->dispatch('country-created');
    }
}
