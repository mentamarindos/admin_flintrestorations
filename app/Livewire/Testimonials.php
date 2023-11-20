<?php

namespace App\Livewire;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithPagination;

class Testimonials extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.testimonials', [
            'testimonials' => Testimonial::when($this->search, fn ($q) => $q->whereLike('name', $this->search)->orWhereLike('feedback', $this->search))->paginate()
        ]);
    }

    public function showFeedback($id)
    {
        $testimonial = Testimonial::find($id);

        $this->dispatch('show-feedback', feedback: $testimonial->feedback);
    }
}
