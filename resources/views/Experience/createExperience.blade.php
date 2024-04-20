@extends('layout')

@section('content')
<div class="profile contents">
    <h1 class="nav-font">
       Add Experience
    </h1>
    <div class="card">
        <div class="card-body container">
                    <form action="{{ route('create.experience') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="editName" class="form-label">Experience Name</label>
                          <input type="text" class="form-control" id="editName" name="name" maxlength="50">
                        </div>
                        <div class="mb-3">
                            <label for="editYear" class="form-label">Year</label>
                            <input type="text" class="form-control" id="editYear" name="year" maxlength="50">
                        </div>
                        <div class="mb-3">
                            <label for="editDesc" class="form-label">Description</label>
                            <input type="text" class="form-control" id="editDesc" name="description">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
        </div>
    </div>
</div>
@stop
