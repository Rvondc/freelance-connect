<?php

use App\Livewire\Admin\AdminHomePage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\Login;
use App\Livewire\ClientDashboard;
use App\Livewire\CreatePosting;
use App\Livewire\Credential\Review as CredReview;
use App\Livewire\FreelancerDashboard;
use App\Livewire\Jobs;
use App\Livewire\ViewCredentials;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $user = auth()->user();

    if ($user->user_type === 'Admin') {
        return redirect('/admin/dashboard');
    } else if ($user->user_type === 'Freelancer') {
        return redirect('/freelancer/dashboard');
    } else if ($user->user_type === 'Client') {
        return redirect('/client/dashboard');
    }
})->middleware('auth');

Route::get('/jobs', Jobs::class)
    ->middleware('auth');

Route::get('/register', RegisterPage::class)
    ->middleware('guest');

Route::get('/client/dashboard', ClientDashboard::class)
    ->middleware('auth');

Route::get('/admin/dashboard', AdminHomePage::class)
    ->middleware('auth');

Route::get('/freelancer/dashboard', FreelancerDashboard::class)
    ->middleware('auth');

Route::get('/credential/review', CredReview::class);

Route::get('/credential/view/{approval}', ViewCredentials::class);

Route::get('/posting/create', CreatePosting::class);

Route::get('/login', Login::class)
    ->middleware('guest')
    ->name('login');
