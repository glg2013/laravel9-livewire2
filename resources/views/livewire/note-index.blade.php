{{--<div>--}}
{{--    --}}{{-- Care about people's approval and you will be their prisoner. --}}
{{--    @include('_shared._messages')--}}

{{--    <livewire:note-create />--}}

{{--    @foreach($notes as $note)--}}
{{--        <livewire:note-single :note="$note" :key="$note->id" />--}}
{{--    @endforeach--}}

{{--    {{ $notes->render() }}--}}
{{--</div>--}}


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    {{-- 引入 留言板的组件 --}}
                    {{--                    <livewire:note-index />--}}
                    {{-- Care about people's approval and you will be their prisoner. --}}
                    @include('_shared._messages')

                    <livewire:note-create />

                    @foreach($notes as $note)
                        <livewire:note-single :note="$note" :key="$note->id" />
                    @endforeach

                    {{ $notes->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
