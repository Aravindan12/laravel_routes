@extends('layouts.master')
@section('title','about')
@section('content')
<!--- Meet the team -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Meet the team</h1>
		</div>
	</div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="./img/team1.png">
				<div class="card-body"><h4 class="card-title">John Doe</h4>
				<p class="card-text">John is an Internet entrepreneur with almost 20 years of experience.</p>
				<a href="#" class="btn btn-outline-secondary">See profile</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="./img/team2.png">
				<div class="card-body"><h4 class="card-title">Mary Jo</h4>
				<p class="card-text">Mary is a Designer with almost 10 years of experience.</p>
				<a href="#" class="btn btn-outline-secondary">See profile</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="./img/team3.png">
				<div class="card-body"><h4 class="card-title">Phil Mo</h4>
				<p class="card-text">Phil is a Developer with almost 12 years of experience.</p>
				<a href="#" class="btn btn-outline-secondary">See profile</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection