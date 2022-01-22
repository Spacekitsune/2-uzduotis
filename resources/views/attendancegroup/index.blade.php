<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Atendance groups</title>

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

        <h1>Attendance Groups list</h1>

        @if (session()->has('error_message'))
        <div class="alert alert-danger">Delete is not possible while attendance groups has students.</div>
        @endif

        @if (session()->has('success_message'))
        <div class="alert alert-success">Attendance group was deleted.</div>
        @endif

        @if (count($attendancegroups)== 0)

        <p>There are no companies</p>

        @endif

        <a class="btn btn-primary" href="{{route('attendancegroup.create')}}">Create new attendance group</a>

        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Difficulty</th>
                <th>Level</th>
                <th>Action</th>
            </tr>

            <!--blade sintaksė -->
            @foreach ($attendancegroups as $attendancegroup)

            <tr>
                <td>{{$attendancegroup->id}}</td>
                <td>{{$attendancegroup->name}}</td>
                <td>{{$attendancegroup->description}}</td>
                <td>{{$attendancegroup->difficulty}}</td>
                <td>{{$attendancegroup->school_id}}</td>
                

                <td>
                    <a class="btn btn-primary" href="{{route('attendancegroup.show', [$attendancegroup])}}">Show</a>
                    <a class="btn btn-success" href="{{route('attendancegroup.edit', [$attendancegroup])}}">Edit</a>

                    <form action="{{route('attendancegroup.destroy', [$attendancegroup])}}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>


                </td>
            </tr>


            @endforeach

        </table>
    </div>

</body>

</html>