@extends('layout')

@section('content')
<div class="profile contents">
    <h1 class="nav-font">
       Edit Education
    </h1>
    <div class="card">
        <div class="card-body container">
                <form action="{{ route('update.education', ['id' => $id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="editSchool" class="form-label">School</label>
                        <input type="text" class="form-control" id="editSchool" name="school" maxlength="50" value="{{$edu->school ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="editYear" class="form-label">Year</label>
                        <input type="text" class="form-control" id="editYear" name="year" maxlength="50" value="{{$edu->year ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="editMajor" class="form-label">Major</label>
                        <input class="form-control" type="text" id="editMajor" name="major" maxlength="50" value="{{$edu->major ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="editDesc" class="form-label">Description</label>
                        <input type="text" class="form-control" id="editDesc" name="description" value="{{$edu->description ?? '' }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
</div>
@stop
