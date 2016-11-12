<nav id="main-nav" class="navbar navbar-default bg-faded">
    <ul class="nav navbar-nav">
        @foreach($viewOut->roles as $role)
            <li  class='{{($role->role_active==1? 'active' : '')}}'>
                <a href="{{url($role->link)}}" >{{$role->name}}</a>
            </li>
        @endforeach

    </ul>
</nav><!-- end #main-nav -->

<nav id="second-nav" class="navbar navbar-default ">
    <ul class="container nav navbar-nav">
        @foreach($viewOut->menus as $menu)
            <li class='{{($menu->menu_active==1? 'active' : '')}}'>
                <a href="{{url($menu->link)}}" >{{$menu->name}}</a>
            </li>
        @endforeach

    </ul>
</nav>


