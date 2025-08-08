<?php

namespace App\Livewire;

use Livewire\Component;

class HelloComponent extends Component
{
    public $message = 'Hello, Livewire!';
    
    public function render()
    {
        return view('livewire.hello-component');
    }
}
