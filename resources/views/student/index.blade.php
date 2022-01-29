@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Student list</h1>

        @if (session()->has('success_message'))
        <div class="alert alert-success">Student was deleted.</div>
        @endif

        @if (count($students)== 0)

        <p>There are no companies</p>

        @endif

        <a class="btn btn-primary" href="{{route('student.create')}}">Create new Student</a>

        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Attendance Group</th>
                <th>Image</th>
                <th>Action</th>
            </tr>

            <!--blade sintaksė -->
            @foreach ($students as $student)

            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->surname}}</td>
                <td>{{$student->studentAttendancegroup->name}}</td>
                <td><img src="{{$student->image_url}}" alt="{{$student->name}} {{$student->surname}}" width="100px"></td>
                


                <td>
                    <a class="btn btn-primary" href="{{route('student.show', [$student])}}">Show</a>
                    <a class="btn btn-success" href="{{route('student.edit', [$student])}}">Edit</a>

                    <form action="{{route('student.destroy', [$student])}}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>


                </td>
            </tr>


            @endforeach

        </table>
    </div>
    @endsection

