<div class="header clearfix">
    <div class="dropdown pull-right">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>&nbsp;{{$viewOut->locale_current->city}}&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;{{$viewOut->locale_current->language}} <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            @foreach($viewOut->locales as $locale)
            <li><a class="switchCountry" href="{{url('/'.$locale->code)}}">{{$locale->city}}</a></li>
            @endforeach
        </ul>
    </div>

    <a href="{{url(session('locale').'/'.session('role').'/home')}}" id="logo">
        <img src="{{url('img/'.$viewOut->locale_current->slogan)}}" alt="Lalamove" title="Lalamove" width="500">
    </a>

</div>