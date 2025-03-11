<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class NoteSingle extends Component
{
    public $note;

    public function mount(Note $note) {
        $this->note = $note;
    }
    public function render()
    {
        return view('livewire.note-single');
    }
}
