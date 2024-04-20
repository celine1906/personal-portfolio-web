@extends('layout')

@section('navbar')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <strong><a class="navbar-brand" style="color: rgb(68, 68, 173);padding-left:20px">Regina Celine Adiwinata</a></strong>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{url('home')}}">Home</a>
          </li>
          <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skill">Skill</a>
          </li>
          <li class="nav-item ms-auto">
            <a class="nav-link" href="#hobby">Hobby</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
@endsection

@section('content')
  <div id="background">
    <div class="contents" id="profile" style="margin-top:60px">
        <h1 class="nav-font">
            <i class="fas fa-user"></i>Profile
        </h1>
        <div class="card">
            <div class="card-body container text-center">
                <div class="row">
                    <div class="col">
                        <img src="{{asset($profile->image)}}" alt="foto" style="width: 200px;height:300px;padding:auto">
                    </div>
                    <div class="col-9" style="text-align: left">
                        <p>Name : {{$profile->name}}</p>
                        <p>Date of Birth : {{$profile->dob}}</p>
                        <p>Age : {{$age}}</p>
                        <p>Gender : {{$profile->gender}}</p>
                        <p>Religion : {{$profile->religion}}</p>
                        <p>Last Education : {{$profile->lastEducation}}</p>
                        <p>Address : {{$profile->address}}</p>
                    </div>
                  </div>
                  @auth
                  {{-- <div style="margin-top=50px"> --}}
                    <br>
                      <button type="button" class="btn btn-warning"><a href="{{url('about/profile/edit')}}">Edit</a></button>
                  {{-- </div> --}}
                  @endauth
            </div>
          </div>
    </div>

    <div class="contents" id="education">
        <h1 class="nav-font">
            <i class="fas fa-user-graduate"></i>Education
        </h1>
        <div class="card">
            <div class="card-body container">
                <div class="text-center">
                    @isset($edu)
                    @if ($edu)
                    @foreach ($edu as $key => $value )
                        <div class="row text-hover">
                            <div class="col-4 text-color">
                                <strong><p>{{$value->school}}</p></strong>
                                <p style="font-size: 15px">{{$value->year}}</p>
                            </div>
                            <div class="col-1">
                                <div class="vertical"></div>
                                <div class="dots"></div>
                            </div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-6 col-sm-6 text-color">
                                        <strong><p style="font-size: 15px">{{$value->major}}</p></strong>
                                        <p style="font-size: 15px">{{$value->description}}</p>
                                    </div>
                                    @auth
                                    <div class="col-4 col-sm-6">
                                        <br>

                                        <button class="btn btn-warning"><a href="{{ route('edit.education', ['id' => $value->id]) }}">Edit</a></button>
                                        <button class="btn btn-danger"><a href="{{ route('delete.education', ['id' => $value->id]) }}">Delete</a></button>
                                    </div>
                                    @endauth
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    @endisset
                    @auth

                    <div>
                        <br>
                        <button type="button" class="btn btn-primary"><a href="{{url('about/education/create')}}">Create</a></button>
                    </div>
                    @endauth
                  </div>
            </div>
        </div>
    </div>

    <div class="education contents" id="experience">
        <h1 class="nav-font">
            <i class="fas fa-briefcase"></i>Work & Organization Experience
        </h1>
        <div class="card" style="width: 60%">
            <div class="card-body container">
                @foreach ($experience as $key => $exp)
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                          <strong><p style="font-size: 20px">{{$exp->name}}</p></strong>
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          <p>({{$exp->year}})</p>
                            <p>{{$exp->description}}</p>
                            @auth
                            <center>

                                <button type="button" class="btn btn-warning" style="margin: auto"><a href="{{ route('edit.experience', ['id' => $exp->id]) }}">Edit</a></button>
                                <button type="button" class="btn btn-danger" style="margin: auto"><a href="{{ route('delete.experience', ['id' => $exp->id]) }}">Delete</a></button>
                            </center>
                            @endauth
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  @auth
                  <center>
                  <br>
                  <button type="button" class="btn btn-primary"><a href="{{url('about/experience/create')}}">Create</a></button>
                </center>
                  @endauth
            </div>
        </div>
    </div>

    <div class="education contents" id="skill">
        <h1 class="nav-font">
            <i class="fas fa-code"></i>Skill
        </h1>
        <div class="card" style="width: 61%">
            <div class="card-body container">
                <div class="skill">
                    <div class="circle" data-percent="100">
                      <div class="circle-inner" style="clip: rect(0, 70px, 100px, 0)"></div>
                      <div class="circle-text"><strong><i class="fab fa-java"></i><br>70%</strong></div>
                    </div>
                    <div class="skill-name">Java</div>
                  </div>
                  <div class="skill">
                    <div class="circle" data-percent="100">
                      <div class="circle-inner" style="clip: rect(0, 90px, 100px, 0)"></div>
                      <div class="circle-text"><i class="fas fa-database"></i><br>90%</strong></div>
                    </div>
                    <div class="skill-name">MySQL</div>
                  </div>
                  <div class="skill">
                    <div class="circle" data-percent="100">
                      <div class="circle-inner" style="clip: rect(0, 60px, 100px, 0)"></div>
                      <div class="circle-text"><i class="fas fa-code"></i><br>60%</strong></div>
                    </div>
                    <div class="skill-name">Front-End</div>
                  </div>
                  <div class="skill">
                    <div class="circle" data-percent="100">
                      <div class="circle-inner" style="clip: rect(0, 60px, 100px, 0)"></div>
                      <div class="circle-text"><i class="fab fa-laravel"></i><br>60%</strong></div>
                    </div>
                    <div class="skill-name">Laravel</div>
                  </div>
                  <div class="skill">
                    <div class="circle" data-percent="100">
                      <div class="circle-inner" style="clip: rect(0, 30px, 100px, 0)"></div>
                      <div class="circle-text"><i class="fab fa-python"></i><br>30%</strong></div>
                    </div>
                    <div class="skill-name">Python</div>
                  </div>
            </div>
        </div>
    </div>

    <div class="education contents" id="hobby">
        <h1 class="nav-font">
            <i class="fas fa-umbrella-beach"></i>Hobby
        </h1>
        <div class="card" style="width: 40%; height:395px">
            <div class="card-body container">
                <div id="carouselExampleCaptions" class="carousel slide" style="width:100%;margin:auto">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/swimming.jpg" class="d-block w-100" alt="Swimming">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Swimming</h5>
                          <p>Swimming is my most favorite exercise!</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/cooking.jpg" class="d-block w-100" alt="Cooking">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Cooking</h5>
                          <p>I like to cook in my spare time.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/watchMovie.jpg" class="d-block w-100" alt="Watch Movie">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Watch Movie</h5>
                          <p>Watching movie helps me release stress.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
