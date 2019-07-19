<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Serasoft - @yield('title')</title>

    <style type="text/css">
      @font-face {
        font-family: "Century Gothic";
        src: url("fonts/GOTHIC.TTF");
        font-display: swap;
      }

      @font-face {
        font-family: "Arial Bold";
        src: url("fonts/arialbd.ttf");
        font-display: swap;
      }

      @font-face {
        font-family: "Gotham Book Regular";
        src: url('fonts/gothambookregular.otf') format('opentype');
        font-display: swap;
      }
    </style>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Serasoft stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    @yield('stylesheet')

  </head>
  <body>
    <div class="container-fluid">

      @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" defer crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" defer crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" defer crossorigin="anonymous"></script>
    @yield('script')
  </body>
</html>