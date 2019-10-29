@extends('layouts.admindefault')
@section('content')
    <div class="d-flex">
        <div class="p-2 mr-auto"><h2>Welcome @if(!Auth::guest())
                    {{Auth::user()->role}}
                @else {{"Guest"}}@endif</h2></div>
        @if(Auth::user() and Auth::user()->can('create',\App\User::class))
            <div class="p-2 "><a href="{{action('Admin\StudentsController@create')}}" class="btn btn-primary">Add new Student</a></div>
        @endif
    </div>
    <center><h3>For Manage Student</h3></center>
    <table class="table">
        <thead class="table-primary">
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Detail</th>
        </tr>
        </thead>
        <tbody id="item-body">
        @foreach($users as $user)
            @if($user->role =='STUDENT')
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{action('Admin\StudentsController@show',['id'=> $user->id])}}" class="btn btn-success">Detail</a></td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
    {{$users->links()}}
@endsection