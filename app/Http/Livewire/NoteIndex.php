<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;
use Livewire\WithPagination;

class NoteIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    protected $listeners = [
        "noteCreated"
    ];

    public function noteCreated()
    {
        session()->flash('success', 'Note Created Successfully');
    }

//    public $notes;
//
//    public function mount() {
//        $this->notes = Note::latest()->paginate(10);
//        echo "mount........";
//    }

    public function render()
    {
//        echo "render........";
        $notes = Note::with('user')->latest()->paginate(5);
        return view('livewire.note-index', compact('notes'));
    }
}
