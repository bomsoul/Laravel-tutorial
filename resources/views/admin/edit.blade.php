@extends('layouts.admindefault')

@section('content')
    <div class="d-flex flex-row-reverse">
        <div class="p-2"><a href="{{action('SubjectsController@show',['id'=> $subject->id])}}"class="btn btn-success">Back</a></div>
    </div>
    <center><h1>Edit {{$subject->subj_name}} Subject</h1></center>
    <form action="{{action('SubjectsController@update',['id' =>$subject->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="subjid"><b>Subject ID :</b></label>
            <input type="text" class="form-control" id="subjid" placeholder="Enter Subject ID" name="subjid" value="{{$subject->subj_id}}"required>
        </div>
        <div class="form-group">
            <label for="subjname"><b>Subject Name :</b></label>
            <input type="text" class="form-control" id="subjname" placeholder="Enter Subject Name" name="subjname" value="{{$subject->subj_name}}"required>
        </div>
        <div class="form-inline">
            <label for="leccredit"><b>Lecture Credit :</b></label>
            <select class="form-control" id="leccredit" name="leccredit">
                @for( $i = 0;$i<=4;$i++)
                    @if($subject->lec_credit == $i)
                        <option value="{{$i}}" selected="selected">{{$i}}</option>
                    @else
                        <option value="{{$i}}">{{$i}}</option>
                    @endif
                @endfor
            </select>
            <label for="labcredit"><b>Lab Credit :</b></label>
            <select class="form-control" id="labcredit" name="labcredit">
                @for( $i = 0;$i<=4;$i++)
                    @if($subject->lab_credit == $i)
                        <option value="{{$i}}" selected="selected">{{$i}}</option>
                    @else
                        <option value="{{$i}}">{{$i}}</option>
                    @endif
                @endfor
            </select>
        </div>
        <div class="form-group">
            <label for="prereq"><b>Pre-requisite :</b></label>
            <select class="form-control" id="labcredit" name="prereq">
                @foreach($allsub as $allsub)
                    <option value="{{ $allsub->subj_id}}">{{$allsub->subj_id}}  {{ $allsub->subj_name}}</option>
                @endforeach
                <option value="-" selected="selected">-</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection