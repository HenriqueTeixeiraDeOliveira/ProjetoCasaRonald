@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Cadastro de Aulas</div>
                    <div class="card-body">
                        <form method="POST" action="/sticker">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right"> Nome </label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="registration" class="col-md-4 col-form-label text-md-right"> Registro </label>

                                <div class="col-md-6">
                                    <input id="registration" type="text" class="form-control{{ $errors->has('registration') ? ' is-invalid' : '' }}" name="registration" value="{{ old('registration') }}" required autofocus>

                                    @if ($errors->has('registration'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="type" class="col-md-4 col-form-label text-md-right"> Tipo </label>

                                <div class="col-md-6">
                                    <select class="form-control custom-select" id="type" name="type">
                                        <option selected>Choose...</option>
                                        <option value="escola">Ir para Escola</option>
                                        <option value="livro">Ler um livro</option>
                                        <option value="atividade">Realizar uma atividade</option>
                                    </select>
                                    @if ($errors->has('type'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('type') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="photopath" class="col-md-4 col-form-label text-md-right"> Foto </label>

                                <div class="col-md-6">
                                    <input id="photopath" type="text" class="form-control{{ $errors->has('photopath') ? ' is-invalid' : '' }}" name="photopath" value="{{ old('photopath') }}" required autofocus>

                                    @if ($errors->has('photopath'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('photopath') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary"> Cadastrar </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection