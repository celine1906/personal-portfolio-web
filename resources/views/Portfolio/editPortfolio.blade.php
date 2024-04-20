@extends('layout')

@section('content')
<div class="profile contents">
    <h1 class="nav-font">
       Edit Portfolio
    </h1>
    <div class="card">
        <div class="card-body container">
            <form action="{{ route('update.portfolio', ['id' => $id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                        <div class="mb-3">
                            <label for="editImage" class="form-label">Edit Image</label>
                            <input class="form-control" type="file" id="editImage" name="image" value="{{asset($portfolio->image)}}">
                        </div>
                        {{-- @method('PUT') --}}
                        <div class="mb-3">
                          <label for="editLastEducation" class="form-label">Title</label>
                          <input type="text" class="form-control" id="editLastEducation" name="title" maxlength="50" value="{{$portfolio->title}}">
                        </div>
                        <div class="mb-3">
                            <label for="editAddress" class="form-label">Description</label>
                            <input type="text" class="form-control" id="editAddress" name="description" maxlength="500" value="{{$portfolio->description}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
        </div>
    </div>
</div>
@stop
