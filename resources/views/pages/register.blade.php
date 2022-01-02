@extends('layout')
@section('content')
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>
 {{-- navbar --}}
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
    <div class="container">
     <form class="form-signin">
        <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Register yourself here</h1>
        <label for="inputName" class="sr-only">Enter your Name</label>
        <input type="name" id="inputName" class="form-control" placeholder="Enter your Name" required autofocus>
        <br>
        <label for="inputEmail" class="sr-only">Email Address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
          <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile02">
                  <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                </div>
              </div>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">register</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
      </form>
    
    </div> 

@endsection
