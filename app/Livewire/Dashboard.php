<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $user_id;

    public $user_name;

    public $user_email;

    public $image;

    public $phone;

    public $skills;

    public $history;

    public $experience;

    public $user;

    public $isUpdated = false;

    public function mount()
    {

        $this->user = Auth::user();
        $this->user_id = $this->user->id;
        $this->user_name = $this->user->name;
        $this->user_email = $this->user->email;
        $this->phone = $this->user->phone;
        $this->image = $this->user->image;
        $this->skills = $this->user->skills;
        $this->history = $this->user->history;
        $this->experience = $this->user->experience;
    }

    public function render()
    {
        $this->mount();

        return view('livewire.dashboard');
    }
}
