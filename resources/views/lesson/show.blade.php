@extends ('layouts.app')

@section('content')
    <main class="main-wrapper">

        {{-- Lesson Video --}}
        <div class="theater-wrapper">
            <div class="container">
                <div class="theater">
                    <iframe class="video" src={{$lesson->video->url}} frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        {{-- Video Description --}}
        <div class="content-wrapper">
            <div class="container">
                <div class="content">
                    <div class="content-title">
                        <h1 class="lesson-title">{{ $lesson->subject->name }}: {{ $lesson->title }}</h1>
                        <p class="lesson-prof">Prof. {{ $lesson->professor->user->name }}</p>
                    </div>
                    <div>
                        <p class="lesson-description">{{ $lesson->description }}</p>
                    </div>
                    <div>
                        <p>{{ $lesson->level }}</p>
                        <p>{{ $lesson->subject->name }}</p>
                        <p>{{ $lesson->created_at->diffForHumans() }}</p>
                        <p>{{ $lesson->field->title }}</p>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection