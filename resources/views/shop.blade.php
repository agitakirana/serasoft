@extends('layout.main')

@section('title', 'Home')

@section('content')

@include('layout.navigation')

<div class="shop_content">
  <div id="serasoft-shop-carousel" class="carousel slide">
    <ol class="carousel-indicators">
      <li data-target="#serasoft-shop-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#serasoft-shop-carousel" data-slide-to="1"></li>
      <li data-target="#serasoft-shop-carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/serasoft-dandruff-treatment.png">
        <div class="carousel-caption d-none d-md-block">
          <h5>Serasoft Dandruft Treatment 170ml</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/serasoft-hair-fall-treatment.png">
        <div class="carousel-caption d-none d-md-block">
          <h5>Serasoft Hair Fall Treatment 170ml</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/serasoft-shiny-black.png">
        <div class="carousel-caption d-none d-md-block">
          <h5>Serasoft Shiny Black 170ml</h5>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#serasoft-shop-carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#serasoft-shop-carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="shop_desc">
    <div class="products">
      <h3>Serasoft Dandruff<br>Treatment 170ml</h3>
      <p>Serasoft Dandruff Treatment is designed to prevent flaking, itching and irritation associated with dandruff. Makes your hair lively and moves with you.</p>
    </div>
  </div>

  <div class="shop_now">
    <a href="#"> Shop Now!</a>
  </div>

</div>

@endsection