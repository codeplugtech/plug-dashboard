<?php

use Codeplugtech\PlugDashboard\Livewire\Dashboard;
use Codeplugtech\PlugDashboard\Livewire\Profile;
use Illuminate\Support\Facades\Route;



    Route::group(['middleware' => ['web', 'auth']], function () {
        Route::get('/dashboard', Dashboard::class)->name('plug.dashboard');
        Route::get('/profile', Profile::class)->name('plug.profile');
    });

