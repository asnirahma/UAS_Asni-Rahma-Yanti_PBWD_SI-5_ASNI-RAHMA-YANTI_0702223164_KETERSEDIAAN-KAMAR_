<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\LevelController;
use Illuminate\Support\Facades\Route;

// Route untuk home page
Route::get('/', function () {
  $mahasiswa = "Asni";
  $umur = 20;
  return view('index', compact('mahasiswa', 'umur'));
});

// Route untuk rooms
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index'); // Mengarah ke index method RoomController
Route::get('/rooms/{room}', [RoomController::class, 'show']); // Mengarah ke show method RoomController
Route::get('/rooms/{room}/edit', [RoomController::class, 'edit'])->name('rooms.edit'); // Mengarah ke edit method RoomController
Route::put('/rooms/{room}', [RoomController::class, 'update'])->name('rooms.update'); // Mengarah ke update method RoomController
Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create'); // Mengarah ke create method RoomController
Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store'); // Mengarah ke store method RoomController

// Route untuk levels
Route::get('/levels/create', [LevelController::class, 'create'])->name('levels.create'); // Untuk membuat level baru
Route::post('/levels', [LevelController::class, 'store'])->name('levels.store'); // Untuk menyimpan level baru
