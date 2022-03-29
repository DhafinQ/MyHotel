<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
         {{-- Navbar --}}
    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
            <a href="{{route('hotel.index')}}" >MyHotel</a> 
          </div>
        </div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        
        @if (!Auth::check())
          <div class="nav-links">
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('register')}}">Register</a>
          </div>
        @endif
        @if (Auth::check())
          <div class="nav-links">
            <form action="{{route('logout')}}" method="post">
              @csrf
              <a href="#">
                <input type="submit" value="Logout">
              </a>
            </form>
          </div>
        @endif
      </div>
    </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
