<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="{{ url('../public/css/app.css') }}" rel="stylesheet">
        <script src="{{ url('../public/js/app.js') }}" defer></script>

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
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/seeker/login') }}">Login</a>
                    <a href="{{ url('/seeker/register') }}">Register</a>
                @endauth
            </div>

            <div class="content">
                <div class="title m-b-md">
                    JobSurfer
                </div>

                <div class="links">
                    <a>Giovanni Dejan</a>
                    <a>Byran Karunachandra</a>
                    <a>Teguh Wibowo Wijaya</a>
                    <a>Vincent Tansol</a>
                </div>
                <br><br>
                <form class="links" style="display: flex!important;">
                    @csrf
                    <a style="width: 50%;"><input class="form-control form-control-lg" type="text" placeholder="Job"></a>
                    <a style="width: 50%;">
                        <input class="form-control form-control-lg" type="text" name="location" placeholder="Location">
                    </a>
                    <a><button type="submit" class="btn btn-primary">Search</button></a>
                </form>

            </div>
        </div>
    </body>
</html>
