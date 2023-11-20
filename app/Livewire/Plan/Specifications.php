<?php

namespace App\Livewire\Plan;

use Livewire\Component;

class Specifications extends Component
{
    public $specifications = [];

    public function mount($specifications)
    {
        $this->specifications = old('specifications', $specifications);
    }

    public function render()
    {
        return view('livewire.plan.specifications');
    }

    // add new specification
    public function add()
    {
        $this->specifications[] = '';
    }

    // delete new specification
    public function delete($index)
    {
        unset($this->specifications[$index]);
        array_splice($this->specifications, 0, 0);
    }
}
