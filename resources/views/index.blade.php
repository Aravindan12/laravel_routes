@extends('layouts.master')
@section('title','home')
@section('content')
<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="/img/background.png">
			<div class="carousel-caption">
				<h1 class="display-2">Bootstrap</h1>
				<h3>Complete website layout</h3>
				<button type="button" class="btn btn-outline-light btn-lg">View Demo</button>
				<button type="button" class="btn btn-primary btn-lg">Get Started</button>
			</div>
		</div>
		<div class="carousel-item">
			<img src="/img/background2.png">
		</div>
		<div class="carousel-item">
			<img src="/img/background3.png">
		</div>
	</div>
</div>
@endsection