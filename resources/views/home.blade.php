<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Serasoft</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
      .purple-bg {
        background-color: #b5035b;
      }

      .nav-item {
        font-family: 'Gotham Bold';
        margin: 5px;
      }

      .nav-link {
        color: #fff;
        padding: 10px 1rem 0px 1rem;
      }

      .nav-link:hover {
        color: #ddd;
      }

      .navbar .flex-1 {
        flex: 1;
        flex-basis: 100%;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md main-nav purple-bg">

      <div class="collapse navbar-collapse justify-content-center flex-1">
        <ul class="nav navbar-nav w-100">
          <li class="nav-item"><a href="#">Shop</a></li>
          <li class="nav-item"><a href="#">Diagnose Your Hair</a></li>
          <li class="nav-item"><a href="#">Virtual Artist</a></li>
        </ul>
      </div>

      <button class="navbar-toggler" type="button" role="navigation" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-bars"></i></button>
      <div class="order-first order-md-0 d-flex justify-content-center navbar_logo">
        <a class="navbar-brand mx-0" href="#"><img id="logo" src="images/logo.png"></a>
      </div>

      <div class="collapse navbar-collapse justify-content-center flex-1">
        <ul class="nav navbar-nav w-100">
          <li class="nav-item"><a href="#">Get The Look</a></li>
          <li class="nav-item"><a href="#">#SayaSudahSerasoft</a></li>
          <li class="nav-item"><a href="#">Explore More</a></li>
        </ul>
      </div>

    </nav>
  </body>
</html>
