<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    {{-- 加载友好的提示小模板 --}}
    @include('_shared._messages')

    {{-- 预留创建组件 --}}
    <livewire:note-create />

    {{-- 显示留言 --}}
    @foreach($notes as $note)
        <livewire:note-single :note="$note" :key="$note->id"/>
    @endforeach


    {{ $notes->links() }}
</div>
