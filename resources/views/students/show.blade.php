@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Student Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $student->first_name }} {{ $student->last_name }}</h5>
                <p class="card-text">Birthday: {{ $student->birthday }}</p>
                <p class="card-text">Grade Level: {{ $student->grade_level }}</p>
                <p class="card-text">Phone Number: {{ $student->phone_number }}</p>
                <p class="card-text">Email: {{ $student->email }}</p>
                <p class="card-text">Registration Date: {{ $student->registration_date }}</p>
                <p class="card-text">Responsible Name: {{ $student->responsible_name }}</p>
                <p class="card-text">Responsible Contact: {{ $student->responsible_contact }}</p>
                <a href="{{ route('students.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
@endsection