@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Edit Student</h1>
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="form-control" value="{{ $student->first_name }}" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control" value="{{ $student->last_name }}" required>
            </div>
            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input type="date" name="birthday" class="form-control" value="{{ $student->birthday }}" required>
            </div>
            <div class="form-group">
                <label for="grade_level">Grade Level</label>
                <input type="text" name="grade_level" class="form-control" value="{{ $student->grade_level }}">
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" name="phone_number" class="form-control" value="{{ $student->phone_number }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $student->email }}">
            </div>
            <div class="form-group">
                <label for="registration_date">Registration Date</label>
                <input type="date" name="registration_date" class="form-control" value="{{ $student->registration_date }}">
            </div>
            <div class="form-group">
                <label for="responsible_name">Responsible Name</label>
                <input type="text" name="responsible_name" class="form-control" value="{{ $student->responsible_name }}">
            </div>
            <div class="form-group">
                <label for="responsible_contact">Responsible Contact</label>
                <input type="text" name="responsible_contact" class="form-control" value="{{ $student->responsible_contact }}">
            </div>
            <div class="form-group">
                <label for="picture">Picture</label>
                <input type="file" name="picture" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection