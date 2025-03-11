<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NoteCreate extends Component
{
    public $content;

    public function createNote() {

        // 验证是否登录
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // 验证表单数据，如果有错误，框架会自动返回错误信息，不再向下执行
        $this->validate([
            'content' => 'required|min:3|max:255|string',
        ]);

        // 保存笔记
        auth()->user()->notes()->create([
            'content' => $this->content,
        ]);

        // 清空表单
        $this->content = '';

        // 发送一个通知给主组件，刷新列表
        $this->emit('noteCreated');

    }

    public function render()
    {
        return view('livewire.note-create');
    }
}
