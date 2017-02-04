@extends('layouts.homepage')

@section('hero')
	<section class="hero home">
		<h1>Hero Message Homepage Longer Longer and Even Longer</h1>
		<a href="" class="button homeCTA">View Class Schedule</a>
		<a href="" class="button homeCTA">Book a Session</a>
	</section>
@endsection

@section('content')
	<section class="homeBlock group">
		<h2>Training</h2>
		<div class="adSquare">
			<h3>Group Training</h3>
			<p>Some blurb about training here that gives a little preview about training programs.</p>
			<a href="" class="button">Learn More</a>
		</div>
		<div class="adSquare">
			<h3>Personal Training</h3>
			<p>Some blurb about training here that gives a little preview about training programs.</p>
			<a href="" class="button">Learn More</a>
		</div>
		<div class="adSquare">
			<h3>Youth Training</h3>
			<p>Some blurb about training here that gives a little preview about training programs.</p>
			<a href="" class="button">Learn More</a>
		</div>
	</section>
	<section class="homeBlock">
		<h2>Nutrition Counseling</h2>
		<p class="nutrition">blah blah blah nutrition yay</p>
		<p class="nutrition">
			<a href="" class="button">Speak to a Counselor</a>
		</p>
		
	</section>
	<section class="homeBlock">
		<h2>Upcoming Workshops</h2>
		<p>Workshop Yay Yay!</p>
	</section>
	<section class="homeBlock">
		<h2>What They're Saying</h2>
		<p>It's great yey yey!</p>
	</section>
@endsection
