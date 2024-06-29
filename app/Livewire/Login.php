<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $errmessage;
    public $usertype;
    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {
        if(auth()->attempt(['email' => $this->email, 'password' => $this->password])){
            return redirect()->to('/profile');
        }
    }

    public function close()
    {
        $this->reset(['errmessage']);
    }
}
