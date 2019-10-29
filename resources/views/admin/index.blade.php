@extends('layouts.admindefault')
@section('content')
    <div class="d-flex">
        <div class="p-2 mr-auto"><h2>Welcome @if(!Auth::guest())
                                                {{Auth::user()->role}}
                                            @else {{"Guest"}}@endif
            </h2>
        </div>
        @if(Auth::user() and Auth::user()->can('create',\App\Subject::class))
            <div class="p-2 "><a href="{{action('SubjectsController@create')}}" class="btn btn-primary">Add new Subject</a></div>
        @endif
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>Subject ID</th>
            <th>Subject Name</th>
            <th>Lecture Credit</th>
            <th>Lab Credit</th>
            <th>Pre-requisite</th>
            <th>Detail</th>
        </tr>
        </thead>
        <tbody>
        @foreach($subjects as $subject)
            <tr>
                <td>{{$subject->subj_id}}</td>
                <td>{{$subject->subj_name}}</td>
                <td>{{$subject->lec_credit}}</td>
                <td>{{$subject->lab_credit}}</td>
                <td>{{$subject->prerequisite}}</td>
                <td><a href="{{action('SubjectsController@show',['id'=> $subject->id])}}" class="btn btn-success">Detail</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection