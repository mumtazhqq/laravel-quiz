<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AXN</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/competition-start') }}">Zagraj</a>
                    @else
                        <a href="{{ url('/login') }}">Zaloguj się</a>
                        <a href="{{ url('/register') }}">Rejestracja</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Nagordy
                </div>

                <div class="links">
                    <a href="{{ url('/') }}">Strona główna</a>
                    <a href="{{ url('/competition') }}">Zagadki</a>
                    <a href="{{ url('/about') }}">O serialu</a>
                    <a href="{{ url('/rules') }}">Regulamin</a>
                    <a href="{{ url('/rank') }}">Ranking</a>
                    <a href="{{ url('/prizes') }}">Nagrody</a>
                </div>
            </div>
        </div>
    </body>
</html>
