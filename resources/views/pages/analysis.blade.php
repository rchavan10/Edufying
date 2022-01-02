@extends('layout')
@section('content')

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
        <li class="nav-item active">
          <a class="nav-link" href="/face">Face id</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/anyalze">OCR</a>
        </li>      
      </form>
    </div>
  </nav>
    {{-- image carosel --}}
    <style>
      /* Make the image fully responsive */
      .carousel-inner img {
          width: 100%;
          height: 100%;
      }
      </style>
   
    {{-- <link rel="stylesheet" href="/pages"> --}}
    <div id="demo" class="carousel slide" data-ride="carousel">
    
      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        
      </ul>
      
      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/images/ss1.png" alt="Malala Yousaf" width="80%" height="500">
        </div>
        <div class="carousel-item">
          <img src="/images/ss2.png" alt="Right To Education" width="80%" height="500">
        </div>
      </div>
      
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    

   
@endsection