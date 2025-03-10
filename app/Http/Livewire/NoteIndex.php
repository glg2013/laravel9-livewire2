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
//        'createNoteValidationError'
    ];

    public function refresh() {
        session()->flash('message', '留言已创建');
    }

//    public function createNoteValidationError($errors)
//    {
//        dd('接收到错误信息了。。。', $errors);
//    }


    public function render()
    {
        $notes = Note::with('user')->latest()->paginate(3);
        return view('livewire.note-index', compact('notes'));
    }
}
