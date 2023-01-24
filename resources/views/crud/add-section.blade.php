@extends('crud.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a href="#" class="btn btn-outline-danger mt-5">Manage Section</a>
                <div class="card mt-5">
                    <div class="card-header bg-info">
                        <h3>Section Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('new.section') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Section Name</label>
                                <input type="text" name="section_name" class="form-control" placeholder="Section Name">
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
