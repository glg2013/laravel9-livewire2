<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class NoteIndex extends Component
{
    public function render()
    {
        $notes = Note::all();
        return view('livewire.note-index', compact('notes'));
    }
}
