@extends('site.layouts.app')

@section('content')

<section id="page-room">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <img src="{{ url('public/site/img/room/room1.jpg') }}" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-12 text-center">
                <ul>
                    <li class="horizontal first ">
                        <a class="color-black  {{  $slug == 'DELUXEDOUBLE' ? 'active-menu-room' :'' }} " href="{{ route('site.room','DELUXEDOUBLE') }}">@lang('messages.menu-DeluxDouble')</a>
                    </li>
                    <li class="horizontal">
                        <a class="color-black {{  $slug == 'DELUXETWIN' ? 'active-menu-room' :'' }} " href="{{ route('site.room','DELUXETWIN')  }}">@lang('messages.menu-DeluxeTwin')</a>
                    </li>
                    <li class="horizontal">
                        <a class="color-black {{  $slug == 'DELUXETWINWITHBATHTUB' ? 'active-menu-room' :'' }} " href="{{ route('site.room','DELUXETWINWITHBATHTUB')  }}">@lang('messages.menu-DeluxeTwinWithBath')</a>
                    </li>
                    <li class="horizontal">
                        <a class="color-black {{  $slug == 'DELUXEDOUBLEWITHBATHTUB' ? 'active-menu-room' :'' }} " href="{{ route('site.room','DELUXEDOUBLEWITHBATHTUB') }}">@lang('messages.menu-DeluxeDoubleWithBath')</a>
                    </li>
                    <li class="horizontal">
                        <a class="color-black {{  $slug == 'JUNIORSUITE' ? 'active-menu-room' :'' }} " href="{{ route('site.room','JUNIORSUITE') }}">@lang('messages.menu-JuniorSuite')</a>
                    </li>
                    <li class="horizontal">
                        <a class="color-black {{  $slug == 'FAMILYSUITEWITHBATHTUB' ? 'active-menu-room' :'' }} " href="{{ route('site.room','FAMILYSUITEWITHBATHTUB') }}">@lang('messages.menu-FamilyRoom')</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="bg-gray p-5">
                    <div class="row">

                        <div class="col-md-6 text-center">
                            <h1>@lang('messages.detail-title-Authentically')</h1>
                        </div>
                        <div class="col-md-6">
                            <p class="">
                                {{ $detail['subTitle'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-gray-img">
        <div class="container">
            <div class="col-md-12 py-5">
                <div class="row">
                    <div class="col-md-6 px-0">
                        <img src="{{ url('public/site/img/room/'.$detail['imgBlock1']) }}" class="img-fluid">
                    </div>
                    <div class="col-md-6 bg-white text-center">
                        <div class="bd-bg bd-fick-totop bd-right"></div>
                        <div class="row h-100">
                            <div class="col-md-12 align-self-center py-3">
                                <div class="row pb-4">
                                    <div class="col-md-12">
                                        <h1>@lang('messages.detail-title-in-room')</h1>
                                    </div>
                                </div>
                                @foreach ($collection->chunk(3) as $key => $chunk)
                                <div class="row justify-content-center">
                                    @foreach ($chunk as $key => $product)
                                        <div class="col-3">
                                            <img src="{{ url('public/site/img/room/'.$product['img'] ) }}" class="img-fluid">
                                            <p class="mt-2">{{$product['detail']}}</p>
                                        </div>
                                    @endforeach
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 order-sm-12 order-xs-1 px-0">
                        <img src="{{ url('public/site/img/room/'.$detail['imgBlock2']) }}" class="img-fluid">
                    </div>
                    <div class="col-sm-6 order-sm-1 bg-white">
                        <div class="bd-bg bd-fick-bottom bd-left"></div>
                        <div class="row h-100">
                            <div class="col-md-12 align-self-center pl-5 py-5">
                                <h1>@lang('messages.detail-title-in-room')</h1><Br>
                                {!! $detail['detailBlock2'] !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


</section>

</div>
@endsection