<?php

namespace App\Livewire;

use Livewire\Component;

class HelloComponent extends Component
{
    public $name = '';
    public $pass = '';
    public $check = '';

    public function mount()
    {
        $this->name = 'no name';
        $this->check = 'no check.';
    }
    
    public function updating($propertyName)
    {
        $this->check = $propertyName;
    }

    public function updateMessage()
    {
        // not used.
    }

    public function render()
    {
        return view('livewire.hello-component');
    }
}
