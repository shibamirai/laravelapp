<?php

namespace App\Livewire;

use Livewire\Component;

class Notification extends Component
{
    public $title;
    public $content;
    
    public function render()
    {
        return view('livewire.notification');
    }
}
