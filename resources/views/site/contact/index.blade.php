@extends('site.layouts.app')

@section('content')
<section id="page-contact">
    <div class="container mt-1 ">

        <div class="row">
            <div class="col-md-4 text-center bot">
                <img src="{{ url('public\site\img\contact\icon1.png') }}" class="img-fluid">
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <b>ADDRESS</b><br>
                        3/353 Moo 6, Pattaya 3rd Road, 
                        North Pattaya, Naklua,
                        Banglamung,Chonburi
                        20150, Thailand
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <b>PHONE</b><br>
                        +66 (0) 65 026 5058<br>
                        +66 (0) 65 026 5059<Br>
                        +66 (0) 38 197 883
                    </div>
                    <div class="col-md-6 mb-4">
                        <b>EMAIL</b><br>
                        snconnxhotel@gmail.com
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <img src="{{ url('public\site\img\contact\facebook.png') }}" class="img-fluid">
                        SN CONNECT HOTEL
                    </div>
                    <div class="col-md-6 mb-4">
                        <img src="{{ url('public\site\img\contact\trip.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <img src="{{ url('public\site\img\contact\icon1.png') }}" class="img-fluid">
            </div>
        </div>

        <div class="row mt-5 text-center ">
            <div class="container-fluid mb-5" id="iframe">
                <div class="row">
                    <div class="col-sm-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.3477045056593!2d100.89544743942814!3d12.949588530561744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310295fd3e6f9e59%3A0x7904f8729a8b14e0!2sSN%20CONNX!5e0!3m2!1sth!2sth!4v1567135456686!5m2!1sth!2sth" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="">
                        </iframe>

                        {{-- <a class="mt-5" href="https://www.google.co.th/maps/dir//SN+CONNX,+3%2F353+Moo.6,+North+Pattaya,+Sai+3,+%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%87%E0%B8%9E%E0%B8%B1%E0%B8%97%E0%B8%A2%E0%B8%B2+%E0%B8%AD%E0%B8%B3%E0%B9%80%E0%B8%A0%E0%B8%AD%E0%B8%9A%E0%B8%B2%E0%B8%87%E0%B8%A5%E0%B8%B0%E0%B8%A1%E0%B8%B8%E0%B8%87+%E0%B8%8A%E0%B8%A5%E0%B8%9A%E0%B8%B8%E0%B8%A3%E0%B8%B5+20150/@12.9494317,100.895029,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x310295fd3e6f9e59:0x7904f8729a8b14e0!2m2!1d100.8972177!2d12.9494317!3e0">
                            <b>DIRECTION</b>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection