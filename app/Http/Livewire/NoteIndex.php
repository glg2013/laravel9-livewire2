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
        'noteCreated'
    ];

    public function noteCreated() {
        session()->flash('success', '留言成功！');
    }

    public function render()
    {
        $notes = Note::query()->latest()->paginate(3);
        return view('livewire.note-index', compact('notes'));
    }
}
