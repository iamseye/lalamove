<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @for($i=0;$i<sizeof($viewOut->top_carousels);$i++)
            <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class="{{($i==0?'active':'')}}"></li>
        @endfor

    </ol>
    <div class="carousel-inner">
        @foreach($viewOut->top_carousels as $index => $value)
            <div class="item {{($index==0? 'active' : '')}}">
                <img src="{{url('img/'.$viewOut->top_carousels[$index]->path)}}">
            </div>
        @endforeach
    </div>
</div>