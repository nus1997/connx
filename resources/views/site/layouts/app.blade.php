<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SN CONNX</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- Styles -->
    {!! Html::style('public/bower_components/boostrap/dist/css/bootstrap.min.css')!!}
    {!! Html::style('public/bower_components/owl.carousel/dist/assets/owl.carousel.min.css') !!}
    {!! Html::style('public/bower_components/owl.carousel/dist/assets/owl.theme.default.min.css') !!}
    {!! Html::style('public/bower_components/magnific-popup/dist/magnific-popup.css') !!}
    {!! Html::style('public/bower_components/Font-Awesome/css/all.min.css') !!}
    {!! Html::style('public/css/main.css') !!}
</head>

<body class="lang-{{ Config::get('app.locale') }}">
    <div class="header">
        <div class="container mb-2">
            <div class="row">
                <div class="col-6 col-md-3">
                    <img src="{{ url('public\site\img\logo.png') }}" class="img-fluid pt-5" id="logo">
                </div>
                <div class="col-6 col-md-9 text-right">
                    <div id="myNav" class="overlay">
                        <div class="row">
                            <div class="d-none d-sm-block col-sm-6 col-xl-5">
                                <img src="{{ url('public/site/img/bg-pagemenu.jpg') }}" class="img-fluid">
                            </div>
                            <div class="col-sm-6 col-xl-7">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <div class="overlay-content">
                                    <a href="{{ route('site.home') }}">HOME</a>
                                    <a href="{{ route('site.overview') }}">OVERVIEW</a>
                                    <a href="{{ route('site.room','DELUXEDOUBLE') }}">THE ROOMS</a>
                                    <a href="{{ route('site.facilities') }}">THE FACILITIES</a>
                                    <a href="{{ route('site.gallery','FACILITIES') }}">THE GALLERY</a>
                                    <a href="{{ route('site.location') }}">THE LOCATION</a>
                                    <a href="{{ route('site.contact') }}">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn menu bgcolor" onclick="openNav()">
                        <span class="spanfont">MENU</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <ul class="language">
                        <li class="d-inline-block horizontal first active text-body">
                            <a class="text-dark" href="{{ url('site/Languagechange/en') }}" class="{{ Config::get('app.locale') == 'en' ? 'active' : '' }}">
                                @lang('messages.lang-en')
                            </a>
                        </li>
                        <li class="d-inline-block horizontal active text-body">
                            <a class="text-dark" href="{{ url('site/Languagechange/ch') }}" class="{{ Config::get('app.locale') == 'ch' ? 'active' : '' }}">
                                @lang('messages.lang-ch')
                            </a>
                        </li>
                        {{-- <li class="d-inline-block horizontal active text-body">
                            <a class="text-dark" href="{{ url('site/Languagechange/th') }}" class="{{ Config::get('app.locale') == 'th' ? 'active' : '' }}">
                                @lang('messages.lang-th')
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <footer>
        <div class="container pt-5 pb-4">
            <div class="row">
                <div class="col-md-4 pb-4">
                    <img src="{{ url('public\site\img\logo.png') }}" class="img-fluid" id="logo">
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-5 offset-md-1">
                            <b>PHONE</b>
                            <ul class="list-unstyled mt-3">
                                <li>
                                    +66 (0) 65 026 5058
                                </li>
                                <li>
                                    +66 (0) 65 026 5059
                                </li>
                                <li>
                                    +66 (0) 38 197 883
                                </li>
                            </ul>

                        </div>
                        <div class="col-md-6">
                            <b>EMAIL</b>
                            <ul class="list-unstyled mt-3">
                                <li>
                                    snconnxhotel@gmail.com
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 offset-md-1">
                            <b>ADDRESS</b>
                            <ul class="list-unstyled mt-3">
                                <li>
                                    3/353 Moo 6,Pattaya 3rd Road,<br>
                                    North Pattaya, Naklua, <br>
                                    Banglamung, Chonburi <br>
                                    20150, Thailand
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <b>SOCIAL MEDIA</b>
                            <ul class="list-unstyled mt-3">
                                <li class="d-inline-block">
                                    <img src="{{ url('public\site\img\icon\icon-social.png') }}" class="img-fluid">
                                </li>
                                <li class="d-inline-block">
                                    <img src="{{ url('public\site\img\icon\tripadvisor.png') }}" class="img-fluid">
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid bgcolor">
            <div class="row">
                <div class="col-12 text-center">
                    <p class='footer-span'>©2013 SN Group Pattaya All Right Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->

    <script type="text/javascript">
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>

    {!! Html::script('public/bower_components/jquery/dist/jquery.min.js') !!}
    {!! Html::script('public/bower_components/boostrap/dist/js/bootstrap.min.js')!!}
    {!! Html::script('public/bower_components/owl.carousel/dist/owl.carousel.min.js') !!}
    {!! Html::script('public/bower_components/magnific-popup/dist/jquery.magnific-popup.min.js') !!}

    @yield('scripts')

</body>

</html>