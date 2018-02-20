<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('images/icons/logo.png') }}" type="image/png">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{--TABS STYLES--}}
    <link href="{{ asset('css/tabs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tabStyles.css') }}" rel="stylesheet">

    {{--OWL CSS--}}
    <link href="{{ asset('css/owl/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl/owl.theme.css') }}" rel="stylesheet">

    <!-- WidgEditor -->
    <link href="{{ asset('widgEditor/css/widgEditor.css') }}" rel="stylesheet">

    <!-- my css -->
    <link href="@yield('style')" rel="stylesheet">

    <!-- main css -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- vegas css -->
    <link href="{{ asset('css/vegas/vegas.css') }}" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- UI jquery -->
    <link rel="stylesheet" href="{{ asset('ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/jquery-ui.theme.min.css') }}">


</head>
<body class=”yui-skin-sam”>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top navbar-fixed-top" style="background-color: white;">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->

                <div>
                    @yield('back')
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <ol class="list-inline">
                            <li><img src="{{ asset('images/icons/logo.png') }}" width="25"/></li>
                            <li><span> {{ config('app.myApp') }}</span></li>
                        </ol>

                    </a>
                </div>

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('account') }}">Account</a></li>
                    @else
                        @if(Auth::user()->privilege == 'master')
                            <li><a href="{{ route('addUserAdmin') }}">Register</a></li>
                        @endif
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('status')
    <div style="margin-top: 100px">
        @yield('content')
    </div>
    <div>
        @yield('addCategoryGroupButtons')
        @yield('addNewsCategoryButton')
    </div>
    <div>
        @yield('addCategoryDialog')
        @yield('addNewsCategoryDialog')
    </div>

    <div>
        @yield('addGroupDialog')
    </div>


</div>


{{--App/Jquery--}}
<script src="{{ asset('js/app.js') }}"></script>
{{--Jquery UI--}}
<script src="{{ asset('ui/jquery-ui.min.js') }}"></script>
{{--WIDGEDITOR --}}
<script src="{{ asset('widgEditor/scripts/widgEditor.js') }}"></script>
{{--VEGAS JS--}}
<script src="{{ asset('js/vegas/vegas.js') }}"></script>
{{--Custom Script--}}
<script src="@yield('script')"></script>

<script src="{{ asset('js/tabs.js') }}"></script>
<script src="{{ asset('js/modernizer.js') }}"></script>


{{--OWL CAROUSEL--}}
<script src="{{ asset('js/owl/owl.carousel.min.js') }}"></script>

{{--Main JS--}}
<script src="{{ asset('js/main.js') }}"></script>


</body>
</html>
