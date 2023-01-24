@extends('crud.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('home')}}" class="btn btn-outline-danger mt-5">Add Student</a>
            <div class="card  mt-5">
                <div class="card-header bg-info">
                    <h3>Manage Student</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover  ">
                        <tr>
                            {{-- <th>sl</th> --}}
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>Section</th>
                            <th>Address</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        {{-- @php $i=1; @endphp --}}
                        @foreach($students as $student)
                        <tr>
                            {{-- <td>{{$i++}}</td> --}}
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->phone}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->department_name}}</td>
                            <td>{{$student->section_name}}</td>
                            <td>{{$student->address}}</td>
                            <td>
                                <img src="{{asset($student->image)}}" height="36" width="50">
                            </td>
                            <td>
                                <a href="{{route('edit.student',['id'=>$student->id])}}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{route('delete')}}" id="delete" method="post">
                                    @csrf
                                    <input type="hidden" name="student_id" value="{{$student->id}}">
                                    <input type="submit" class="btn btn-danger" value="Delete"
                                           onclick="confirm('Are you sure?')">
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection
