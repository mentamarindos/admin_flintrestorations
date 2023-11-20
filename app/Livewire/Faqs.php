<?php

namespace App\Livewire;

use App\Models\Faq;
use Livewire\Component;
use Livewire\WithPagination;

class Faqs extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.faqs', [
            'faqs' => Faq::with('category')->when($this->search, fn ($q) => $q->whereLike('question', $this->search)->orWhereLike('answer', $this->search))->paginate()
        ]);
    }

    public function showFaq($id)
    {
        $faq = Faq::find($id);

        $this->dispatch('show-faq', faq: $faq);
    }
}
