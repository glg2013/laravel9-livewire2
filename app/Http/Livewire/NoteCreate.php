<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NoteCreate extends Component
{
    public $content;

    public function createNote() {
        // 验证数据
        $this->validate([
            'content' => 'required|min:3|max:255|string',
        ]);

        // 保存数据到数据库
        auth()->user()->notes()->create([
            'content' => htmlspecialchars($this->content),
            'ip_address' => request()->ip(),
        ]);

        // 清空输入框
        $this->content = '';

        // 发送一个完成的事件
        $this->emit('noteCreated');
    }

    public function render()
    {
        return view('livewire.note-create');
    }
}
