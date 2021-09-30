@extends('site.layouts.app')

@section('content')

    <section id="page-home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <img src="{{ url('public/site/img/home/banner/banner-1/img-01-'.Config::get("app.locale").'.jpg') }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row py-5 justify-content-md-center">
                <div class="col-md-9 text-center">
                    <img src="{{ url('public/site/img/home/1.png') }}" class="img-fluid pb-3">
                    <h2 class="mb-2">WELCOME</h2>
                    <p class="text-center">
                        <span class="color-orange">@lang('messages.home-title-enjoy')</span><br><br>
                        @lang('messages.home-subtitle-enjoy')
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <img src="{{ url('public/site/img/home/home3.jpg') }}" class="img-fluid pb-3">
                </div>
            </div>

            <div class="row py-5">
                <div class="col-md text-center">
                    <img src="{{ url('public/site/img/home/2.png') }}" class="img-fluid pb-3">
                    <h2 class="mb-2">THE ROOMS</h2>
                    <p>
                        <span class="color-orange">Authentically Inviting</span><br><br>
                        Decorated in minimal, elegant style, with a bathtub for to go right<br>
                        into relaxing mode
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 pr-sm-0">
                    <img src="{{ url('public/site/img/home/home4.jpg') }}" class="img-fluid">
                </div>
                <div class="col-md-6 bg-gray-img">
                    <div class="row h-100">
                        <div class="col-md-12 align-self-center text-center py-5">
                            <ul class="d-inline-block text-left list-group list-unstyled">
                                <li class="horizontal first"><a class="color-black" href="{{ route('site.room','DELUXEDOUBLE') }}">@lang('messages.menu-DeluxDouble')</a></li>
                                <li class="horizontal"><a class="color-black" href="{{ route('site.room','DELUXETWIN')  }}">@lang('messages.menu-DeluxeTwin')</a></li>
                                <li class="horizontal"><a class="color-black" href="{{ route('site.room','DELUXETWINWITHBATHTUB')  }}">@lang('messages.menu-DeluxeTwinWithBath')</a></li>
                                <li class="horizontal"><a class="color-black" href="{{ route('site.room','DELUXEDOUBLEWITHBATHTUB') }}">@lang('messages.menu-DeluxeDoubleWithBath')</a></li>
                                <li class="horizontal"><a class="color-black" href="{{ route('site.room','JUNIORSUITE') }}">@lang('messages.menu-JuniorSuite')</a></li>
                                <li class="horizontal"><a class="color-black" href="{{ route('site.room','FAMILYSUITEWITHBATHTUB') }}">@lang('messages.menu-FamilyRoom')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-5">
                <div class="col-md-12 text-center">
                    <ul class="text-left d-inline-block">
                        <li class="d-inline-block align-middle mb-1">
                            <img src="{{ url('public/site/img/home/2.png') }}" class="img-fluid pr-5">
                        </li>
                        <li class="d-inline-block align-middle mt-1">
                            <h2 class="mb-2">@lang('messages.home-the-facilities')</h2>
                            <span class="color-orange">The facilities corner with classic-modern interior design</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="block-room">
            <div class ="row mb-5">
                <div class="col-md-12 p-0">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-relative">
                                <a href="{{ url('public/site/img/home/room/full/img-01.jpg')}}" class="image-popup-no-margins">
                                    <img src="{{ url('public/site/img/home/room/img-01.jpg') }}" class="img-fluid">
                                    <div class="block-detail">
                                        <h2 class="color-white">RECEPTION</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-relative">
                                <a href="{{ url('public/site/img/home/room/full/img-02.jpg')}}" class="image-popup-no-margins">
                                    <img src="{{ url('public/site/img/home/room/img-02.jpg') }}" class="img-fluid">
                                    <div class="block-detail">
                                        <h2 class="color-white">SWIMMING POOL</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-relative">
                                <a href="{{ url('public/site/img/home/room/full/img-03.jpg')}}" class="image-popup-no-margins">
                                    <img src="{{ url('public/site/img/home/room/img-03.jpg') }}" class="img-fluid">
                                    <div class="block-detail">
                                        <h2 class="color-white">DINING ROOM</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-relative">
                                <a href="{{ url('public/site/img/home/room/full/img-04.jpg')}}" class="image-popup-no-margins">
                                    <img src="{{ url('public/site/img/home/room/img-04.jpg') }}" class="img-fluid">
                                    <div class="block-detail">
                                        <h2 class="color-white">LIBRARY ROOM</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-relative">
                                <a href="{{ url('public/site/img/home/room/full/img-05.jpg')}}" class="image-popup-no-margins">
                                    <img src="{{ url('public/site/img/home/room/img-05.jpg') }}" class="img-fluid">
                                    <div class="block-detail">
                                        <h2 class="color-white">SWIMMING POOL</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
@endsection


@section('scripts')
	<script type="text/javascript">
            $('.owl-carousel').owlCarousel({
                center: true,
                items:2,
                loop:true,
                margin:10,
                responsive:{
                    600:{
                        items:4
                    }
                }
            });

            $('.image-popup-no-margins').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-img-mobile',
                image: {
                    verticalFit: true
                }
            });
	</script>
@endsection
