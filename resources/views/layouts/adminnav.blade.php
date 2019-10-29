<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{action('AboutController@index')}}"><b><i class="fas fa-id-card"></i> About</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{action('SubjectsController@index')}}"><b><i class="fas fa-id-card"></i> Subject</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{action('Admin\TeachersController@index')}}"><b><i class="fas fa-id-card"></i> Teacher</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{action('Admin\StudentsController@index')}}"><b><i class="fas fa-id-card"></i> Student</b></a>
    </li>
    <right><a href="{{action('IndexController@index')}}"class="btn btn-danger">Logout</a></right>
</ul>
