<div class="row">
    <div class="col-lg-6">
        <div id="mobile_carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @for($i=0;$i<sizeof($viewOut->mobile_carousels);$i++)
                    <li data-target="#mobile_carousel" data-slide-to="{{$i}}" class="{{($i==0?'active':'')}}"></li>
                @endfor

            </ol>
            <div class="carousel-inner">
                @for($i=0;$i<sizeof($viewOut->mobile_carousels);$i++)
                    <div class="item {{($i==0? 'active' : '')}}">
                        <img src="{{url('img/'.$viewOut->mobile_carousels[$i]->path)}}">
                    </div>
                @endfor


            </div>
        </div>

    </div>

    <div class="col-lg-6">

        <h3 class="icn_title">{{$viewOut->home_infos->step_title}}</h3>

        <div class="row icn_steps">
            <div class="col-sm-3">
                <img alt="Set your destination" height="120" src="{{url('img/home/icn_step1.png')}}" width="120">
            </div>
            <div class="col-sm-6">
                <span>{!! $viewOut->home_infos->step1 !!}</span>
            </div>
        </div>

        <div class="row icn_steps">
            <div class="col-sm-3">
                <img alt="Set your destination" height="120" src="{{url('img/home/icn_step2.png')}}" width="120">
            </div>
            <div class="col-sm-6">
                <span>{!! $viewOut->home_infos->step2 !!}</span>
            </div>
        </div>

        <div class="row icn_steps">
            <div class="col-sm-3">
                <img alt="Set your destination" height="120" src="{{url('img/home/icn_step3.png')}}" width="120">
            </div>
            <div class="col-sm-6">
                <span>{!! $viewOut->home_infos->step3 !!}</span>
            </div>
        </div>

    </div>
</div>
