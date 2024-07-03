<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
  public function index()
  {
    $notes = Note::all();
    return view('notes.index', compact('notes'));
  }

  public function create()
  {
    return view('notes.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required',
      'address' => 'required',
      'date' => 'required|date',
      'description' => 'required',
    ]);

    Note::create($request->all());

    return redirect()->route('notes.index')
      ->with('success', 'Note created successfully.');
  }

  public function edit(Note $note)
  {
    return view('notes.edit', compact('note'));
  }

  public function update(Request $request, Note $note)
  {
    $request->validate([
      'title' => 'required',
      'address' => 'required',
      'date' => 'required|date',
      'description' => 'required',
    ]);

    $note->update($request->all());

    return redirect()->route('notes.index')
      ->with('success', 'Note updated successfully.');
  }

  public function destroy(Note $note)
  {
    $note->delete();

    return redirect()->route('notes.index')
      ->with('success', 'Note deleted successfully.');
  }
}
