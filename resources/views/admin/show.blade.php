@extends('layouts.admindefault')
@section('content')
    <div class="d-flex flex-row-reverse">
        <div class="p-2"><a href="{{action('SubjectsController@index')}}"class="btn btn-success">Back</a></div>
    </div>
    <table class="table">
        <tbody>
            <tr class="thead-dark">
                <th></th>
                <th>Subject Data</th>
            </tr>
            <tr>
                <th>Subject ID</th>
                <td>{{$subject->subj_id}}</td>
            </tr>
            <tr>
                <th>Subject Name</th>
                <td>{{$subject->subj_name}}</td>
            </tr>
            <tr>
                <th>Lecture Credit</th>
                <td>{{$subject->lec_credit}}</td>
            </tr>
            <tr>
                <th>Lab Credit</th>
                <td>{{$subject->lab_credit}}</td>
            </tr>
            <tr>
                <th>Pre-requisite</th>
                <td>{{$subject->prerequisite}}</td>
            </tr>
            <tr>
                <th>Teach By </th>
                <td>{{$user->name}}</td>
            </tr>
        </tbody>
    </table>
    @if(Auth::user() and Auth::user()->can('update',$user))
        <a href="{{action('SubjectsController@edit',['id' =>$subject->id])}}" class="btn btn-primary">Edit</a>
    @endif
@endsection
