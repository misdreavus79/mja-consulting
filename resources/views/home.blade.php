@extends('layouts.twocolumn')

@section('hero')
	<section class="hero">
		<h1>Catchy Call To Action</h1>
		<h2>You can have a subheading here</h2>
	</section>
@endsection

@section('content')
	<section class="homeBlock group">
		<span class="icon-rocket"></span>
		<h2>Mission</h2>
		<p>MJAMangual Learning Solutions works with clients to uncover hidden potential, expand worldviews, and create opportunities for growth through intercultural coaching, training, and program development.</p>
	</section>
	<section class="homeBlock group">
		<span class="icon-briefcase"></span>
		<h2>Services</h2>
		<p>MJAMangual Learning Solutions believes in the customization of all services to each client, based on the client needs.  The quality custom services we provide our clients include:</p>
	</section>
		<div class="adSquare">
			<h3><a href="/coaching" class="icon-users">Intercultural Coaching</a></h3>
			<ul>
				<li>Personal Development</li>
				<li>Leadership</li>
				<li>Career</li>
			</ul>
		</div>
		<div class="adSquare">
			<h3><a href="/training" class="icon-library">Training</a></h3>
		</div>
		<div class="adSquare">
			<h3><a href="/development" class="icon-bookmarks">Program Development</a></h3>
			<ul>
				<li>Educational Counseling &amp; Program Development</li>
				<li>Leadership &amp; Teambuilding Retreat Planning and Facilitation</li>
			</ul>
		</div>
	<section class="homeBlock group">
		<p>The initial consultation is complimentary, allowing for both the potential client and consultant/coach to discuss needs, interests, and congruency with the individual and/or organization’s values.</p>
		<a href="contact" class="cta">Schecule a Consultation</a>
	</section>
@endsection
