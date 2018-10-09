@if ($errors->has("{$column}"))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first("{$column}") }}</strong>
    </span>
@endif