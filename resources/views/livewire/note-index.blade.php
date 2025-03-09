<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @foreach($notes as $note)
        <livewire:note-single :note="$note" />
    @endforeach
</div>
