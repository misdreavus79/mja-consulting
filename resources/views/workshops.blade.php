@extends('layouts.twocolumn')

@section('hero')
    <section class="hero home">
        <h1>Upcoming Events</h1>
    </section>
@endsection

@section('content')
    <article class="entry">
        <img src="https://storage.googleapis.com/sca/impruvfitness/profile.jpg" alt="Kasha 'KB' Payne" class="profile">
        <h2 class="title">Workshop Name</h2>
        <h3 class="subtitle">Workshop Tagline</h3>
        <h3 class="date">01/01/2017</h3>

        <p>Workshop description. Tell the user what they'll learn from this workshop. KB has worked diligently with the athletic community in NYC and more recently in Portland, OR. As a Licensed Massage Therapist, Personal Trainer, Small Group Instructor and former Corporate Wellness Liaison with a major, NYC-based, corporate fitness chain, KB has worked with hundreds, if not thousands of clientele to date toward their respective fitness and/or rehabilitative goals.</p>

        <p>In many cases KB worked to educate a population not familiar or comfortable working out in a gym setting whether new to fitness or struggling with self-image in the fitness environment. Here she served to educate her clients on the interwoven facets of nutrition, fitness and exercise. In several cases, she worked in a medical rehabilitative capacity where a client may have suffered a severe, physical trauma.</p>
    </article>
    <article class="entry">
        <img src="https://storage.googleapis.com/sca/impruvfitness/profile.jpg" alt="Kasha 'KB' Payne" class="profile">
        <h2 class="title">Workshop Name</h2>
        <h3 class="subtitle">Workshop Tagline</h3>
        <h3 class="date">01/01/2017</h3>

        <p>Workshop description. Tell the user what they'll learn from this workshop. KB has worked diligently with the athletic community in NYC and more recently in Portland, OR. As a Licensed Massage Therapist, Personal Trainer, Small Group Instructor and former Corporate Wellness Liaison with a major, NYC-based, corporate fitness chain, KB has worked with hundreds, if not thousands of clientele to date toward their respective fitness and/or rehabilitative goals.</p>

        <p>In many cases KB worked to educate a population not familiar or comfortable working out in a gym setting whether new to fitness or struggling with self-image in the fitness environment. Here she served to educate her clients on the interwoven facets of nutrition, fitness and exercise. In several cases, she worked in a medical rehabilitative capacity where a client may have suffered a severe, physical trauma.</p>
    </article>
    <article class="entry">
        <img src="https://storage.googleapis.com/sca/impruvfitness/profile.jpg" alt="Kasha 'KB' Payne" class="profile">
        <h2 class="title">Event Name</h2>
        <h3 class="subtitle">Workshop Tagline</h3>
        <h3 class="date">01/01/2017</h3>

        <p>Event description. Tell the user what they'll learn from this workshop. KB has worked diligently with the athletic community in NYC and more recently in Portland, OR. As a Licensed Massage Therapist, Personal Trainer, Small Group Instructor and former Corporate Wellness Liaison with a major, NYC-based, corporate fitness chain, KB has worked with hundreds, if not thousands of clientele to date toward their respective fitness and/or rehabilitative goals.</p>

        <p>In many cases KB worked to educate a population not familiar or comfortable working out in a gym setting whether new to fitness or struggling with self-image in the fitness environment. Here she served to educate her clients on the interwoven facets of nutrition, fitness and exercise. In several cases, she worked in a medical rehabilitative capacity where a client may have suffered a severe, physical trauma.</p>
    </article>
@endsection

@section('aside')
    <h3>On the Blog</h3>
    <ul>
        <li>Topic One</li>
        <li>Topic Two</li>
        <li>Topic Three</li>
    </ul>
    <h3>Some Ad For a Service</h3>
    <p>Saying things that are cool.</p>
    <h3>Sign Up For Our Newsletter</h3>
    <p>Something catchy about why it's awesome to sign up.</p>
    <form class="asideNewsletter">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="John">
        <label>Email</label>
        <input type="email" name="email" id="email" placeholder="john@email.com">
        <button class="filledButton">Sign Up</button>
    </form>
@endsection