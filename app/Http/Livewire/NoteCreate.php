<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NoteCreate extends Component
{
    public $content;

    protected $rules = [
        'content' => 'required|min:3|max:255|string',
    ];

    public function createNote()
    {
        $this->validate();

        auth()->user()->notes()->create([
            'content' => htmlspecialchars($this->content),
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
