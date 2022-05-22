@extends('/layout')

@section('body_class')

<body class="imgloaded">
    @endsection

    @section('preloaded')
    <div id="preloader">
    </div>

    <div id="main">
        @endsection

        @section('image')
        <div class="glitch">
            <div class="glitch__img"></div>
            <div class="glitch__img"></div>
            <div class="glitch__img"></div>
            <div class="glitch__img"></div>
            <div class="glitch__img"></div>
        </div>
        @endsection

        @section('content')
        <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <h1 class="display-1 bold color_white content__title2">WELCOME TO</h1>
                        <h1 class="display-1 bold color_white content__title">G03 CTF<span
                                class="vim-caret">&nbsp;</span></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4">
                        <p class="mt-5 text-grey text-spacey hackerFont lead">
                            The quieter you become the more you are able to hear.
                        </p>
                        @guest
                        <button class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter"
                            onclick="(function(){window.location.href='{{ route('login') }}'})();">
                            <h4>Login</h4>
                        </button>
                        @endguest

                        @auth
                        <button class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter"
                            onclick="(function(){window.location.href='{{route('home')}}">
                            <h4>Hack on!</h4>
                        </button>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('script')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="js/preloader.js"></script>
    @endsection