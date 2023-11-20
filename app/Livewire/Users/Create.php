<?php

namespace App\Livewire\Users;

use Livewire\Component;

class Create extends Component
{
    public $name, $email, $phone, $password, $password_confirmation;

    public function render()
    {
        return view('livewire.users.create');
    }

    public function addUser()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $this->dispatch('user-created');
    }
}
