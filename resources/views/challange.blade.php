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
            .table {width: 100%;}
            .table td { padding:10px; border-bottom: 1px solid #eee;}
            .table th { padding:10px; border-bottom: 1px solid #eee;}
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
                <table class="table">
                    <tr>
                      <th>Nazwa użytkownika</th>
                      <th>E-mail</th>
                      <th>Liczba punktów</th>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->points }}</td>
                    </tr>
                  @endforeach
                </table>
                @foreach($corrects as $correct)
                  {{ $correct->body }}
                @endforeach
                <hr />
                @foreach($challanges as $challange)
                  {{ $challange->answers }}
                @endforeach
            </div>
        </div>
    </body>
</html>
