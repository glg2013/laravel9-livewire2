<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    @include('shared._messages')

    <livewire:note-create />
    <hr>

    @foreach($notes as $note)
        <livewire:note-single :note="$note" :key="$note->id"/>
    @endforeach

    {{ $notes->render() }}
</div>
