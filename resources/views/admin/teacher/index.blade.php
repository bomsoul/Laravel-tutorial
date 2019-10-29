@extends('layouts.admindefault')
@section('content')
    <div class="d-flex">
        <div class="p-2 mr-auto"><h2>Welcome @if(!Auth::guest())
                    {{Auth::user()->role}}
                @else {{"Guest"}}@endif</h2></div>
        @if(Auth::user() and Auth::user()->can('create',\App\User::class))
        <div class="p-2 "><a href="{{action('Admin\TeachersController@create')}}" class="btn btn-primary">Add new Teacher</a></div>
        @endif
    </div>
    <center><h3>For Manage Teacher</h3></center>
    <table class="table">
        <thead class="table-danger">
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Detail</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><a href="{{action('Admin\TeachersController@show',['id'=> $user->id])}}" class="btn btn-success">Detail</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection