<?php

namespace App\Livewire\Properties;

use App\Models\Property;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.properties.index', [
            'properties' => Property::select(['id', 'name', 'country_id', 'category_id', 'price'])
                ->with(['category:id,name', 'country:id,name'])
                ->when($this->search, fn ($q) => $q->whereLike('name', $this->search)
                    ->orWhereLike('price', $this->search)
                    ->orWhereHas('country', fn ($query) => $query->whereLike('name', $this->search))
                    ->orWhereHas('category', fn ($query) => $query->whereLike('name', $this->search)))
                ->paginate()
        ]);
    }
}
