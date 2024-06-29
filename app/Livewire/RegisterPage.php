<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class RegisterPage extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $usertype = '';
    public $message = '';
    public $errmessage = '';

    public function render()
    {
        return view('livewire.register-page');
    }

    public function register()
    {

        if ($this->password != $this->password_confirmation) {
            $this->errmessage = 'Password does not match';
            
        } else {
            $data = new user;
            $data->name = $this->name;
            $data->email = $this->email;
            $data->password = bcrypt($this->password);

            $data->save();
            $this->message = 'User created successfully';
            $this->reset(['name', 'email', 'password', 'password_confirmation']);
        }
    }

    public function close()
    {
        $this->reset(['message', 'errmessage']);
    }
}
