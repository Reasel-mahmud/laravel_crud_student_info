@extends('crud.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <a href="{{ route('manage.student') }}" class="btn btn-outline-danger mt-5">Manage Student Form</a>
            <div class="card mt-5">
                <div class="card-header bg-info">
                    <h3>Add Student Form</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('new.student') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Department</label>
                            <select class="form-control" name="department_id">
                                @foreach($departments as $department)
                                    <option value="{{$department->id}}">{{$department->department_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Section</label>
                            <select class="form-control" name="section_id">
                                @foreach($sections as $section)
                                    <option value="{{$section->id}}">{{$section->section_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Address">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary form-control" value="submit" >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
