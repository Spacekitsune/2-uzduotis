<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>School info</title>

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
        <h1>School info</h1>

        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Place</th>
                <th>Phone</th>

            </tr>


            <tr>
                <td>{{$school->id}}</td>
                <td>{{$school->name}}</td>
                <td>{{$school->description}}</td>
                <td>{{$school->place}}</td>
                <td>{{$school->phone}}</td>

            </tr>


        </table>
    </div>

    <div class="container">

        @if (count($school->schoolAttendancegroups)==0)
        <p>The are no attendance groups</p>
        @else
        <table class="table table-stiped">
            <tr>
                <th>Group ID</th>
                <th>Group Name</th>
                <th>Group description</th>
                <th>Group difficulty</th>
                <th>Action</th>
            </tr>

            @foreach ($school->schoolAttendancegroups as $attendancegroup)
            <tr>
                <td>{{$attendancegroup->id}}</td>
                <td>{{$attendancegroup->name}}</td>
                <td>{{$attendancegroup->description}}</td>
                <td>{{$attendancegroup->difficulty}}</td>
                <td>
                    <form action="{{route('attendancegroup.destroy', [$attendancegroup])}}" method="post">
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>

            </tr>

            @endforeach
        </table>

        @endif

        <form action="{{route('school.destroy', [$school])}}" method="POST">
            @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
</body>

</html>