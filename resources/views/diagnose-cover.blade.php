@extends('layout.main')

@section('title', 'Diagnose your hair')

@section('content')

@include('layout.navigation')

<div class="diagnose-cover">
	<!-- -->
	<div class="bottom">
		<h1>DIAGNOSE<br>YOUR HAIR</h1>
		<p>and find out the best treatment for you!</p>
		<a href="{{ URL::Route('diagnose-hair') }}" class="btn btn-diagnose-cover">NEXT</a>
	</div>
</div>

@endsection