<?php

namespace App\Livewire\Country;

use App\Models\Country;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.country.index', [
            'countries' => Country::when($this->search, fn ($q) => $q->whereLike('name', $this->search)->orWhereLike('code', $this->search))->orderBy('name')->paginate(),
        ]);
    }
}
