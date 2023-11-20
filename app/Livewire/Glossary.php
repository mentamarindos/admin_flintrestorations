<?php

namespace App\Livewire;

use App\Models\Glossary as ModelsGlossary;
use Livewire\Component;
use Livewire\WithPagination;

class Glossary extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.glossary', [
            'glossaries' => ModelsGlossary::when($this->search, fn ($q) => $q->whereLike('word', $this->search)->orWhereLike('description', $this->search))->paginate()
        ]);
    }

    public function showGlossary($id)
    {
        $glossary = ModelsGlossary::find($id);

        $this->dispatch('show-glossary', glossary: $glossary);
    }
}
