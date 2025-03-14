<?php

namespace App\Http\Livewire;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class NoteCreate extends Component
{
    use AuthorizesRequests;

    public $content;

    public function createNote() {
        // 验证
        $this->validate([
            'content' => 'required|string|max:255|min:3',
        ]);

        // 创建留言
        auth()->user()->notes()->create([
            'content' => htmlspecialchars($this->content),
            'ip_address' => request()->ip(),
        ]);
        // 清空输入框
        $this->content = '';
        // 刷新页面
        $this->emit('noteCreated');
    }
    public function render()
    {
        return view('livewire.note-create');
    }
}
