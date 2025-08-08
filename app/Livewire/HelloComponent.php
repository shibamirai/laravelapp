<?php

namespace App\Livewire;

use Livewire\Component;

class HelloComponent extends Component
{
    public $message = 'Hello, Livewire!';

    public function updateMessage()
    {
        $this->message = 'こんにちは、Livewire!';
    }

    public function render()
    {
        $ob = ['msg' => 'レンダリングで値を渡します。'];
        return view('livewire.hello-component', $ob);
    }
}
