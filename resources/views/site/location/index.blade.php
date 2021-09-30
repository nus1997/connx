@extends('site.layouts.app')

@section('content')
    <section id="page-location">
        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12 p-0">
                    <img src="{{ url('public/site/img/location/location1.jpg') }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>The Location</h1>
                    <p class="mt-1">
                        The SN Connx Pattaya is conveniently located in the heart of Pattaya<br>
                        on Chalerm Prakiat (Pattaya Sai 3) Road.
                    <p>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-10">
                    <img src="{{ url('public/site/img/location/map_news.jpg') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection