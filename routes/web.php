<?php

use App\Livewire\Admin\AdminHomePage;
use App\Livewire\Auth\RegisterPage;
use Illuminate\Support\Facades\Route;

Route::get('/', RegisterPage::class);
Route::get('/admin', AdminHomePage::class);
