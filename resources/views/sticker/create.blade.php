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

                            @component('components.text-input',['column' => 'name','title' => 'Nome']) @endcomponent

                            @component('components.text-input',['column' => 'registration','title' => 'Registro']) @endcomponent


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

                            @component('components.text-input',['column' => 'photopath','title' => 'Foto']) @endcomponent

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