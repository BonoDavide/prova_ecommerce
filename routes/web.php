<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/annunci/form', [AnnouncementController::class, 'announcementForm'])->name('announcement.form');