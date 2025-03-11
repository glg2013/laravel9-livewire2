<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;
use Livewire\WithPagination;

class NoteList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    // 监听 note-created 事件，刷新页面
    protected $listeners = [
        'noteCreated' => 'refresh',
    ];

    public function refresh()
    {
        // 收到通知，刷新页面，这个组件会自动重新渲染，我们什么都不用做
        // 这里我增加一个闪存信息，提示留言成功
        session()->flash('success', '留言成功');
    }


    public function render()
    {
        $notes = Note::with('user')->latest()->paginate(2);
        return view('livewire.note-list', compact('notes'));
    }
}
