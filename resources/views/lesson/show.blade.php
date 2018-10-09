@extends ('layouts.app')

@section('content')
    <main class="main-wrapper">

        <div class="theater-wrapper">
            <div class="container">
                <div class="theater">
                    <iframe class="video" src={{$lesson->video->url}} frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="container">
                <div class="content">
                    <div class="content-title">
                        <h1 class="lesson-title">{{$lesson->title}}</h1>
                        <p class="lesson-prof">Prof. João da Silva</p>
                    </div>
                    <div>
                        <p class="lesson-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dignissimos fugiat impedit maiores perferendis reiciendis ut vero. Aspernatur, nisi, veritatis?</p>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection