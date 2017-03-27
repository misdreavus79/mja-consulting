@extends('layouts.homepage')

@section('hero')
	<section class="hero home">
		<h1>Athletic Care. Development. Maintenance.</h1>
		<a href="" class="homeCTA">View Class Schedule</a>
		<a href="" class="homeCTA">Book a Session</a>
	</section>
@endsection

@section('content')
	<section class="homeBlock group">
		<h2>One-Stop Shop For All Your Training Needs</h2>
		<div class="adSquare">
			<img src="https://storage.googleapis.com/sca/impruvfitness/icons/group-training.svg" style="width: 50%;">
			<h3>Group Training</h3>
			<p>Some blurb about training here that gives a little preview about training programs.</p>
			<a href="/training/group" class="button">Learn More</a>
		</div>
		<div class="adSquare">
		<img src="https://storage.googleapis.com/sca/impruvfitness/icons/personal-training.svg" style="width: 50%;">
			<h3>Personal Training</h3>
			<p>Some blurb about training here that gives a little preview about training programs.</p>
			<a href="training/personal" class="button">Learn More</a>
		</div>
		<div class="adSquare">
			<img src="https://storage.googleapis.com/sca/impruvfitness/icons/youth-training.svg" style="width: 50%;">
			<h3>Youth Training</h3>
			<p>Some blurb about training here that gives a little preview about training programs.</p>
			<a href="training/youth" class="button">Learn More</a>
		</div>
	</section>
	<section class="homeBlock hero downloadApp">
		<h2>The Power of Impruv Fitness At Your Fingertips</h2>
		<p class="nutrition">Ut gravida ante cursus dui hendrerit bibendum. Quisque pulvinar nulla et finibus cursus. Phasellus a lectus enim. In in libero et lectus elementum tempus. Etiam pharetra orci sit amet metus placerat accumsan.</p>
		<p class="nutrition">
			<a href="https://itunes.apple.com/us/app/impruv-fitness/id1064709561?mt=8" class="homeCTA">Download The App</a>
		</p>
	</section>
	<section class="homeBlock workshops group">
		<h2>Upcoming Workshops</h2>
		<div class="adSquare">
			<img src="https://storage.googleapis.com/sca/impruvfitness/meditation-300.jpg">
			<h3>Nutrition is Delicious</h3>
			<p>How to make foods that are healthy and provide all the nutrients!</p>
			<time datetime="{{ $registration_date }}">{{ $registration_date }}</time>
			<a href="" class="button">Register</a>
		</div>
		<div class="adSquare">
			<img src="https://storage.googleapis.com/sca/impruvfitness/meditation-300.jpg">
			<h3>Consistency is Key</h3>
			<p>How to keep yourself motivated and consistent in a busy world!</p>
			<time datetime="{{ $registration_date }}">{{ $registration_date }}</time>
			<a href="" class="button">Register</a>
		</div>
		<div class="adSquare">
			<img src="https://storage.googleapis.com/sca/impruvfitness/meditation-300.jpg">
			<h3>Weight Training Secrets!</h3>
			<p>I have the secrets to weight training, and I'm sharing them weith you, the people!</p>
			<time datetime="{{ $registration_date }}">{{ $registration_date }}</time>
			<a href="" class="button">Register</a>
		</div>
	</section>
	<section class="homeBlock hero nutritionSection">
		<h2>Certified Fitness Nutrition Specialists</h2>
		<p class="nutrition">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed congue vestibulum est vitae tempor. Suspendisse auctor eleifend interdum. Ut ac quam et elit mollis sodales. Suspendisse potenti. Morbi consectetur purus sit amet dictum sagittis.</p>
		<p class="nutrition">
			<a href="nutrition" class="homeCTA">Speak to a Counselor</a>
		</p>
	</section>
@endsection
