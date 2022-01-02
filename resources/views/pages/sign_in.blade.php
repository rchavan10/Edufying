@extends('layout')
@section('content')
 {{-- navbar --}}
 <div class="hero-image">
 <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <a class="navbar-brand" href="#">EDUFYING</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/front">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/about">About</a>
            </li>
            {{-- <li class="nav-item active">
                <a class="nav-link" href="/register">Register</a>
              </li> --}}
              <li class="nav-item active">
                  <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/analysis">Analysis</a>
                    {{-- <li class="nav-item active">
                            <a class="nav-link" href="/sign_in">Sign in</a>
                          </li> --}}
                  </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <style>
          @media (min-width: 768px) {
    .my-custom-container{
        width:300px;
    }
}

@media (min-width: 992px) {
    .my-custom-container{
        width:720px;
    }
}

@media (min-width: 1200px) {
    .my-custom-container{
        width:600px;
    }
@media {
    .my-custom-container{
  border-radius: 2px;
  border: 1px solid blue;
  padding: 15px;
    }
}
@media {
    .my-custom-container{
  margin-top: 100px;
  margin-left: 500px;
    }
}    
}
}
          </style>
<style>
/* @media{    
  .hero-image {
  background-image: url("/images/banner1.jpg"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 500px;
  width:50% /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; Resize the background image to cover the entire container */
}
}
</style>
<link href="signin.css" rel="stylesheet">
<div class="my-custom-container">
     <form class="form-signin">
        <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal" position="center">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
      </form>
</div>
<div class="hero-image"></div>      
@endsection