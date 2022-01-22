<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit student</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <h1>Edit student</h1>

        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Attendance group</th>
                <th>Image</th>

            </tr>
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->surname}}</td>
                <td>{{$student->studentAttendancegroup->name}}</td>
                <td><img src="{{$student->image_url}}" alt="{{$student->name}} {{$student->surname}}" width="100px"></td>
            </tr>
        </table>

        </br>
        </br>

        <form action="{{ route('student.update', [$student]) }}" method="POST">

            <input class="form-control" type="text" name="student_name" value="{{$student->name}}"> </br>
            <input class="form-control" type="text" name="student_surname" value="{{$student->surname}}"></br>
            <select name="student_group_id" class="form-control form-select">
                @foreach ($select_values as $attendancegroup)
                @if ($attendancegroup->id == $student->group_id)
                <option value="{{$attendancegroup->id}}" selected>{{$attendancegroup->name}}</option>
                @else
                <option value="{{$attendancegroup->id}}"> {{$attendancegroup->name}} </option>
                @endif
                @endforeach
            </select></br>
            <input class="form-control" type="text" name="student_image_url" value="{{$student->image_url}}"></br>


            <!-- apsauga nuo formos patvirtinimo už puslapio ribų -->
            @csrf

            <button class="btn btn-success" type="submit">Edit</button>

        </form>
    </div>
    <div class="container my-6">
        <a href="{{ route('student.index') }}" class="btn btn-info">Back</a>
    </div>
</body>

</html>