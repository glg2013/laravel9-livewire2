<div>
    {{-- In work, do what you enjoy. --}}
    {{-- 显示一些提示信息 --}}
    @include('shared._message')

    {{-- 增加创建留言的表单组件 --}}
    <livewire:note-create />

    {{-- 显示所有的笔记 --}}
    @foreach($notes as $note)
        <livewire:note-single :note="$note" :key="$note->id" />
    @endforeach

    {{-- 加上分页 --}}
    {{ $notes->links()  }}
</div>
