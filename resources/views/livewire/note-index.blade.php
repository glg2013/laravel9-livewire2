<div>
    {{-- In work, do what you enjoy. --}}

    @include('shared._message')

    <livewire:note-create />
    <hr>

    @foreach($notes as $note)
        <livewire:note-single :note="$note" :key="$note->id"/>
    @endforeach

    {{ $notes->links()  }}

</div>
