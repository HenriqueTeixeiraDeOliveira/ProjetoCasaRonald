<nav class="sidebar">
    <div class="container">
        <ul class="main-nav">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <svg class="side-icon">
                        <use xlink:href="{{asset('svg/sprite.svg#icon-clapperboard')}}"></use>
                    </svg>
                    <span class="item-name">Aulas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <svg class="side-icon">
                        <use xlink:href="{{asset('svg/sprite.svg#icon-pie-chart')}}"></use>
                    </svg>
                    <span class="item-name">Desempenho</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <svg class="side-icon">
                        <use xlink:href="{{asset('svg/sprite.svg#icon-open-book')}}"></use>
                    </svg>
                    <span class="item-name">Álbum</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <svg class="side-icon">
                        <use xlink:href="{{asset('svg/sprite.svg#icon-home')}}"></use>
                    </svg>
                    <span class="item-name">Doação</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <svg class="side-icon">
                        <use xlink:href="{{asset('svg/sprite.svg#icon-globe')}}"></use>
                    </svg>
                    <span class="item-name">Contato</span>
                </a>
            </li>
        </ul>
    </div>
</nav>



{{--
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/lesson">Aulas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sticker">Figurinhas</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                               {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>--}}
