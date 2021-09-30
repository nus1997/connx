@extends('site.layouts.app')

@section('content')
<section id="page-overview">
    <div class="container-fluid">
        <div class="row">
            <div class="">
                <img src="{{ url('public/site/img/overview/overview1.jpg') }}" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row py-5">
            <div class="col-md-12 text-center">
                <h1 class="text-center">@lang('messages.overview-title-the-newxt')</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="bg-gray p-5">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <h1 class="text-center t1">@lang('messages.overview-title-tailored')</h1>
                        </div>
                        <div class="col-md-6">
                            <p>@lang('messages.detail1-overview')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center pt-5">
            <div class="col-md-4">
                <img src="{{ url('public/site/img/overview/overview2.jpg') }}" class="img-fluid mt-4">
            </div>
            <div class="col-md-4">
                <img src="{{ url('public/site/img/overview/overview3.jpg') }}" class="img-fluid mt-4">
            </div>
            <div class="col-md-4">
                <img src="{{ url('public/site/img/overview/overview0.png') }}" class="img-fluid mt-4">
            </div>
        </div>

        <div class="row py-5">
            <div class="col-md-4 text-center">
                <img src="{{ url('public/site/img/overview/overviewicon.png') }}" class="img-fluid pt-5">
            </div>
            <div class="col-md-7 py-4">
                <h1>@lang('messages.titleConcepts-overview')</h1><br>
                <p>@lang('messages.concepts-overview')</p>

                <p>@lang('messages.design-overview')</p>
            </div>  
        </div>

        <div class="row">
            <div class="col-md-12">
                <img src="{{ url('public/site/img/overview/overview6.jpg') }}" class="img-fluid">
            </div>
        </div>

        <div class="row justify-content-center py-5">
            <div class="col-md-9 text-center">
                <p>@lang('messages.detail2-overview')</p>
                <div class="py-5">
                    <img src="{{ url('public/site/img/overview/overviewicondowload.png') }}">
                    <h2 class="pt-2"><b>HOTEL BROCHURE</b></h2>
                </div>
                <p><a class="text-dark" href="#">DOWNLOAD</a></p>
            </div>
        </div>
    </div>
</section>


@endsection