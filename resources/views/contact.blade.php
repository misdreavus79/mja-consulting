@extends('layouts.twocolumn')

@section('hero')
	<section class="hero">
		<h1>Contact MJAMangual</h1>
	</section>
@endsection

@section('content')
	<section class="description">
		<img src="//storage.googleapis.com/sca/mja/iphone_notes.jpg" alt="Contact MJAMangual">
		<p>If you have an interest in discussing your needs for any of the services provided by MJAMangual Learning Solutions, we invite you to submit the contact request with a brief description of your organization’s need, the services you would like to discuss, as well as the anticipated/preferred project dates, and budget. Mrs. Melissa Alvarez Mangual will be in touch for a preliminary consultation.</p>
	</section>
	<form class="contactForm">
		<fieldset>
			<label for="name">Full Name</label>
			<input type="text" name="name" id="name" placeholder="John Smith">
		</fieldset>
		<fieldset>
			<label for="organization">Organization</label>
			<input type="text" name="organization" id="organization" placeholder="My Org Inc.">
		</fieldset>
		<fieldset>
			<label for="email">Email Address</label>
			<input type="email" name="email" id="email" placeholder="name@domain.com">
		</fieldset>
		<fieldset>
			<label for="phone">Phone Number</label>
			<input type="tel" name="phone" id="phone" placeholder="123-456-7890">
		</fieldset>
		<fieldset>
			<label for="call">Preferred Time of Day for Calls</label>
			<select id="call" name="call-preferences" class="icon-keyboard_arrow_down">
				<option value="default">Select</option>
				<option value="morning">Morning</option>
				<option value="early-afternoon">Early Afternoon</option>
				<option value="late-afternoon">Late Afternoon</option>
				<option value="evening">Evening</option>
			</select>
		</fieldset>
		<fieldset>
			<label for="need">Brief Description of Project and Need</label>
			<textarea id="need" name="need"></textarea>
		</fieldset>
		<fieldset>
			<label for="budget">Budget</label>
			<input type="text" name="budget" id="budget" placeholder="$10000">
		</fieldset>
		<fieldset>
			<label for="start">Preferred Project Start Date</label>
			<input type="date" name="start-date" id="start" placeholder="mm/dd/yyyy">
		</fieldset>
		<fieldset>
			<label for="end">Preferred Project End Date</label>
			<input type="date" name="end-date" id="end" placeholder="mm/dd/yyyy">
		</fieldset>
		<button type="submit" name="submit">Send</button>
	</form>
@endsection
