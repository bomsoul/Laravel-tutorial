    @extends('layouts.default')

    @section('content')
        <h1>Student Schedule</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Subject ID</th>
                    <th>Subject Name</th>
                    <th>Credit</th>
                    <th>Show Grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($schedulesArray as $row)
                    <tr>
                        <td>{{$row['id']}}</td>
                        <td>{{$row['name']}}</td>
                        <td>{{$row['credit']}}</td>
                        <td><a href="{{ action('ScheduleController@grade', ['order'=>$row['order']] )}}" class="btn btn-outline-success">Show Grade</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection