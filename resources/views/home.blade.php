@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="container">
                        <a href="{{ route('school.index') }}" class="btn btn-info mr-4">Schools</a>
                        <a href="{{ route('attendancegroup.index') }}" class="btn btn-info mr-4">Attendance groups</a>
                        <a href="{{ route('student.index') }}" class="btn btn-info mr-4">Students</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
