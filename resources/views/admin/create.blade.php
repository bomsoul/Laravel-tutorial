@extends('layouts.admindefault')

    @section('content')
        <div class="d-flex flex-row-reverse">
            <div class="p-2"><a href="{{action('SubjectsController@index')}}"class="btn btn-success">Back</a></div>
        </div>
        <center><h1>Add New Subject</h1></center>
        <form action="{{action('SubjectsController@store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="subjid"><b>Subject ID:</b></label>
                <input type="text" class="form-control" id="subjid" placeholder="Enter Subject ID" name="subjid" required>
            </div>
            <div class="form-group">
                <label for="subjname"><b>Subject Name:</b></label>
                <input type="text" class="form-control" id="subjname" placeholder="Enter Subject Name" name="subjname" required>
            </div>
            <div class="form-inline">
                <label for="leccredit"><b>Lecture Credit:</b></label>
                <select class="form-control" id="leccredit" name="leccredit">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <label for="labcredit"><b>Lab Credit:</b></label>
                <select class="form-control" id="labcredit" name="labcredit">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    @endsection