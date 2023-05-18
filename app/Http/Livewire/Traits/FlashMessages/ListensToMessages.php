<?php

namespace App\Http\Livewire\Traits\FlashMessages;

trait ListensToMessages
{
    public function bootedListensToMessages()
    {
        $this->listeners = array_merge($this->listeners, [
            'success' => 'successFlashMessage'
        ]);
    }

    public function successFlashMessage(string $message)
    {
        session()->flash('success', $message);
    }
}
