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
    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {
        $user = user::where('email', $this->email)->first();
        if (!$user || !Hash::check($this->password, $user->password)) {
            $this->errmessage = 'Invalid credentials';
        } else {
            auth()->login($user);
            return redirect()->intended('/');
        }
    }

    public function close()
    {
        $this->reset(['errmessage']);
    }
}
