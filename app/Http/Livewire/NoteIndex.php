<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;
use Livewire\WithPagination;

class NoteIndex extends Component
{
    use WithPagination;

    protected string $paginationTheme = 'bootstrap';

    protected $listeners = [
        'noteCreated'
    ];

    public function noteCreated(): void
    {
        // 只要实现了接收的方法即可，不用显示刷新页面
        // $this->render();

        // 增加一个友好提示
        session()->flash('success', '留言成功！');
    }

    public function render()
    {
        $notes = Note::with('user')->latest()->paginate(2);
        return view('livewire.note-index', compact('notes'))
            ->extends('layouts.app')
            ->section('content');
    }
}
