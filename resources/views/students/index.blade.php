@extends('layouts.master')

@section('content')
    <div class="container">
    <div class="card card-custom">
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label">Students details
										</div>
                                        <a href="{{ route('students.create') }}" class="btn btn-primary" style="float: right; margin-top: 10px;">Add New Student</a>
	
									</div>
									<div class="card-body">
										<!--begin: Search Form-->
										<!--begin::Search Form-->
										<div class="mb-7">
											<div class="row align-items-center">
												<div class="col-lg-9 col-xl-8">
													<div class="row align-items-center">
														<div class="col-md-4 my-2 my-md-0">
															<div class="input-icon">
																<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
																<span>
																	<i class="flaticon2-search-1 text-muted"></i>
																</span>
															</div>
														</div>
												
                                                    </div>
												</div>
										
											</div>
										</div>
										<!--end::Search Form-->
										<!--end: Search Form-->
										<!--begin: Datatable-->
										<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
											<thead>
                                            <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Birthday</th>
                                            <th>Picture</th>
                                            <th>Actions</th>
                                        </tr>
											</thead>
											<tbody>
                                            @foreach ($students as $student)
                                            <tr>
                                                <td>{{ $student->first_name }}</td>
                                                <td>{{ $student->last_name }}</td>
                                                <td>{{ $student->birthday }}</td>
                                                <td>{{ $student->picture }}</td>
                                                <td>
                                                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-info">View</a>
                                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
												
											</tbody>
										</table>
										<!--end: Datatable-->
									</div>
								</div>
								<!--end::Card-->
    </div>
@endsection
