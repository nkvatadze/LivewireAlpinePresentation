<?php

namespace App\Http\Livewire\Counter;

use Livewire\Component;

class CounterIndexComponent extends Component
{
    public int $counter = 0;

    public function increment()
    {
        $this->counter++;
    }

    public function decrement()
    {
        $this->counter--;
    }

    public function render()
    {
        return view('livewire.counter.counter-index-component');
    }
}
