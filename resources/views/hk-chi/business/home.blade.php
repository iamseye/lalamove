@extends('layouts.mainLayout')
@section('css')
    <link href="http://vjs.zencdn.net/5.8.8/video-js.css" rel="stylesheet">

@stop
@section('content')

    <div id="content">

        @include('layouts._carousel')

        @include('layouts.home._intro')

        @include('layouts.home._video')

        @include('layouts.home._order')

        @include('layouts.home._feature')

        <h4 class="slogan align-center align_left" style="text-align:left; color: #383838;">{!! $viewOut->home_infos->feature_content!!}}</h4>

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