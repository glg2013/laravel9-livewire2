<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;
use Livewire\WithPagination;

class NoteIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'noteCreated' => 'refresh',
    ];

    public function refresh()  {
        session()->flash('success', '留言创建成功！');
    }

    public function render()
    {
        $notes = Note::with('user')->latest()->paginate(3);
        return view('livewire.note-index', compact('notes'));
    }
}
