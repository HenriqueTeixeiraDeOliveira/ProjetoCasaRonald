@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{$sticker->name}}</h1>
                <h2>{{$sticker->registration}}</h2>
            </div>
        </div>
    </div>
@endsection