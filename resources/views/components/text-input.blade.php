<div class="form-group row">
    <label for="{{$column}}" class="col-md-4 col-form-label text-md-right"> {{$title}} </label>

    <div class="col-md-6">
        <input id="{{$column}}" type="text" class="form-control{{ $errors->has("{$column}") ? ' is-invalid' : '' }}" name="{{$column}}" value="{{ old("{$column}") }}" required autofocus>
        @component('components.check-errors',['column' => $column]) @endcomponent
    </div>
</div>