@extends('layout')
@section('content')
<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">Crowdfunding</a>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active text-center">
          <a class="nav-link" href="#">BROWSE PROJECTS <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item text-center">
          <a class="nav-link" href="#">GET FUNDED</a>
        </li>
        <li class="nav-item text-center">
          <a class="nav-link" href="#">HOW IT WORKS</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto ">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Hi Richard
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Edit Profile</a>
          <a class="dropdown-item" href="#">My Account</a>
          <a class="dropdown-item" href="#">Community</a><hr/>
          <a class="dropdown-item" href="#">Log out</a>


        </div>
      </li>
      </ul>
    </div>
    </div>
  </nav>
<!--ends navbar-->

<!--profile-->
<div class="card card-inverse card-success mb-3 text-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
<div class="row">
<div class="mx-auto">
<img src="{{asset('assets/img/Dull.jpg')}}" class="rounded-circle d-block mx-auto" height="150" width="150" />
<div class="mx-auto text-center">
<h6 class="">RICHARD KAMERE</h6>
<p>SENIOR BACKEND DEVELOPER AT ......</p>
<!-- <a href="#"><button type="button" class="btn btn-outline-warning btn-intro">12 followers</button></a> -->
</div>
</div>
</div>
      <!-- <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer> -->
    </blockquote>
  </div>
</div>

<!--tabs-->
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="#">Supported: 0</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Following: 2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Project: 0</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Create Project</a>
  </li>
</ul>


  <div class="container-fluid">
<!--ends introduction-->
<div class="row card-intro">
<div class="col-12 col-md-3 col-lg-3">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="{{asset('assets/img/office.jpg')}}" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title text-danger">office</h4>
    <p class="card-text">Simple and comfortable classic office chair</p>
    <a href="#" class="btn btn-warning">Support Project</a>
  </div>
</div>
</div>

<div class="col-12 col-md-3 col-lg-3">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="{{asset('assets/img/office.jpg')}}" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title text-danger">office</h4>
    <p class="card-text">Simple and comfortable classic office chair</p>
    <a href="#" class="btn btn-warning">Support Project</a>
  </div>
</div>
</div>

<div class="col-12 col-md-3 col-lg-3">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="{{asset('assets/img/office.jpg')}}" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title text-danger">office</h4>
    <p class="card-text">Simple and comfortable classic office chair</p>
    <a href="#" class="btn btn-warning">Support Project</a>
  </div>
</div>
</div>

<div class="col-12 col-md-3 col-lg-3">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="{{asset('assets/img/office.jpg')}}" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title text-danger">office</h4>
    <p class="card-text">Simple and comfortable classic office chair</p>
    <a href="#" class="btn btn-warning">Support Project</a>
  </div>
</div>
</div>

</div><!--ends card row-->

</div><!--ends container fluid-->



@endsection