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
        'noteCreated'
    ];

    public function noteCreated() {
        // 刷新页面
        //$this->render();
        // 经过测试，收到通知即可自动刷新，不用显示执行 render() 方法了

        // 增加一个创建成功的提示
        session()->flash('message', '留言成功！');
    }

    public function render()
    {
        $notes = Note::with('user')->latest()->paginate(2);
        return view('livewire.note-index', compact('notes'));
    }
}
