<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    @include('shared._messages')


    @foreach($notes as $note)
        <livewire:note-single :note="$note" :key="$note->id"/>
    @endforeach

    {{ $notes->links() }}
</div>
