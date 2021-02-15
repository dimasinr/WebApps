<nav class="navbar navbar-expand-md navbar-sky bg-white shadow-sm" style="padding: 8px;">
    <div class="container">
        <a class="navbar-brand f-lobs" style="font-weight: 500; font-size:140%; margin-right:80px" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto" style="font-weight:500">
                <li class="nav-item ml-3">
                    <a href="{{ route('story') }}" class="nav-link">Story</a>
                </li>
                <li class="nav-item ml-3">
                    <a href="{{ route('category') }}" class="nav-link">Category</a>
                </li>
                <li class="nav-item ml-3">
                    <a href="{{ route('contact') }}" class="nav-link">Contact us</a>
                </li>
                <li class="nav-item ml-3">
                    <a href="{{ route('about') }}" class="nav-link">About</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                     <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           <img width="39" height="39" class="rounded-circle mr-2" src="../storage/{{ Auth::user()->avatar }}"> {{ Auth::user()->username }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-secondary" href="{{ route('profile') }}"><i class="far fa-user-circle mr-2"></i><i class="text-secondary">Profile</i></a>
                            <a class="dropdown-item text-secondary" href="{{ route('posts.create') }}"><i class="fas fa-plus mr-1"></i><i class="text-secondary"> New Post</i></a>
                            <a class="dropdown-item text-secondary" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mr-1"></i>
                               <i class="text-secondary">{{ __('Logout') }}</i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav> 