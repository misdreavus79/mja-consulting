@extends('layouts.twocolumn')

@section('hero')
	<section class="hero">
		<h1>Contact MJAMangual</h1>
	</section>
@endsection

@section('content')
	<p>If you have an interest in discussing your needs for any of the services provided by MJAMangual Learning Solutions, we invite you to submit the below contact request with a brief description of your organization’s need, the services you would like to discuss, as well as the anticipated/preferred project dates, and budget. Mrs. Melissa Alvarez Mangual will be in touch for a preliminary consultation. </p>

	<form class="contactForm">
		<label for="name">Full Name</label>
		<input type="text" name="name" id="name" placeholder="John Smith">
		<label for="organization">Organization</label>
		<input type="text" name="organization" id="organization">
		<label for="email">Email Address</label>
		<input type="email" name="email" id="email" placeholder="name@domain.com">
		<label for="phone">Phone Number</label>
		<input type="tel" name="phone" id="phone" placeholder="123-456-7890">
		<label for="call">Preferred Time of Day for Calls</label>
		<select id="call" name="call-preferences">
			<option value="morning">Morning</option>
			<option value="early-afternoon">Early Afternoon</option>
			<option value="late-afternoon">Late Afternoon</option>
			<option value="evening">Evening</option>
		</select>
		<label for="need">Brief Description of Project and Need</label>
		<textarea id="need" name="need"></textarea>
		<label for="budget">Budget</label>
		<input type="text" name="budget" id="budget">
		<label for="start">Preferred Project Start Date</label>
		<input type="date" name="start-date" id="start" placeholder="mm/dd/yyyy">
		<label for="end">Preferred Project End Date</label>
		<input type="date" name="end-date" id="end" placeholder="mm/dd/yyyy">
		<button type="submit" name="submit">Send</button>
	</form>
@endsection
