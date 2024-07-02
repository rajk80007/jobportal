<?php

use App\Livewire\About;
use App\Livewire\CompanyHistory;
use App\Livewire\Dashboard;
use App\Livewire\HomePage;
use App\Livewire\Login;
use App\Livewire\ProfilePage;
use App\Livewire\Profiles;
use App\Livewire\RegisterPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);

Route::get('/about', About::class);

Route::get('/login', ['uses' => 'AppController@getregistration', 'as' => 'login', 'uses' => Login::class]);

Route::get('/register', RegisterPage::class);

Route::get('/logout', function () {
    auth()->logout();

    return redirect('/');
});

Route::get('/profile', ProfilePage::class);

Route::get('/dashboard', Dashboard::class)->middleware('auth')->name('dashboard');

Route::get('/company-history', CompanyHistory::class);

Route::get('/profiles', Profiles::class);
