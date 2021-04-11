<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>

            body {
                background: linear-gradient(-45deg, #1abc9c, #1a1a1a, #313838, #16a085);
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }
            @keyframes gradient {
                0% {
                    background-position: 0% 50%;
                }
                50% {
                    background-position: 100% 50%;
                }
                100% {
                    background-position: 0% 50%;
                }
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

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 19px;
                font-weight: 900;
                letter-spacing: .1rem;
                text-decoration: none;
                margin-left: -11px;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .ExpensApp_Title{
                text-decoration: none;
                color: white;
                font-weight: 900;
                font-size: 100px;

            }



        </style>
    </head>
    <body >

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="center" >
                    <a class=" ExpensApp_logo" href="{{ url('/ExpenseReports') }}"><img src="/images/ExpenseApperWhite-removebg-preview.png" class="img-fluid" alt="Responsive image">
                    </a>
                </div>

                <div class="links">
                    @if (Route::has('login'))
                    <div class="center links">
                        @auth
                        @else
                            <a class="log" href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a class="reg" href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

                </div>
            </div>
        </div>
    </body>
</html>
