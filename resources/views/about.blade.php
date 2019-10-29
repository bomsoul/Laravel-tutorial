    @extends('layouts.default')

    @section('content')
        <div class="d-flex">
            <div class="p-2">
                <img src="{{ $image }}" alt="" class="rounded-circle" style="width: 450px">
            </div>
            <div class="p-2 flex-grow-1">
                <h1>@if(!Auth::guest())
                        {{Auth::user()->role}}
                    @else {{"Guest"}}@endif Profie</h1>
                <p><b>Name :</b> {{ $name }}</p>
                <p><b>Student ID :</b> {{$id}}</p>
                <p><b>Date of Birth :</b> {{$date}}</p>
                <p><b>Mail :</b> {{ $mail }}</p>
                <p><b>Year :</b> {{ $year }}</p>
                <p><b>Faculty :</b> {{ $faculty }}</p>
                <p><b>Department </b>: {{ $department }}</p>
                <p><b>University :</b> {{ $address }}</p>
            </div>
        </div>

    @endsection