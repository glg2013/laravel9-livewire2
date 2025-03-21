@foreach(['info', 'success', 'warning', 'danger'] as $type)
    @if(session()->has($type))
        <div class="alert alert-{{ $type }}">
            <p>{{ session()->get($type) }}</p>
        </div>
    @endif
@endforeach
