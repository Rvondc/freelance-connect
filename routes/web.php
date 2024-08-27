<?php

use App\Livewire\Admin\AdminHomePage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\Login;
use App\Livewire\ClientDashboard;
use App\Livewire\Credential\Review as CredReview;
use App\Livewire\FreelancerDashboard;
use Illuminate\Support\Facades\Route;

Route::get('/register', RegisterPage::class)
    ->middleware('guest');

Route::get('/client/dashboard', ClientDashboard::class)
    ->middleware('auth');

Route::get('/admin/dashboard', AdminHomePage::class)
    ->middleware('auth');

Route::get('/freelancer/dashboard', FreelancerDashboard::class)
    ->middleware('auth');

Route::get('/credential/review', CredReview::class);

Route::get('/login', Login::class)
    ->middleware('guest')
    ->name('login');
