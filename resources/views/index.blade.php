@extends('layouts.home')

@section('content')
    <div class="jumbotron">
        <center><h1>Welcome to Lab8</h1></center>
        <center><p>after lab 7 homework will doing in here</p></center>
    </div>
    <div class="d-flex justify-content-around">
        <div class="p-2"><a href="{{action('AboutController@index')}}"><img src="https://scontent.fbkk10-1.fna.fbcdn.net/v/t1.15752-9/56191428_403296350507645_7030693818093535232_n.png?_nc_cat=101&_nc_eui2=AeHHlIEceMc9FAG4KId5OWHuMpB3IVMjHRNRP7lR17cufOfrq3VGEdEJMIlDYxLImvD0La7aQRiDgtV0h_AiDisor5j2HLmlJshYfdBYe_sDNg&_nc_ht=scontent.fbkk10-1.fna&oh=9b70e8b7fe566391de5d0bf49223a540&oe=5D416AD0" class="rounded-circle" width="150px" alt=""><br><center><b>Student</b></center></a></div>
        <div class="p-2"><a href="{{action('SubjectsController@index')}}"><img src="https://scontent.fbkk10-1.fna.fbcdn.net/v/t1.15752-9/56476723_406997150133924_5167557509262606336_n.png?_nc_cat=108&_nc_eui2=AeGum9FFgsW4RMIGPWQY3fVyhDFLkqPMGx-0lUQ5dgWdpFalswR0Of621dTERbluf7ed1PAX3ozaL2RVvtWNBG_7Xl3J71U5eMzhgnpdi3SDBg&_nc_ht=scontent.fbkk10-1.fna&oh=065b50502239128015ae44ccef9f24ac&oe=5D47D18C" alt="" class="rounded-circle" width="150px"><br><center><b>Admin</b></center></a></div>
    </div>
@endsection