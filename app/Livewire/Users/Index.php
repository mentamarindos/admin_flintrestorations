<?php

namespace App\Livewire\Users;

use App\Enums\UserRole;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.users.index', [
            'users' => User::whereNot('id', auth()->id())->when($this->search, fn ($q) => $q->whereLike('name', $this->search)->orWhereLike('email', $this->search)->orWhereLike('phone', $this->search))->paginate()
        ]);
    }
}
