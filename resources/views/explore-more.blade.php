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

	<!-- Explore More Description -->

	<div id="slider_captions" class="explore_desc">
		<div id="caption-0" class="carousel-caption">
			<h3>DGA Serum Memberikan Perawatan Rambut Secara Terus Menerus</h3>
			<p>Rambut terawat dan terlindungi sepanjang hari dengan DGA Serum yang bekerja dari akar hingga ke ujung rambut.</p>
			<div class="caption-socmed"><a href="https://www.instagram.com/serasoft.id"><i class="fab fa-instagram"></i></a><a href="https://www.facebook.com/Serasoft.ID"><i class="fab fa-facebook-f"></i></a><i class="fab fa-twitter"></i><a href="https://www.youtube.com/channel/UC_vviPNDAVAfNkadX_wTZtg"><i class="fab fa-youtube"></i></a></div>
		</div>
		<div id="caption-1" class="carousel-caption">
			<h3>Menyehatkan rambut dari dalam dan melindunginya dari kerusakan</h3>
			<p>Dengan DGA Serum, rambut terlindungi dari polusi dan debu. Rambut jadi halus dan terlihat lebih sehat serta berkilau lebih lama.</p>
			<div class="caption-socmed"><a href="https://www.instagram.com/serasoft.id"><i class="fab fa-instagram"></i></a><a href="https://www.facebook.com/Serasoft.ID"><i class="fab fa-facebook-f"></i></a><i class="fab fa-twitter"></i><a href="https://www.youtube.com/channel/UC_vviPNDAVAfNkadX_wTZtg"><i class="fab fa-youtube"></i></a></div>
		</div>
		<div id="caption-2" class="carousel-caption">
			<img src="images/zpt.png">
			<h3>ZPT</h3>
			<p>Menghilangkan ketombe dan mencegah kulit kepala kering.</p>
			<div class="caption-socmed"><a href="https://www.instagram.com/serasoft.id"><i class="fab fa-instagram"></i></a><a href="https://www.facebook.com/Serasoft.ID"><i class="fab fa-facebook-f"></i></a><i class="fab fa-twitter"></i><a href="https://www.youtube.com/channel/UC_vviPNDAVAfNkadX_wTZtg"><i class="fab fa-youtube"></i></a></div>
		</div>
		<div id="caption-3" class="carousel-caption">
			<img src="images/sophora-root.png">
			<h3>Sophora Root</h3>
			<p>Memperkuat rambut dan membantu mengurangi kerontokan.</p>
			<div class="caption-socmed"><a href="https://www.instagram.com/serasoft.id"><i class="fab fa-instagram"></i></a><a href="https://www.facebook.com/Serasoft.ID"><i class="fab fa-facebook-f"></i></a><i class="fab fa-twitter"></i><a href="https://www.youtube.com/channel/UC_vviPNDAVAfNkadX_wTZtg"><i class="fab fa-youtube"></i></a></div>
		</div>
		<div id="caption-4" class="carousel-caption">
			<img src="images/black-sesame.png">
			<h3>Black Sesame</h3>
			<p>Menjadikan rambut tampak hitam alami dan menyempurnakan kilau rambut.</p>
			<div class="caption-socmed"><a href="https://www.instagram.com/serasoft.id"><i class="fab fa-instagram"></i></a><a href="https://www.facebook.com/Serasoft.ID"><i class="fab fa-facebook-f"></i></a><i class="fab fa-twitter"></i><a href="https://www.youtube.com/channel/UC_vviPNDAVAfNkadX_wTZtg"><i class="fab fa-youtube"></i></a></div>
		</div>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function () {
	$("#serasoft-explore-carousel").on('slide.bs.carousel', function(evt) {
		var step = $(evt.relatedTarget).index();
	  $('#slider_captions .carousel-caption:not(#caption-'+step+')').fadeOut('fast', function() {
	   	$('#caption-'+step).fadeIn();
		});
	});
});
</script>
@endsection
