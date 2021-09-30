@extends('site.layouts.app')

@section('content')

<section id="page-facilities">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                {{-- <div id="owl-demo" class="owl-carousel owl-theme"> --}}
                    {{-- <div class="item"> --}}
                        <img src="{{ url('public/site/img/facilities/facilities1.jpg') }}" class="img-fluid">
                    {{-- </div> --}}
                {{-- </div> --}}
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row py-5">
            <div class="col-md-12 text-center">
                <p class="color-orange mb-0">EXPLORE OUR SELECTION OF EXCLUSIVE OFFERS AND TRANSPORT YOURSELF TO A RESPLENDENT WORLD OF PAMPERING. </p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12">
                <div class="bg-gray p-5">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <h1>@lang('messages.facility-title-Enrich')</h1>
                        </div>
                        <div class="col-md-6">
                            <p class="">
                                @lang('messages.facility-subtitle-Enrich')
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
                        <img src="{{ url('public/site/img/facilities/facilities2.jpg') }}" class="img-fluid">
                    </div>
                    <div class="col-md-6 bg-white px-0">
                        <div class="bd-bg bd-fick-totop bd-right"></div>
                        <div class="row h-100">
                            <div class="col-md-12 align-self-center pl-5 py-5">
                                <h1>@lang('messages.title-libaly')</h1>
                                <p>@lang('messages.detail-libaly')</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 order-sm-12 order-xs-1 px-0">
                        <img src="{{ url('public/site/img/facilities/facilities3.jpg') }} " class="img-fluid">
                    </div>
                    <div class="col-sm-6 order-sm-1 bg-white ">
                        <div class="row h-100">
                            <div class="col-md-12 align-self-center pl-5 py-5">
                                <h1>@lang('messages.title-breakfast')</h1>
                                <p>@lang('messages.detail-breakfast')</p>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-6 px-0">
                        <img src="{{ url('public/site/img/facilities/facilities4.jpg') }}" class="img-fluid">
                    </div>
                    <div class="col-md-6 bg-white">
                        <div class="bd-bg bd-fick-bottom bd-right"></div>
                        <div class="row h-100 ">
                            <div class="col-md-12 align-self-center pl-5 py-5">
                                <h1>@lang('messages.title-swim')</h1>
                                <p>@lang('messages.detail-swim')</p>
                                <h1>@lang('messages.title-fitness')</h1>
                                <p>@lang('messages.detail-fitness')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

@endsection

@section('scripts')
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
                loop: false,
                items:2,
                margin: 30,
                // nav: true,
                dots: true,
                responsive:{
                    0:{
                        items:1
                    }
                }
            });
	</script>
@endsection


