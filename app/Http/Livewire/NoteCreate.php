<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NoteCreate extends Component
{
    public $content;

    protected $rules = [
        'content' => 'required|string|max:255',
    ];

    public function createNote() {
        // 验证数据
        $this->validate();

        if (auth() -> check()) {
            // 创建新的留言
            auth()->user()->notes()->create([
                'content' => $this->content,
            ]);

            // 清空输入框
            $this->content = '';

            // 发发送通知
            $this->emit('noteCreated');
        }

    }
    public function render()
    {
        return view('livewire.note-create');
    }
}
