<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//! I COMPONENTI LIVIWIRE NON HANNO BISOGNO DI ROTTE DI TIPO POST, GLI BASTA LA ROTTA DI TIPO GET E POI GESTISCE IL RESTO IN AUTONOMIA
Route::middleware('auth')->group(function () {
    // rotta get per il form di creazioine dell'annuncio
    Route::get('/annunci/form', [AnnouncementController::class, 'announcementForm'])->name('announcement.form');
    // rotta di tipo get per il form di edit dell'annuncio
    Route::get('/announcement/edit', [AnnouncementController::class, 'announcementEdit'])->name('announcement.edit');
});

// rotta get per il catalogo annunci
Route::get('/annunci/catalogo', [AnnouncementController::class, 'announcementShow'])->name('announcement.list');