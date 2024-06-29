<?php

use App\Livewire\About;
use App\Livewire\HomePage;
use App\Livewire\Login;
use App\Livewire\RegisterPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);

Route::get('/about', About::class);

Route::get('/login',[ 'uses'=>'AppController@getregistration','as' => 'login', 'uses' => Login::class]);

Route::get('/register', RegisterPage::class);

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
});
