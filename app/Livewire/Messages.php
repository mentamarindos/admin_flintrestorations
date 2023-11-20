<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class Messages extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.messages', [
            'messages' => Message::when($this->search, fn ($q) => $q->whereLike('name', $this->search)->orWhereLike('email', $this->search)->orWhereLike('subject', $this->search))->latest()->paginate()
        ]);
    }

    public function showMessage($id)
    {
        $message = Message::find($id);

        $this->dispatch('show-message', message: $message, url: route('messages.update', $id));
    }
}
