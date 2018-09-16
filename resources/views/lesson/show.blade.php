@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <iframe width="640" height="360" src={{$lesson->video->url}} frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <h1>{{$lesson->title}}</h1>
                <h2>{{$lesson->level}}</h2>
            </div>
        </div>
    </div>
@endsection