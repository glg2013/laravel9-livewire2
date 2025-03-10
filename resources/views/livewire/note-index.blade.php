<div>
    {{-- In work, do what you enjoy. --}}
    @include('shared._messages')
    @include('shared._errors')

    <livewire:note-create />

    @foreach($notes as $note)
        <livewire:note-single :note="$note" :key="$note->id"/>
    @endforeach

    {{ $notes->links() }}
</div>
