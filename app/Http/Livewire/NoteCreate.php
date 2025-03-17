<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NoteCreate extends Component
{
    public $content;

    public function createNote()
    {
        $this->validate([
            'content' => 'required|string|max:255|min:3',
        ]);

        auth()->user()->notes()->create([
            'content' => $this->content,
            'ip_address' => request()->ip(),
        ]);

        $this->content = '';

        $this->emit('noteCreated');
    }

    public function render()
    {
        return view('livewire.note-create');
    }
}
