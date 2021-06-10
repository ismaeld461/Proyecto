<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config( 'Digidata', 'Digidata') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div>
        <img src="{{ asset('images/logo.png')}}" class="logo" loading="lazy">    
        </div>
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('Digidata', 'Digidata') }}
                </a>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                        

                    <!-- Right Side Of Navbar -->

                    <ul class="navbar-nav ml-auto">
                                       <li class="nav-item">
                      <a class="nav-link active" href="/folder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gestionar
                        </font></font><span class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(Actual)</font></font></span>
                      </a>
                    </li>
                                       <li class="nav-item">
                      <a class="nav-link active" href="/folder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Edicion
                        </font></font><span class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(Actual)</font></font></span>
                      </a>
                    </li>
                                       <li class="nav-item">
                      <a class="nav-link active" href="/folder.create"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Crear
                        </font></font><span class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(Actual)</font></font></span>
                      </a>
                    </li>
                                       <li class="nav-item">
                      <a class="nav-link active" href="/folder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Consulta
                        </font></font><span class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(Actual)</font></font></span>
                      </a>
                    </li>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
