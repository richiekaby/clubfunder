@extends('layout')

@section('content')

<!--introduction-->
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
        <li class="nav-item">
          <a class="nav-link" href="{{url('signin')}}">LOG IN</a>
        </li>
        <li class="nav-item">


<a href="{{url('signup')}}" class="btn btn-outline-warning my-2 my-sm-0">SIGN UP</a>

        </li>
      </ul>
    </div>
    </div>
  </nav>
<!--ends navbar-->



<div class="container-fluid cardlr ">
<div class="card d-block mx-auto card-outline-warning mb-3" style="width: 25rem;">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-block">
    <h4 class="card-title  text-center">REGISTER AN ACCOUNT</h4>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <form action="#" method="POST">
      <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="Text" class="form-control" id="Username" aria-describedby="UsernameHelp" placeholder="Enter Username">
    </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Confirm Password</label>
    <input type="Password" class="form-control" id="confirmPassword" aria-describedby="confirmPasswordHelp" placeholder="Confirm Password">
     </div>
     <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      I have agree to the term to the <a href="#">Terms of use</a>
    </label>
  </div>
  <button type="submit" class="btn btn-outline-primary">SIGN UP</button>
</form>
  </div>
  <div class="card-block">
    <a href="{{url('signin')}}" class="card-link">Already Have an account</a>
    <!-- <a href="#" class="card-link mr-auto">create account</a> -->
  </div>
</div>




</div><!--ends container-->

@endsection