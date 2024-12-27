@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card card-custom p-20">
            <div class="card-header">
                <h3 class="card-title">
                    Create Student
                </h3>
                <div class="card-toolbar">
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">
                        Back to List
                    </a>
                </div>
            </div>
            <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="first_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="last_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birthday" class="col-sm-2 col-form-label">Birthday</label>
                        <div class="col-sm-10">
                            <input type="date" name="birthday" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="grade_level" class="col-sm-2 col-form-label">Grade Level</label>
                        <div class="col-sm-10">
                            <input type="text" name="grade_level" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                            <input type="text" name="phone_number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="registration_date" class="col-sm-2 col-form-label">Registration Date</label>
                        <div class="col-sm-10">
                            <input type="date" name="registration_date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="responsible_name" class="col-sm-2 col-form-label">Responsible Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="responsible_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="responsible_contact" class="col-sm-2 col-form-label">Responsible Contact</label>
                        <div class="col-sm-10">
                            <input type="text" name="responsible_contact" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="picture" class="col-sm-2 col-form-label">Picture</label>
                        <div class="col-sm-10">
                            <input type="file" name="picture" class="form-control">
                        </div>
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
