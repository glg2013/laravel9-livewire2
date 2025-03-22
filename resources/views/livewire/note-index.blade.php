<div>
    {{-- The best athlete wants his opponent at his best. --}}
    @include('shared._messages')


    @foreach($notes as $note)
        <livewire:note-single :note="$note" :key="$note->id" />
    @endforeach

    {{ $notes->links() }}
</div>
