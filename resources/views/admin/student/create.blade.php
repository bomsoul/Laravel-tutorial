@extends('layouts.admindefault')

@section('content')
    <div class="d-flex flex-row-reverse">
        <div class="p-2"><a href="{{action('Admin\StudentsController@index')}}"class="btn btn-success">Back</a></div>
    </div>
    <center><h1>Add New Student</h1></center>
    <form action="{{action('Admin\StudentsController@store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="subjid"><b>Student Name :</b></label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="tname" required>
        </div>
        <div class="form-group">
            <label for="tmail"><b>Email: </b></label>
            <input type="email" class="form-control" id="mail" placeholder="Enter your email" name="tmail" required>
        </div>
        <div class="form-group">
            <label for="tpass"><b>Password: </b></label>
            <input type="password" class="form-control" id="pass" placeholder="Password" name="tpass" required>
        </div>
        <div class="form-group">
            <label for="tpass"><b>Re-Password: </b></label>
            <input type="password" class="form-control" id="repass" placeholder="Re-type password" name="repass" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
@endsection