<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form_pop-up.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/my_script.js') }}" defer></script>
{{--    <script src="{{ asset('js/reading.js') }}" defer></script>--}}
    <script src="{{ asset('js/navbar.js') }}" defer></script>
    <script src="{{ asset('js/form_pop-up.js') }}" defer></script>
    <script src="{{ asset('js/search.js') }}" defer></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link href="{{ asset('css/comments.css') }}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html{
            position:relative;
            min-height:100%;
        }
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

        .navbar{
            margin-bottom: 0px;
        }

        * {
            margin: 0;
            padding: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            /*height: 100%;*/
            /*width: 100%;*/
        }
        .content {
            flex: 1 0 auto;
        }
        .footer {
            /*position: fixed;*/
            /*left: 0px;*/
            /*bottom: 0px;*/
            /*padding:20px 0;*/
            flex: 0 0 auto;
            height: 100px;
            /*width: 100%;*/
            background: #636b6f;
        }

        a:hover{
            text-decoration: none;
        }
        .mymodal{
            /*position: absolute;*/
            right: 10px;
            bottom: 10px;
        }
        .news_form{
            /*position: relative;*/
            /*padding-left: 50px;*/
        }
        .right_advert{
            /*height: 600px;*/
        }





        .media-body .author {
            display: block;
            font-size: 1rem;
            color: #fff;
            font-weight: 700;
        }
        .media-body .metadata {
            display: block;
            color: #fff;
            font-size: .8125rem;
        }
        .title-comments {
            font-size: 1.4rem;
            font-weight: bold;
            line-height: 1.5rem;
            color: rgba(0,0,0,.87);
            margin-bottom: 1rem;
            padding-bottom: .25rem;
            border-bottom: 1px solid rgba(34,36,38,.15);
        }
        .media-left img {
            width: 50px;
        }
        .media {
            margin-top:0px;
        }
        .vote.plus:hover {
            color: green;
        }

        .vote.minus:hover {
            color: red;
        }

        .vote {
            cursor: pointer;
        }

        .comment-reply a {
            color: #777;
        }

        .devide {
            padding: 0px 4px;
            font-size: 0.9em;
        }

        .comment-reply a {
            color: #777;
        }

        .comment-reply a:hover, .comment-reply a:focus {
            color: #000;
            text-decoration: none;
        }
        .text_carousel{
            color: white;
        }

        .left_a{
            color: red;
            font-size: 20px;
        }

        .right_a{
            color: green;
            font-size: 20px;
        }

        #cls_ctnr{
            display:none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
            border-radius: 5px;
            text-align: center;
            z-index:9999;
        }

        #cls_ctnr::after {
            border-radius: 5px;
            display: inline-block;
            vertical-align: middle;
            width: 0;
            height: 100%;
            content: '';
        }

        #cls_pop{
            border-radius: 5px;
            padding:40px 10px 10px;
            min-height:200px;
            max-width:450px;
            display: inline-block;
            vertical-align: middle;
            position:relative;
            text-align: center;
            background:#51749c;
            color:#fff;
        }

        #cls_pop h4{
            margin:0;
            text-align:center;
            font-size:15px;
        }

        .cls_close{
            display:block;
            position:absolute;
            background:#292C33;
            top:0;
            left:50%;
            margin-left:-25px;
            line-height:25px;
            font-weight:bold;
            width:50px;
            height:25px;
            text-align:center;
            color:#fff;
            cursor:pointer;
            -webkit-border-bottom-left-radius: 50px;
            -webkit-border-bottom-right-radius: 50px;
            -moz-border-radius-bottomleft: 50px;
            -moz-border-radius-bottomright: 50px;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }
        .cls_close:hover{
            background: red;
            color:#000;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <header>
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
                                {{--<input type="text" class="form-control" placeholder="Search">--}}
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            @guest
                                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            @else

                                @if(Auth::user()->role == 'admin')
                                    <li><a href="/admin">Admin panel</a></li>
                                @endif
                                @if(Auth::user()->role == 'moderator')
                                    <li><a href="/moderator">Moderator panel</a></li>
                                @endif

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
        </header>
        <div class="content" style="width: 100%;">
            @if (request()->is('/'))
                <div class="row">
                    <div class="col-sm-12">
                        <div class="carousel_body">
                            @include('components.carousel')
                        </div>
                    </div>
                </div>
            @endif

            <div class="row">
                    <div class="col-sm-2">
                        <h3 class="flex-center">Advert</h3>
                        @include('components.left_advert')
                    </div>
                    <div class="col-sm-8">
                        @yield('content')
                    </div>
                    <div class="col-sm-2">
                        <h3 class="flex-center">Advert</h3>
                        @include('components.right_advert')
                    </div>
                </div>
            </div>
        </div>
        @include('components.form_pop-up')
    </div>
    <div class="footer">
        <div id="cls_ctnr">
            <div id="cls_pop">
                <span class="cls_close" onclick="document.getElementById('cls_ctnr').style.display='none'; return false;">X</span>
                <h4>Вы действительно хотите покинуть сайт?</h4>
            </div>
        </div>
    </div>
</body>
</html>