@extends('/layouts/layout')

@section('body_class')

<body class="imgloaded">
    @endsection

    @section('image')
    <div class="glitch">
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
    </div>
    @endsection

    @section('content')
    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="display-1 bold color_white content__title text-center"><span
                            class="color_danger">INSTRUC</span>TIONS<span class="vim-caret">&nbsp</span></h1>
                    <p class="text-grey text-spacey text-center hackerFont lead">
                        Now that you are a part of our community, you must know of some rules we follow around here.
                    </p>
                    <div class="row justify-content-center  hackerFont ">
                        <div class="col-md-10">
                            <h5 class="bold color_white pt-3">
                                General Rules and Instructions
                            </h5>
                            <ul>
                                <li>When you start the CTF, 45 minutes will be alloted to complete the challenges.</li>
                                <li>Each question has some points to it depending upon the difficulty. Taking a hint
                                    will deduce 10% of the points associated with the question. </li>
                                <li>There is no particular order of solving the questions.</li>
                                <li>Judging of the round will be based on two parameters. The first is the score of the
                                    team and second is the time required. </li>
                                <li>Ranks can be viewed on the leaderboard page. The leaderboard time is updated
                                    everytime a submission is made.</li>
                                <li>Flags found are of the format <span class="vim-caret">g03_ctf{some_text}.</span>
                                    Some of the files may contain just the inner text within the brackets. Make sure you
                                    submit it in the format specified. Flag text is not
                                    case sensitive.</li>
                                <li>This is a competitive environment with the aim of learning cyber security and
                                    ethical hacking. Please do not share the flags & solutions with others.</li>
                                <li>Internet access is granted. Feel free to explore and read about the concept behind
                                    the problem. </li>
                            </ul>
                            <h5 class="bold color_white pt-3">
                                Special Rules and Instructions
                            </h5>
                            <ul>
                                <li>Dont try to hack anything apart from this CTF Network </li>
                                <li>Dont try to hack other members </li>
                                <li>Dont spoil! Dont share how you solved each challenge with other members. </li>
                                <li>Performing denial of service attacks on the server will lead to disqualification.
                                    You are requested to play ethically.</li>
                                <li>Brute force attacks on the flag form is prohibited.</li>
                                <li>Remember, once the timer starts, it can't be paused. The timer will not resume if
                                    you logout and log back in.</li>
                            </ul>
                            <div class="row text-center pt-5">
                                <div class="col-xl-12">
                                    <button
                                        class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter"
                                        onclick="(function(){window.location.href='">
                                        <h4>LET THE HACKING BEGIN!</h4>
                                    </button>
                                    <small id="registerHelp" class="mt-2 form-text text-muted">We expect each and every
                                        one of you to comply by the rules. Failure to do so might result in a permanent
                                        ban.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('script')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    @endsection