@extends('layouts.app')

@section('content')
<div class="home-bg">

    <div class="container-fluid" style="z-index: 999">
        <div class="row">
            <div class="col-sm-5">
                <h2>The Kenya Cultural Center presents the theatre application downloaded from Apple Store or Google Play.</h4>


                <div class="d-flex align-items-center">
                    <a href="#" class="mr-0">
                        <img src="{{ asset ('images/logo/apple-store.png') }}" alt="..." height="100px">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=ke.co.theatre">
                        <img src="{{ asset ('images/logo/google-play.png') }}" alt="..." height="100px">
                    </a>
                </div>
            </div>
{{-- 
            <div class="col-sm-7">
                <img src="{{ asset('images/theatre.jpg') }}" alt="..." class="img-fluid">
            </div> --}}
        </div>


    </div>
</div>
@endsection