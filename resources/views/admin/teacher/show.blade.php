@extends('layouts.admindefault')
@section('content')
    <div class="d-flex flex-row-reverse">
        <div class="p-2"><a href="{{action('Admin\TeachersController@index')}}"class="btn btn-success">Back</a></div>
    </div>
    <table class="table">
        <tbody>
        <tr class="table-danger">
            <th></th>
            <th>Teacher Data</th>
        </tr>
        <tr>
            <th>Teacher ID</th>
            <td>{{$user->id}}</td>
        </tr>
        <tr>
            <th>Teacher Name</th>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <th>Teacher Email</th>
            <td>{{$user->email}}</td>
        </tr>
        <tr>
            <th>Teach</th>
            <td>@foreach($subjects as $row)
                    <a href="{{action('SubjectsController@show',['id'=>$row->id])}}">
                        <b>- </b>{{$row->subj_name}}<br>
                    </a>
                @endforeach
            </td>
        </tr>
        </tbody>
    </table>
    @if(Auth::user() and Auth::user()->can('update',$user))
        <a href="{{action('Admin\TeachersController@edit',['id' =>$user->id])}}" class="btn btn-primary">Edit</a>
    @endif
@endsection
