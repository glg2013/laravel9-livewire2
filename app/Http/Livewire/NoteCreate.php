<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NoteCreate extends Component
{
    public $content;

    public function createNote() {
        $this->validate([
            'content' => 'required|string|max:255|min:3',
        ]);

        if (!auth()->check()) {
            // 没有登录不能留言
            session()->flash('error', 'Please login first');
            return redirect()->route('login');
        }

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
