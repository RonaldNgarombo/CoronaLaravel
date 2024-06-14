<?php

use App\Livewire\Admin\WebAdminDashboard;
use App\Livewire\Auth\WebLogin;
use App\Livewire\Auth\WebRegister;
use App\Livewire\WebDashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', WebDashboard::class)->name('dashboard');


// Route::group(['middleware' => ['auth']], function () {

//     Route::get('/', WebAdminDashboard::class)->name('dashboard');



// });

Route::get('/login', WebLogin::class)->name('login');
Route::get('/register', WebRegister::class)->name('register');
