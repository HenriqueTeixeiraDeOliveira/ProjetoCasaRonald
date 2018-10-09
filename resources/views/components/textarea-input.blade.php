<div class="form-group row">
    <label for="{{$column}}" class="col-md-4 col-form-label text-md-right"> {{$title}} </label>
    <div class="col-md-6">
        <textarea id="{{$column}}" type="text" rows="{{$rows}}" class="form-control{{ $errors->has("{$column}") ? ' is-invalid' : '' }}" name="{{$column}}" required autofocus>{{ old("{$column}") }}</textarea>
        @component('components.check-errors',['column' => $column]) @endcomponent
    </div>
</div>