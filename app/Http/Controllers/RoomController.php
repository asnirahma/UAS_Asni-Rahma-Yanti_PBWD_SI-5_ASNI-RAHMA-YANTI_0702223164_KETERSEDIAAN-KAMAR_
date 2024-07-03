<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
  public function index()
  {
    $rooms = Room::all(); // Mengambil semua data kamar
    return view('rooms.index', compact('rooms')); // Menampilkan view 'rooms.index' dengan data $rooms
  }

  // Method-method lainnya seperti create, store, edit, update, delete dapat ditambahkan di sini
}
