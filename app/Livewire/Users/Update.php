<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\Attributes\On;

class Update extends Component
{
    public ?User $user;
    public $name, $email, $phone, $password, $password_confirmation;

    public function render()
    {
        return view('livewire.users.update');
    }

    #[On('user-edit')]
    public function listenEvent($id)
    {
        $this->user = User::find($id);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->phone = $this->user->phone;
    }

    public function updateUser()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->user)],
            'phone' => ['required', 'string'],
            'password' => $this->password ?  ['required', 'string', 'min:8', 'confirmed'] : ['nullable'],
        ]);

        $this->dispatch('user-update', url: route('users.update', $this->user));
    }
}
