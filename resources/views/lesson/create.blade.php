@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Cadastro de Aulas</div>
                    <div class="card-body">
                        <form method="POST" action="/lesson">
                            @csrf

                            @component('components.text-input',['column' => 'title','title' => 'Título']) @endcomponent

                            <div class="form-group row">
                                <label for="level" class="col-md-4 col-form-label text-md-right"> Level </label>

                                <div class="col-md-6">
                                    <select class="form-control custom-select" id="level" name="level">
                                        <option selected>Choose...</option>
                                        <option>Fácil</option>
                                        <option>Intermediário</option>
                                        <option>Difícil</option>
                                    </select>
                                    @if ($errors->has('level'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('level') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="subject" class="col-md-4 col-form-label text-md-right"> Subject </label>

                                <div class="col-md-6">
                                    <select class="form-control custom-select" id="subject" name="subject">
                                        <option selected>Choose...</option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->name}}">{{$subject->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('subject'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('subject') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            @component('components.text-input',['column' => 'url','title' => 'Url']) @endcomponent

                            @component('components.textarea-input',['column' => 'description','title' => 'Description', 'rows' => 7]) @endcomponent

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