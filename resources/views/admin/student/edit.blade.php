@extends('layouts.admindefault')

@section('content')
    <div class="d-flex flex-row-reverse">
        <div class="p-2"><a href="{{action('Admin\StudentsController@show',['id'=> $user->id])}}"class="btn btn-success">Back</a></div>
    </div>
    <center><h1>Edit {{$user->name}} Student</h1></center>
    <form action="{{action('Admin\StudentsController@update',['id' =>$user->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="subjid"><b>Student Name :</b></label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" value="{{$user->name}}" name="name" required>
        </div>
        <div class="form-group">
            <label for="tmail"><b>Email: </b></label>
            <input type="email" class="form-control" id="mail" placeholder="Enter your email" value="{{$user->email}}" name="mail" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection