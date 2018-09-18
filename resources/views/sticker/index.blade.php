@extends ('layouts.app')

@section('content')
    <div class="container">
        <h1>Álbum de figurinhas</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul class="list-group">
                    @foreach($stickers as $sticker)
                        <li class="list-group-item">
                            <a href="/sticker/{{$sticker->id}}">{{ $sticker->name}} - {{ $sticker->registration }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection