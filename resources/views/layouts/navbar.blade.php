 <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{action('AboutController@index')}}"><b><i class="fas fa-id-card"></i> About</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{action('ScheduleController@index')}}"><b><i class="far fa-calendar-check"></i> Schedule</b></a>
    </li>
     <right><a href="{{action('HomeController@index')}}"class="btn btn-danger">Logout</a></right>
</ul>
