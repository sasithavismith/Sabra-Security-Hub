<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sabra Security Hub</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
               /* background-color: #fff;
               /* color: #636b6f;*/
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("assets/img/img1.jpg");
		 height: 100%;
		 -webkit-background-size:cover;
		 background-size: cover;
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
        <img src="assets/img/img2.png"  width="70px" height="70px" style="padding:50px">
            @if (Route::has('login'))
                <div class="top-right links">
                    
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    
                        <a href="{{ url('/login') }}" style="font-weight:600; color:white;">Login</a>
                        <!-- <a href="{{ url('/register') }}">Register</a> -->
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                <h3 style="font-weight:600; color:white; letter-spacing:2px;font-family:roboto;">Sabra Security Hub</h3>
                </div>

               
            </div>
        </div>
    </body>
</html>
