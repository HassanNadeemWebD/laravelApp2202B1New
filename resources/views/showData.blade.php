@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <h2>Students Record</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th id="th">studentID</th>
                <th>studentName</th>
                <th>studentContact</th>
                <th>Gender</th>
                <th>City</th>
                <th>Update/Delete</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($students as $student)
                <tr>
                    <td>{{ $student['studentID'] }}</td>
                    <td>{{ $student['studentName'] }}</td>
                    <td>{{ $student['contact'] }}</td>
                    <td>{{ $student['gender'] }}</td>
                    <td>{{ $student['city'] }}</td>
                    <td>    <a href="{{ url('student/edit') }}/{{$student['studentID'] }}"> <button class="btn btn-primary">Update</button> &nbsp;
                        <a href="{{ url('student/delete') }}/{{$student['studentID'] }}"> <button class="btn btn-danger">Delete</button>
                        </a>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection


    {{-- <img height="500" width="500" src="{{Vite::asset('resources/images/about-us.png')}}" alt="carImage"> --}}
    




