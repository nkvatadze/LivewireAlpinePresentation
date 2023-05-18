<?php

namespace App\Http\Livewire\Form;

use App\Http\Livewire\Traits\FlashMessages\ListensToMessages;
use Livewire\Component;

class FlashMessages extends Component
{
    use ListensToMessages;

    public function dismiss($event)
    {
        session()->forget($event);
    }

    public function render()
    {
        return view('livewire.form.flash-messages');
    }
}
