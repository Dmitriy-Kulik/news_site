<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="{{ asset('js/my_script.js') }}" defer></script>
    <script src="{{ asset('js/navbar.js') }}" defer></script>
    <script src="{{ asset('js/form_pop-up.js') }}" defer></script>
    <link href="{{ asset('css/comments.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100%;
            margin: 0;
        }

        .full-height {
            height: 5vh;
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

        /*.m-b-md {*/
        /*margin-bottom: 30px;*/
        /*}*/

        .news_img{
            margin: auto 0;
        }

        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            max-height: 100%;
            margin: auto;
        }

        .carousel_body{
            margin-top: 10px;
        }

        * {
            margin: 0;
            padding: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .content {
            flex: 1 0 auto;
        }
        .footer {
            flex: 0 0 auto;
            height: 100px;
            background: #636b6f;
        }
        a:hover{
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand и toggle сгруппированы для лучшего отображения на мобильных дисплеях -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Homepage</a>
            </div>

            <!-- Соберите навигационные ссылки, формы, и другой контент для переключения -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav">
                                <li class="menu-item dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b
                                                class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li class="menu-item dropdown dropdown-submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category</a>
                                            <ul class="dropdown-menu">
                                                <li class="menu-item ">
                                                    <a href="#">Link 1</a>
                                                </li>
                                                <li class="menu-item dropdown dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Link
                                                        2</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="#">Link 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Link 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Link 3</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Link 4</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item ">
                                                    <a href="#">Link 3</a>
                                                </li>
                                                <li class="menu-item dropdown dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Link
                                                        4</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="#">Link 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Link 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    @auth
                        <li><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    @endauth
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->first_name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="body_content">
            <div class="row">
                <div class="col-sm-2">

                </div>
                <div class="col-sm-8">
                    @yield('content')
                </div>
                <div class="col-sm-2">

                </div>
            </div>
        </div>
    </div>
</div>
{{--<div class="footer">--}}

{{--</div>--}}
</body>
</html>