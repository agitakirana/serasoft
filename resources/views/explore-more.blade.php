@extends('layout.main')

@section('title', 'Explore More')

@section('content')

@extends('layout.navigation')

<div class="explore">
	<
	<div id="serasoft-explore-carousel" class="carousel slide">
		<ol class="carousel-indicators">
			<li data-target="#serasoft-explore-carousel" data-slide-to="0" class="active"><img src="images/product.png"></li>
			<li data-target="#serasoft-explore-carousel" data-slide-to="1"><img src="images/product.png"></li>
			<li data-target="#serasoft-explore-carousel" data-slide-to="2"><img src="images/product.png"></li>
			<li data-target="#serasoft-explore-carousel" data-slide-to="3"><img src="images/product.png"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="images/product.png">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="images/product.png">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="images/product.png">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="images/product.png">
			</div>
		</div>
		<a class="carousel-control-prev" href="#serasoft-explore-carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#serasoft-explore-carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

@endsection