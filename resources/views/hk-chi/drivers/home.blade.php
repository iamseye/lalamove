@extends('layouts.mainLayout')
@section('css')
    <link href="http://vjs.zencdn.net/5.8.8/video-js.css" rel="stylesheet">

@stop
@section('content')

    <div id="content">

        @include('layouts._carousel')

        @include('layouts.home._intro')

        @include('layouts.home._order')

        <div class="row">
            <h1 class="page-title">{{ $viewOut->home_infos->features_title }}</h1>
            <div class="col-lg-4">
                <img  src="{{url('img/icn_money.jpg')}}" width="118"/>
                <h4>{{ $viewOut->home_infos->feature1_title }}</h4>
                <p class="text-center">{{ $viewOut->home_infos->feature1_content }}</p>

            </div>
            <div class="col-lg-4">
                <img  src="{{url('img/icn_label.jpg')}}" width="118"/>
                <h4>{{ $viewOut->home_infos->feature2_title }}</h4>
                <p class="text-center">{{ $viewOut->home_infos->feature2_content }}</p>
            </div>
            <div class="col-lg-4">
                <img  src="{{url('img/icn_van.jpg')}}" width="118"/>
                <h4>{{ $viewOut->home_infos->feature3_title }}</h4>
                <p class="text-center">{{ $viewOut->home_infos->feature3_content }}</p>
            </div>
        </div>

        <div class="row">
            <h1 class="page-title">{{ $viewOut->home_infos->customize_title }}</h1>
            <p class="text-center">{{ $viewOut->home_infos->customize_content }}</p>
        </div>
        <br><br>

    </div>

@stop

@section('script')
    <script src="http://vjs.zencdn.net/5.8.8/video.js"></script>

    <script>
        $( document ).ready(function() {
            $('.carousel').carousel();
        });
    </script>
@stop