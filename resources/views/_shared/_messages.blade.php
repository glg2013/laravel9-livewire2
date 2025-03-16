@foreach(['info', 'success', 'danger', 'warning'] as $type)
    <div class="flash-message">
        <p class="alert alert-{{ $type }}">
            {{ session()->get($type) }}
        </p>
    </div>
@endforeach
