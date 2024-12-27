@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card card-custom p-20">
        <div class="card-header">
            <h1>Edit Student</h1>
        </div>
        <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row mb-3">
                <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" name="first_name" class="form-control" value="{{ $student->first_name }}" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" name="last_name" class="form-control" value="{{ $student->last_name }}" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="birthday" class="col-sm-2 col-form-label">Birthday</label>
                <div class="col-sm-10">
                    <input type="date" name="birthday" class="form-control" value="{{ $student->birthday }}" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="grade_level" class="col-sm-2 col-form-label">Grade Level</label>
                <div class="col-sm-10">
                    <input type="text" name="grade_level" class="form-control" value="{{ $student->grade_level }}">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                    <input type="text" name="phone_number" class="form-control" value="{{ $student->phone_number }}">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" value="{{ $student->email }}">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="registration_date" class="col-sm-2 col-form-label">Registration Date</label>
                <div class="col-sm-10">
                    <input type="date" name="registration_date" class="form-control" value="{{ $student->registration_date }}">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="responsible_name" class="col-sm-2 col-form-label">Responsible Name</label>
                <div class="col-sm-10">
                    <input type="text" name="responsible_name" class="form-control" value="{{ $student->responsible_name }}">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="responsible_contact" class="col-sm-2 col-form-label">Responsible Contact</label>
                <div class="col-sm-10">
                    <input type="text" name="responsible_contact" class="form-control" value="{{ $student->responsible_contact }}">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="picture" class="col-sm-2 col-form-label">Picture</label>
                <div class="col-sm-10">
                    <input type="file" name="picture" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection