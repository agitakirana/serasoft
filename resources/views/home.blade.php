@extends('layout.main')

@section('title', 'Home')

@section('content')

@extends('layout.navigation')

<div id="serasoft-carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#serasoft-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#serasoft-carousel" data-slide-to="1"></li>
    <li data-target="#serasoft-carousel" data-slide-to="2"></li>
    <li data-target="#serasoft-carousel" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slide1.png" alt="Serasoft 1st Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide2.png" alt="Serasoft 2nd Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide3.png" alt="Serasoft 3rd Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide4.png" alt="Serasoft 4th Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#serasoft-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#serasoft-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@endsection
