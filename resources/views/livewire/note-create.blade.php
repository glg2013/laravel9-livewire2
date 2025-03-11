<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="container mt-1">
        @include('shared._errors')

        <form wire:submit.prevent="createNote">
            <!-- 文本区域 -->
            <div class="mb-3">
                <label for="note-content" class="form-label">填写留言：</label>
                <textarea
                    {{-- 前后端数据双向绑定,这里好像不绑定，后端也能拿到数据 --}}
                    wire:model.defer="content"
                    {{-- 文本框内容 --}}
                    class="form-control @error("content") is-invalid @enderror " id="note-content" rows="2" placeholder="请输入留言内容..."
                ></textarea>
            </div>

            <!-- 提交按钮 -->
            <button type="submit" class="btn btn-primary mb-2">提交</button>
        </form>
    </div>

</div>
