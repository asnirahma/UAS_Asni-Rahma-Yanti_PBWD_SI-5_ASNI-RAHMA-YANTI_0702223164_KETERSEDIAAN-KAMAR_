<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function create()
    {
        return view('levels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:levels,name',
            // Add other validations as needed
        ]);

        Level::create($request->all());

        return redirect()->route('levels.create')->with('success', 'Level added successfully.');
    }
}
