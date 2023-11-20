<?php

namespace App\Livewire;

use App\Models\Selling;
use Livewire\Component;
use Livewire\WithPagination;

class Sellings extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.sellings', [
            'requests' => Selling::with('location:id,name')->when($this->search, fn ($q) => $q->whereLike('first_name', $this->search)->orWhereLike('last_name', $this->search)->orWhereLike('email', $this->search)->orWhereLike('address', $this->search)->orWhereLike('phone', $this->search)->orWhereHas('location', fn ($qry) => $qry->whereLike('name', $this->search)))->latest()->paginate()
        ]);
    }

    public function showRequest($id)
    {
        $selling = Selling::with('location:id,name')->find($id);

        $this->dispatch('show-request', selling: $selling);
    }
}
