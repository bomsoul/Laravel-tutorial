    @extends('layouts.default')
    @section('content')
        <br>
        <hr>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>Subject ID</th>
                <th>Subject Name</th>
                <th>Credit</th>
                <th>Midterm</th>
                <th>Final</th>
            </tr>
            </thead>
                <tr>
                    <td>{{$schedule['id']}}</td>
                    <td>{{$schedule['name']}}</td>
                    <td>{{$schedule['credit']}}</td>
                    <td>{{$schedule['mid']}}</td>
                    <td>{{$schedule['final']}}</td>
                </tr>
            <tbody>
            </tbody>
        </table>
        <center>
            <h1>Grade : {{$schedule['grade']}}</h1>
        </center>
        <a href="{{url(action('ScheduleController@index'))}}" class="btn btn-success"> Back to Schedule</a>
    @endsection