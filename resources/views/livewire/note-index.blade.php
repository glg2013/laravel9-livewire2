<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @include('_shared._messages')

    <livewire:note-create />

    @foreach($notes as $note)
        <livewire:note-single :note="$note" :key="$note->id" />
    @endforeach

    {{ $notes->render() }}
</div>
