@extends('layouts.admindefault')
@section('content')
    <div class="d-flex flex-row-reverse">
        <div class="p-2"><a href="{{action('Admin\StudentsController@index')}}"class="btn btn-success">Back</a></div>
    </div>
    <table class="table">
        <tbody>
        <tr class="table-primary">
            <th></th>
            <th>Course</th>
        </tr>
        <tr>
            <th>Course Name</th>
            <td>{{$user->id}}</td>
        </tr>
        <tr>
            <th>Student Name</th>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <th>Student Email</th>
            <td>{{$user->email}}</td>
        </tr>
        </tbody>
    </table>
    @if(Auth::user() and Auth::user()->can('update',$user))
        <a href="{{action('Admin\StudentsController@edit',['id' =>$user->id])}}" class="btn btn-primary">Edit</a>
    @endif
@endsection
