@extends('layout')

@section('content')
<div class="profile contents">
    <h1 class="nav-font">
       Login
    </h1>
    @if ($errors->any())
    <div class="alert alert-danger" style="width: 60%;margin:auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li type="none">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="card">
        <div class="card-body container">
                    <form action="{{ route('login.process')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control" id="password" name="password" maxlength="50" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
        </div>
    </div>
</div>
@stop
