<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfilePage extends Component
{
    use WithFileUploads;

    public $user_id;

    public $user_name;

    public $user_email;

    public $image;

    public $phone;

    public $skills;

    public $history;

    public $experience;

    public function render()
    {
        $this->user_id = auth()->user()->id;
        $this->user_name = auth()->user()->name;
        $this->user_email = auth()->user()->email;

        return view('livewire.profile-page', ['user_id' => $this->user_id, 'user_name' => $this->user_name, 'user_email' => $this->user_email]);
    }

    public function updateProfile()
    {

        $this->validate([
            'image' => 'image|max:1024',
            'phone' => 'required',
            'skills' => 'required',
            'history' => 'required',
            'experience' => 'required',
        ]);

        if ($this->image) {

            $imageName = time().'.'.$this->image->extension();
            $this->image->storeAs('public/images', $imageName);
            $this->image = $imageName;
        }
        $user = User::find($this->user_id);
        $user->name = $this->user_name;
        $user->email = $this->user_email;
        $user->phone = $this->phone;
        $user->image = $this->image;
        $user->skills = $this->skills;
        $user->history = $this->history;
        $user->experience = $this->experience;
        $user->save();
        $this->reset(['user_name', 'user_email', 'image', 'phone', 'skills', 'history', 'experience']);

        if ($user->usertype == '2') {
            return redirect()->to('/dashboard');

        } else {
            return redirect('/company_dashboard');
        }
    }
}
