<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Karl Mark Balagtey</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Karl Mark Balagtey
                </div>

                <div class="links">
                    <a class="links-nav" href="{{ url('/info') }}">About Me</a>
                    <a class="links-nav" href="{{ url('/projects') }}">Projects</a>
                    <a class="links-nav" href="{{ url('/activities') }}">Activities</a>
                    <a class="links-nav" href="{{ url('/interests') }}">Interests</a>
                </div>
                <div class="links mt-5">
                    <a class="btn btn-secondary links-social" href="https://github.com/karlbalagtey" target="_blank">
                        <i class="fa fa-github fa-3x" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-secondary links-social" href="https://www.linkedin.com/in/karlmarkbalagtey/" target="_blank">
                        <i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-secondary links-social" href="https://twitter.com/karlmarkb" target="_blank">
                        <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
