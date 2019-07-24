@extends('layout.main')

@section('title', 'Explore More')

@section('content')

@extends('layout.navigation')

<div class="explore">
	<div id="serasoft-explore-carousel" class="carousel slide">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block" src="images/infinite-treatment.png">
			</div>
			<div class="carousel-item">
				<img class="d-block" src="images/dga-serum.png">
			</div>
			<div class="carousel-item">
				<img class="d-block" src="images/serasoft-dandruff-treatment-explore.png">
			</div>
			<div class="carousel-item">
				<img class="d-block" src="images/serasoft-hair-fall-treatment-explore.png">
			</div>
			<div class="carousel-item">
				<img class="d-block" src="images/serasoft-shiny-black-explore.png">
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