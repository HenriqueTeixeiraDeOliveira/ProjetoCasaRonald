@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul class="list-group">
                    @foreach($lessons as $lesson)
                        <li class="list-group-item">
                            <a href="/lesson/{{$lesson->id}}">{{ $lesson->title}} - {{ $lesson->subject->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection