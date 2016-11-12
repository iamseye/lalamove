<div class="row">
    <div class="col-lg-12">
        <video id="example_video_1"  class="video-js vjs-default-skin vjs-big-play-centered" controls
               preload="auto" width="940"  poster="{{url('video/video.jpg')}}"
               data-setup="{'fluid':true,'aspectRatio':'16:9'}">
            <source src="{{url($viewOut->home_infos->video_path)}}" type='video/mp4'>
        </video>
    </div>

</div>