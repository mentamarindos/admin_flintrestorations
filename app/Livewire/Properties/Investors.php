<?php

namespace App\Livewire\Properties;

use Livewire\Component;
use Livewire\WithPagination;

class Investors extends Component
{
    use WithPagination;

    public $property, $search = '';

    public function render()
    {
        return view('livewire.properties.investors', [
            'investors' => $this->property->investments()->with('user')->when($this->search, fn ($q) => $q->whereLike('amount', $this->search)->orWhereLike('monthly_rent', $this->search)->orWhereLike('appreciation', $this->search)->orWhereHas('user', fn ($query) => $query->whereLike('name', $this->search)->orWhereLike('email', $this->search)))->latest()->paginate()
        ]);
    }
}
