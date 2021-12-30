<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>オモシロ占い</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('css/styles.css') }}">
        <link rel="stylesheet" href="{{ $css }}">
    </head>
    <body>
        <header>
            <div class="header">
                <h1>
                    <a href="{{ route('index')}} ">
                        オモシロ占い
                    </a>
                </h1>
                <div class='headerform'>
                    <div>
                        Funny Divination
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <div class="content">
                    <div>
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="contactform">
                <a href="{{ route('inquiry')}}">
                    お問い合わせ
                </a>
            </div>
        </footer>
    </body>
</html>
