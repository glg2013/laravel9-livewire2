<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @include('_shared._messages')

    <livewire:note-create />

    @foreach($notes as $note)
        <livewire:note-single :note="$note" :key="$note->id" />
    @endforeach

    {{ $notes->render() }}
</div>
