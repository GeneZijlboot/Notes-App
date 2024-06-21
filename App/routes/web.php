<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');


//different routes for different crud opperations revising to 'NoteController'
//you can do it like this with 7 lines of code
// Route::get('/note', [NoteController::class, 'index'])->name('note.index');
// Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
// Route::post('/note', [NoteController::class, 'store'])->name('note.store');
// Route::get('/note/{id}', [NoteController::class, 'show'])->name('note.show');
// Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');
// Route::put('/note/{id}', [NoteController::class, 'update'])->name('note.update');
// Route::delete('/note/{id}', [NoteController::class, 'destroy'])->name('note.destroy');

//or you can do it like this with just 1 line of code
Route::resource('note', NoteController::class);
