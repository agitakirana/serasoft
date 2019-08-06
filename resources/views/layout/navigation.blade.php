<!-- Serasoft Navigation Bar -->

<nav class="navbar navbar-expand-lg main-nav purple-bg">

  <button id="NavToggle" class="navbar-toggler ml-auto" type="button" role="navigation" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-bars" id="navbar-icon"></i><i class="fas fa-times hidden" id="navbar-times-icon"></i></button>

  <div class="justify-content-center flex-1 mobile_hide">
    <ul class="nav navbar-nav w-100">
      <li class="nav-item"><a href="{{ URL::Route('shop') }}">SHOP</a></li>
      <li class="nav-item"><a href="#">DIAGNOSE YOUR HAIR</a></li>
      <li class="nav-item"><a href="#">VIRTUAL ARTIST</a></li>
    </ul>
  </div>

  <div class="order-first order-md-0 d-flex justify-content-center navbar_logo">
    <a class="navbar-brand mx-0" href="{{ URL::Route('home') }}"><img id="logo" src="images/logo.png"></a>
  </div>

  <div class="justify-content-center flex-1 mobile_hide">
    <ul class="nav navbar-nav w-100">
      <li class="nav-item"><a href="{{ URL::Route('get-the-look') }}">GET THE LOOK</a></li>
      <li class="nav-item"><a href="{{ URL::Route('saya-sudah-serasoft') }}">#SAYASUDAHSERASOFT</a></li>
      <li class="nav-item"><a href="{{ URL::Route('explore-more') }}">EXPLORE MORE</a></li>
    </ul>
  </div>

</nav>

<div class="mobile-nav collapse navbar-collapse justify-content-center flex-1">
  <ul class="navbar nav w-100">
    <li class="nav-item"><a href="{{ URL::Route('shop') }}">SHOP</a></li>
    <li class="nav-item"><a href="#">DIAGNOSE YOUR HAIR</a></li>
    <li class="nav-item"><a href="#">VIRTUAL ARTIST</a></li>
    <li class="nav-item"><a href="{{ URL::Route('get-the-look') }}">GET THE LOOK</a></li>
    <li class="nav-item"><a href="{{ URL::Route('saya-sudah-serasoft') }}">#SAYASUDAHSERASOFT</a></li>
    <li class="nav-item"><a href="{{ URL::Route('explore-more') }}">EXPLORE MORE</a></li>
  </ul>
</div>

<!-- End Serasoft Navigation Bar -->