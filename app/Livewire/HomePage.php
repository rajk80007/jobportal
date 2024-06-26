<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $hamMenu = false;
    public function render()
    {
        return view('livewire.home-page');
    }

    public function toggleHamMenu()
    {
        $this->emit('toggleHamMenu');
        $this->hamMenu = !$this->hamMenu;
        
    }
}
