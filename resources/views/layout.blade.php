<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>G03 CTF</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>

    @yield('meta')

    <link rel="stylesheet" href="css/main.css">

</head>

@yield('body_class')

@yield('preloaded')

@yield('image')

<div class="navbar-dark text-white">
    <div class="container">
        <nav class="navbar px-0 navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a href="{{ route('home.index') }}" class="pl-md-0 p-3 text-decoration-none text-light">
                        <h3 class="bold"><span class="color_danger">G03</span><span class="color_white">CTF</span></h3>
                    </a>
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="{{ route('home.index') }}" class="p-3 text-decoration-none text-light bold">Home</a>
                    <a href="{{ route('home.about') }}" class="p-3 text-decoration-none text-light bold">About</a>
                    <a href="{{ route('home.instruct') }}"
                        class="p-3 text-decoration-none text-light bold">Instruction</a>
                    <a href="{{ route('home.hackerboard') }}"
                        class="p-3 text-decoration-none text-light bold">Hackerboard</a>
                    @guest
                    <a href="{{ route('login') }}" class="p-3 text-decoration-none text-light bold">Login</a>
                    <a href="{{ route('register') }}" class="p-3 text-decoration-none text-light bold">Register</a>
                    @endguest

                    @auth
                    {{-- <a href="{{ route('user.chall') }}"
                        class="p-3 text-decoration-none text-light bold">Challenges</a>
                    <a href="{{ route('user.profile') }}" class="p-3 text-decoration-none text-light bold">Profile</a>
                    --}}
                    <a href="{{route('home')}}" class="p-3 text-decoration-none text-light bold">Challenges</a>
                    <a href="" class="p-3 text-decoration-none text-light bold">Profile</a>
                    <a href="" class="p-3 text-decoration-none text-light bold"
                        onclick="event.preventDefault(); document.getElementById('form_logout').submit()">Logout</a>
                    <form id="form_logout" type="hidden" method="post" action="{{ route('logout') }}">@CSRF</form>
                    @endauth
                </div>
            </div>
        </nav>
    </div>
</div>

@yield('content')

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

@yield('script')

</body>

</html>