@extends('site.layouts.app')

@section('content')
<section id="page-gallery">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="">
                <img src="{{ url('public/site/img/gallery/gallery1.jpg') }}" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container text-center">
        <div class="row pt-4 pb-5">
            <div class="col-md-12 text-center">
                <ul>
                    <li class="horizontal first"><a class="color-black" href="{{ route('site.gallery','FACILITIES') }}">FACILITIES</a></li>
                    <li class="horizontal"><a class="color-black" href="{{ route('site.gallery','INTERIOR') }}">INTERIOR</a></li>
                    <li class="horizontal"><a class="color-black" href="{{ route('site.gallery','EXTERIOR') }}">EXTERIOR</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="bg-gray p-5">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <h1 class="text-center t1">@lang('messages.title-gallery-designed')</h1>
                        </div>
                        <div class="col-md-6">
                            <p class="">@lang('messages.subtitle-gallery-designed')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center py-5">
                <div class="col-md-10">
                    <img src="{{ url('public/site/img/gallery/'.$detail['imgBlock1']) }}" class="img-fluid">
                </div>

                @foreach ($collection->chunk(2) as $key => $chunk)
                    @foreach ($chunk as $key => $img)
                    <div class="col-md-5">
                        <img src="{{ url('public/site/img/gallery/'.$img['img']) }}" class="img-fluid mt-4">
                    </div>
                    @endforeach
                @endforeach
                <div class="col-md-10">
                    <img src="{{ url('public/site/img/gallery/'.$detail['imgBlock3']) }}" class="img-fluid mt-4 ">
                </div>
                @foreach ($collection1->chunk(2) as $key => $chunk)
                    @foreach ($chunk as $key => $img)
                    <div class="col-md-5">
                        <img src="{{ url('public/site/img/gallery/'.$img['img']) }}" class="img-fluid mt-4">
                    </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>


</section>
@endsection