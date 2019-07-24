@extends('layout.main')

@section('title', 'Get The Look')

@section('content')

@extends('layout.navigation')

<div class="get-the-look">
	<div class="article">
		<a href="{{ URL::Route('hair-myths') }}"><img src="images/get-the-look-1.png"></a>
	</div>
	<div class="article">
		<a href="{{ URL::Route('perfect-curls') }}"><img src="images/get-the-look-2.png"></a>
	</div>
	<div class="article">
		<a href="{{ URL::Route('everyday-bun') }}"><img src="images/get-the-look-3.png"></a>
	</div>
</div>

@endsection