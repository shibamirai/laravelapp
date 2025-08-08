<?php

namespace App\Livewire;

use Livewire\Component;

class HelloComponent extends Component
{
    public $message = '';
    public $input = '';

    public function mount()
    {
        $this->message = '内部コンポーネントの利用';
    }

    public function doAction()
    {
        $this->triggerChildEvent($this->input);
    }

    public function triggerChildEvent($msg)
    {
        $this->dispatch('child-event', $msg);
    }

    public function render()
    {
        $alert = [
            'alert_title' => '重要なお知らせ',
            'alert_content' => 'システムからの重要な通知です。'
        ];
        return view('livewire.hello-component', $alert);
    }
}
