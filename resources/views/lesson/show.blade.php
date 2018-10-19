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
                    <div class="options-row">
                        <div class="tags">
                            @foreach($lesson->tags as $tag)
                                <a href="#" class="tag">#{{ $tag->title }}</a>
                            @endforeach
                        </div>
                        <div class="reaction-box">
                            <like-button :lesson="{{ json_encode($lesson) }}" ></like-button>
                            <favorite-button :lesson="{{ json_encode($lesson) }}" ></favorite-button>
                            <complete-button :lesson="{{ json_encode($lesson) }}" ></complete-button>
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="content-title">
                            <h1 class="lesson-title"><a class="title-link" href="#">{{ $lesson->subject->name }}:</a> {{ $lesson->title }}</h1>
                            <p class="lesson-description">{{ $lesson->description }}</p>
                        </div>
                        <div class="content-info">
                            <div class="info-box">
                                <svg class="info-icon">
                                    <use xlink:href="{{asset('svg/sprite.svg#icon-graduation-cap')}}"></use>
                                </svg>
                                <p class="lesson-info">Prof. {{ $lesson->professor->user->name }}</p>
                            </div>
                            <div class="info-box">
                                <svg class="info-icon">
                                    <use xlink:href="{{asset('svg/sprite.svg#icon-book')}}"></use>
                                </svg>
                                <p class="lesson-info">{{ $lesson->field->title }}</p>
                            </div>
                            <div class="info-box">
                                <svg class="info-icon">
                                    <use xlink:href="{{asset('svg/sprite.svg#icon-gauge')}}"></use>
                                </svg>
                                <p class="lesson-info">{{ $lesson->level }}</p>
                            </div>
                            <div class="info-box">
                                <svg class="info-icon">
                                    <use xlink:href="{{asset('svg/sprite.svg#icon-hour-glass')}}"></use>
                                </svg>
                                <p class="lesson-info">{{ $lesson->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection