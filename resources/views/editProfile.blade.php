@extends('layout')

@section('content')
<div class="profile contents">
    <h1 class="nav-font">
       Edit Profile
    </h1>
    <div class="card">
        <div class="card-body container">
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') --}}
                        <div class="mb-3">
                          <label for="editLastEducation" class="form-label">Last Education</label>
                          <input type="text" class="form-control" id="editLastEducation" name="lastEducation" maxlength="50" value="{{$profile->lastEducation}}">
                        </div>
                        <div class="mb-3">
                            <label for="editAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="editAddress" name="address" maxlength="50" value="{{$profile->address}}">
                        </div>
                        <div class="mb-3">
                            <label for="editImage" class="form-label">Edit Image</label>
                            <input class="form-control" type="file" id="editImage" name="image" value="{{asset($profile->image)}}">
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
        </div>
    </div>
</div>
@stop
