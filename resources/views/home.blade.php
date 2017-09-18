@extends('layout')
@section('content')

<!--navbar-->
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
          <a class="nav-link" href="{{URL('signin')}}">LOG IN</a>
        </li>
        <li class="nav-item">


<a href="{{url('signup')}}" class="btn btn-outline-warning my-2 my-sm-0">SIGN UP</a>

        </li>
      </ul>
    </div>
    </div>
  </nav>
  <!--ends navbar-->

<div class="card card-inverse card-success mb-3 text-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
  <div class="header-intro text-center">
<h3>WELCOME TO CROWDFUNDING</h3>
<br/>
<h5>WE MAKE YOUR PROJECT HAPPEN</h5>
<br/>
<a href="#"><button type="button" class="btn btn-outline-warning btn-intro">GET FUNDED</button>&nbsp;&nbsp;</a><a href="#"><button type="button" class="btn btn-outline-warning btn-intro">SUPPORT PROJECT</button></a>
</div>
  <!--     <footer>Projects that have been <cite title="Source Title">Funded</cite></footer> -->
    </blockquote>
  </div>
</div>


  <!--div class filters-->
  <div class="card">
  <div class="card-block">
<div class="container">
<div class="row">
<div class="col col-md-3 col-lg-3 col-sm-3">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle filtercat" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Industries
  </button>
  <div class="dropdown-menu filtercat" aria-labelledby="dropdownMenuButton">
  <div class="dropdown-item" href="#"><a href="#" class="medium" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Arts, Fashion, & media</a></div>
  <div class="dropdown-item" href="#"><a href="#" class="medium" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Finance</a></div>
  <div class="dropdown-item" href="#"><a href="#" class="medium" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Food and Bevarage</a></div>
  <div class="dropdown-item" href="#"><a href="#" class="medium" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Health Care</a></div>
  <div class="dropdown-item" href="#"><a href="#" class="medium" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Coustomer Product</a></div>
  </div>
</div>
</div>
<div class="col col-md-3 col-lg-3 col-sm-3">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle filtercat" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
  Categoly
  </button>
  <div class="dropdown-menu filtercat" aria-labelledby="dropdownMenuButton">
  <div class="dropdown-item" href="#"><a href="#" class="medium" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Funded</a></div>
  <div class="dropdown-item" href="#"><a href="#" class="medium" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Not Funded</a></div>
  <div class="dropdown-item" href="#"><a href="#" class="medium" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Series A</a></div>
  <div class="dropdown-item" href="#"><a href="#" class="medium" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Seed Project</a></div>
  <div class="dropdown-item" href="#"><a href="#" class="medium" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Others</a></div>
  </div>
</div>
</div>
<div class="col col-md-3 col-lg-3 col-sm-3">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle filtercat" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Location
  </button>
  <div class="dropdown-menu filtercat" aria-labelledby="dropdownMenuButton">
  <div class="dropdown-item" href="#"><a href="#" class="medium" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Miami, FL</a></div>
  <div class="dropdown-item" href="#"><a href="#" class="medium" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;San Francisco</a></div>
  <div class="dropdown-item" href="#"><a href="#" class="medium" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;New York, Ny</a></div>
  <div class="dropdown-item" href="#"><a href="#" class="medium" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Houston, Tx</a></div>
  <div class="dropdown-item" href="#"><a href="#" class="medium" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Las Vegas</a></div>
  </div>
</div>
</div>
<div class="col col-md-3 col-lg-3 col-sm-3">
<form class="bd-search">
  <input type="text" class="form-control" id="search-input" placeholder="Search by name" autocomplete="off">
  <div class="dropdown-menu bd-search-results" id="search-results"></div>
</form> 
 </div>
</div>
</div>
</div>
</div>
<!--ends filters-->


  <div class="container-fluid">
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