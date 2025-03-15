@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors as $error) @endforeach
            <li>
                {{ $error }}
            </li>
        </ul>
    </div>
@endif
