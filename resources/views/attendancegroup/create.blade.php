<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Create new atrendance group</title>

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
        <h1>Enter new attendance group</h1>

        <form action="{{ route('attendancegroup.store') }}" method="POST">

            <input class="form-control" type="text" name="attendancegroup_name" placeholder="Name"> </br>
            <textarea class="form-control" name="attendancegroup_description" cols="30" rows="10" placeholder="Description"></textarea></br>
            <input class="form-control" type="text" name="attendancegroup_difficulty" placeholder="Difficulty"> </br>
            <select name="attendancegroup_school_id" class="form-control form-select">
                @foreach ($select_values as $school)
                <option value="{{$school->id}}"> {{$school->name}} </option>
                @endforeach
            </select></br>

            <!-- apsauga nuo formos patvirtinimo už puslapio ribų -->
            @csrf

            <button class="btn btn-success" type="submit">Add</button>

        </form>
    </div>
    <div class="container my-6">
        <a href="{{ route('attendancegroup.index') }}" class="btn btn-info">Back</a>
    </div>

</body>

</html>