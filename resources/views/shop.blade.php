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
        <img class="d-block" src="images/serasoft-dandruff-treatment.png">
      </div>
      <div class="carousel-item">
        <img class="d-block" src="images/serasoft-hair-fall-treatment.png">
      </div>
      <div class="carousel-item">
        <img class="d-block" src="images/serasoft-shiny-black.png">
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

  <div class="shop_white"></div>

  <div id="slider_captions" class="shop_desc">
    <div id="caption-0" class="carousel-caption products">
      <h3>Serasoft Dandruff<br>Treatment 170ml</h3>
      <p>Serasoft Dandruff Treatment dirancang untuk mengatasi dan mencegah kulit kepala mengelupas, gatal-gatal dan iritasi yang disebabkan oleh ketombe. Membuat rambutmu sehat dan indah seperti yang kamu inginkan.</p>
    </div>
    <div id="caption-1" class="carousel-caption products">
      <h3>Serasoft Hairfall <br>Treatment 170ml</h3>
      <p>Serasoft Hair Fall Treatment dirancang bukan hanya untuk mengatasi rambut rontok, tapi juga memberikan rambutmu kilau alami yang segar. Kamu jadi lebih percaya diri memamerkan rambutmu yang indah.</p>
    </div>
    <div id="caption-2" class="carousel-caption products">
      <h3>Serasoft Shiny Black 170ml</h3>
      <p>Serasoft Shiny Black memberikan rambut hitammu kilau alami yang menarik dan indah yang membuatmu lebih percaya diri menghadapi apapun.</p>
    </div>
  </div>

  <div class="review">
    <form action="#" method="POST">
      @method('PUT')
      <div class="form-group">
        <input type="text" class="form-control" name="nama" placeholder="Name">
      </div>
      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="E-Mail">
      </div>
      <div class="form-group starrating risingstar d-flex justify-content-center flex-row-reverse">
        <!-- -->
        <input type="radio" id="star5" name="rating"><label for="star5" title="5 star"></label>
        <input type="radio" id="star4" name="rating"><label for="star4" title="4 star"></label>
        <input type="radio" id="star3" name="rating"><label for="star3" title="3 star"></label>
        <input type="radio" id="star2" name="rating"><label for="star2" title="2 star"></label>
        <input type="radio" id="star1" name="rating"><label for="star1" title="1 star"></label>
      </div>
      <div class="form-group">
        <textarea name="review" class="form-control" rows="6" placeholder="Write a Review"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn form-control button-purple">Post Review</button>
      </div>
    </form>
  </div>

  <div class="shop_now">
    <a href="https://www.blibli.com/brand/serasoft"> Shop Now! <img src="images/blibli.png"></a>
  </div>

</div>

@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function () {
  $("#serasoft-shop-carousel").on('slide.bs.carousel', function(evt) {
    var step = $(evt.relatedTarget).index();
    $('#slider_captions .carousel-caption:not(#caption-'+step+')').fadeOut('fast', function() {
      $('#caption-'+step).fadeIn();
    });
  });
});
</script>
@endsection