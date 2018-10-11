<header class="header">
    <div class="container">
        <div class="nav-bar">
            <a href="/">
                <img src="{{asset('images/logo.png')}}" alt="Casa Ronald Logo" class="logo">
            </a>
            <form action="#" class="search">
                <input type="text" class="search-input" placeholder="O que deseja encontrar?">
                <button class="search-button">
                    <svg class="search-icon">
                        <use xlink:href="{{asset('svg/sprite.svg#icon-magnifying-glass')}}"></use>
                    </svg>
                </button>
            </form>
            <nav class="user-nav">
                <div class="icon-box">
                    <svg class="nav-icon">
                        <use xlink:href="{{asset('svg/sprite.svg#icon-bell')}}"></use>
                    </svg>
                    <span class="nav-notification">7</span>
                </div>
                <div class="icon-box">
                    <svg class="nav-icon">
                        <use xlink:href="{{asset('svg/sprite.svg#icon-chat')}}"></use>
                    </svg>
                </div>
                <div class="icon-box">
                    <svg class="nav-icon">
                        <use xlink:href="{{asset('svg/sprite.svg#icon-user')}}"></use>
                    </svg>
                    <span class="user-name">John Doe</span>
                </div>
            </nav>
        {{--nav-bar--}}
        </div>
    {{--container--}}
    </div>
</header>