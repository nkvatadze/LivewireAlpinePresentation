<?php

namespace App\Http\Livewire\Traits\FlashMessages;

trait EmitsMessages
{
    public function sendSuccessMessage(string $message)
    {
        $event = 'success';

        $this->emit($event, $message);
    }
}
