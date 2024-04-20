@extends('layout')

@section('content')
<div id="background" class="contents" style="height: 100%; background-image: linear-gradient(to left, rgb(254, 244, 173), #E6CBF7)">
    <h1 class="nav-font">
        <i class="fas fa-bars"></i>Portfolio
    </h1>
    <div class="content-flex">
    @foreach ($portfolio as $key => $port)
    <div class="card" style="width: 30%;">
        <div class="card-body">
        <img src="{{asset($port->image)}}" class="card-img-top" alt="portfolio" style="width:100%">
        <br>
        <br>
            <strong><h5 class="card-title" style="text-align: center">{{$port->title}}</h5></strong>
            <p class="card-text" style="text-align: justify">{{$port->description}}</p>
            @auth
            <center>
            <div style="width:50%">
                <br>
                <button class="btn btn-warning"><a href="{{ route('edit.portfolio', ['id' => $port->id]) }}">Edit</a></button>
                <button class="btn btn-danger"><a href="{{ route('delete.portfolio', ['id' => $port->id]) }}">Delete</a></button>
            </div>
        </center>
            @endauth
        </div>
    </div>
    @endforeach
</div>
    @auth
    <center>
    <div style="margin-top:100px">
        <br>
        <button type="button" class="btn btn-primary"><a href="{{url('portfolio/create')}}">Create</a></button>
    </div>
</center>
    @endauth
</div>
@stop
