<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ruta option 1
Route::get('index', [EventController::class, 'index'])->name('events.index');
Route::get('adminIndex', [EventController::class, 'adminIndex'])->name('events.adminIndex');
Route::get('events/create', [EventController::class, 'create'])->name('events.create');
Route::post('events', [EventController::class, 'store'])->name('events.store');
Route::get('events/{id}', [EventController::class, 'show'])->name('events.show');
Route::get('events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('events/{id}', [EventController::class, 'update'])->name('events.update');
Route::delete('events/{id}', [EventController::class, 'destroy'])->name('events.destroy');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
