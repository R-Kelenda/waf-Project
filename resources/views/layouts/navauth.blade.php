<ul class="nav navbar-nav pull-right"> 
    @if(Auth::guest())
        <li><a href="{{route('register')}}"><span class ="glyphicon glyphicon-pencil"></a></li> 
        <li><a href="{{route('login')}}"><span class ="glyphicon glyphicon-log-in"></a></li> 
    @else
	    <li><a href="{{route('logout')}}"><span class ="glyphicon glyphicon-log-out"></a></li> 
    @endif
</ul>