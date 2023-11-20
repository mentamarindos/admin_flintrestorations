<?php

namespace App\Livewire\Kyc;

use App\Models\Kyc;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.kyc.index', [
            'requests' => Kyc::with(['user'])
                ->when($this->search, fn ($q) => $q->whereLike('country', $this->search)
                    ->orWhereHas('user', fn ($qry) => $qry->whereLike('name', $this->search)
                        ->orWhereLike('email', $this->search)
                        ->orWhereLike('phone', $this->search)))
                ->paginate()
        ]);
    }
}
