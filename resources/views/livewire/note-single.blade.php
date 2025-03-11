<div>
    {{-- Be like water. --}}
    <div class="d-flex position-relative mb-3"> <!-- 添加 mb-3 为每个留言组件添加间距 -->
        <img src="avatar/rubber-duck.png" class="flex-shrink-0 me-3 rounded-circle" style="width: 50px; height: 50px;" alt="...">
        <div class="flex-grow-1 position-relative"> <!-- 添加 position-relative 确保时间定位基于此容器 -->
            <h5 class="mt-0">{{ $note->user->name }} 说：</h5>
            <p>{{ $note->content }}</p>
            <p class="position-absolute bottom-0 end-0 mb-0 me-3" title="{{ $note->created_at }}">留言时间：{{ $note->created_at->diffForHumans() }}</p>
        </div>
    </div>
    <hr>
</div>
