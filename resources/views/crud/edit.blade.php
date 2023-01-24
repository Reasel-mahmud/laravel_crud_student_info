@extends('crud.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                 <div class="card mt-5">
                    <div class="card-header bg-info">
                        <h3>Update Student Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" value="{{$students->name}}" class="form-control" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" value="{{$students->phone}}" class="form-control" placeholder="Phone">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" value="{{$students->email}}" class="form-control" placeholder="Email">
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
                                <textarea name="address" id="" class="form-control" cols="20" rows="5">{{$students->address}}</textarea>

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <img src="{{asset($students->image)}}" class="img-fluid h-25 w-25" alt="">
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary form-control" value="update" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
