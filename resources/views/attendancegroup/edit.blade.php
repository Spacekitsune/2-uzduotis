<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit attendance group</title>

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
        <h1>Edit attendance group</h1>

        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Difficulty level</th>
                <th>School</th>

            </tr>


            <tr>
                <td>{{$attendancegroup->id}}</td>
                <td>{{$attendancegroup->name}}</td>
                <td>{{$attendancegroup->description}}</td>
                <td>{{$attendancegroup->difficulty}}</td>
                <td>{{$attendancegroup->schoolAttendancegroup->name}}</td>

            </tr>


        </table>

        </br>
        </br>

        <form action="{{ route('attendancegroup.update', [$attendancegroup]) }}" method="POST">

            <input class="form-control" type="text" name="attendancegroup_name" value="{{$attendancegroup->name}}"> </br>
            <textarea class="form-control" name="attendancegroup_description" cols="30" rows="10">{{$attendancegroup->description}}</textarea></br>
            <input class="form-control" type="text" name="attendancegroup_difficulty" value="{{$attendancegroup->difficulty}}"> </br>
            <select name="attendancegroup_school_id" class="form-control form-select">
                @foreach ($select_values as $school)
                @if ($school->id == $attendancegroup->school_id)
                <option value="{{$school->id}}" selected>{{$school->name}}</option>
                @else
                <option value="{{$school->id}}"> {{$school->name}} </option>
                @endif
                @endforeach
            </select></br>


            <!-- apsauga nuo formos patvirtinimo už puslapio ribų -->
            @csrf

            <button class="btn btn-success" type="submit">Edit</button>

        </form>
    </div>
    <div class="container my-6">
        <a href="{{ route('attendancegroup.index') }}" class="btn btn-info">Back</a>
    </div>
</body>

</html>