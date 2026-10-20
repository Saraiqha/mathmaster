<?php

namespace App\Http\Controllers;

use App\Models\Topic;

class NotesController extends Controller
{
    public function show(Topic $topic)
    {
        return view('notes.show', compact('topic'));
    }
}