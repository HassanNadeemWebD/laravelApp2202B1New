<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        {{-- <pre> --}}
        {{-- @php
        print_r($students);

        // echo $students['studentName'];
    @endphp --}}

        <div class="container mt-3">
            <h2>Students Record</h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>studentID</th>
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
                            <td> <button class="btn btn-primary">Update</button> &nbsp;
                                <a href="{{ url('student/delete') }}/{{$student['studentID'] }}"> <button class="btn btn-danger">Delete</button>
                                </a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </body>

    </html>




</body>

</html>
