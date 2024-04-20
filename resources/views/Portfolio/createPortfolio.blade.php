@extends('layout')

@section('content')
<div class="profile contents">
    <h1 class="nav-font">
       Add Portfolio
    </h1>
    <div class="card">
        <div class="card-body container">
                    <form action="{{ route('create.portfolio') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="addImage" class="form-label">Image</label>
                            <input type="file" class="form-control" id="addImage" name="image">
                        </div>
                        <div class="mb-3">
                          <label for="addTitle" class="form-label">Portfolio Title</label>
                          <input type="text" class="form-control" id="addTitle" name="title" maxlength="50">
                        </div>
                        <div class="mb-3">
                            <label for="addDesc" class="form-label">Description</label>
                            <input type="text" class="form-control" id="addDesc" name="description" maxlength="500">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
        </div>
    </div>
</div>
@stop
