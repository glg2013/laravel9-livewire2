<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="container mt-1">
        @include('_shared._errors')

        <form wire:submit.prevent="createNote">
            <!-- 文本区域 -->
            <div class="mb-3">
                <label for="note-content" class="form-label">填写留言：{{ $content ? '正在输出中。。。' : '' }}</label>
                <textarea class="form-control @error("content") is-invalid @enderror " id="note-content" rows="2" placeholder="请输入留言内容..."
                          wire:model.debounce.500ms="content"
                ></textarea>
            </div>

            <!-- 提交按钮 -->
            <button type="submit" class="btn btn-primary mb-2">提交</button>
        </form>
    </div>

</div>
