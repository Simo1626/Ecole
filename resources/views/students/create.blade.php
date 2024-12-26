@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card card-custom">
            <div class="card-header">
                <h3 class="card-title">
                    Create Student
                </h3>
            </div>
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="card-body d-flex flex-column ">
                    <div class="form-group">
                        <label for="first_name" class="custom-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name" class="custom-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="birthday" class="custom-label">Birthday</label>
                        <input type="date" name="birthday" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="grade_level" class="custom-label">Grade Level</label>
                        <input type="text" name="grade_level" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone_number" class="custom-label">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email" class="custom-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="registration_date" class="custom-label">Registration Date</label>
                        <input type="date" name="registration_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="responsible_name" class="custom-label">Responsible Name</label>
                        <input type="text" name="responsible_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="responsible_contact" class="custom-label">Responsible Contact</label>
                        <input type="text" name="responsible_contact" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="picture" class="custom-label">Picture</label>
                        <input type="file" name="picture" class="form-control">
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endsection
