<nav class="masthead group">
    <div class="links">
        <a href="/about" @if ($page_title == 'About') class="selected" @endif>
            About
        </a>
        <a href="/team" @if ($page_title == 'Team') class="selected" @endif>
            Team
        </a>
    </div><!--
    --><a href="/" title="home" class="logo">
        <img src="https://storage.googleapis.com/sca/impruvfitness/Impruv_mainlogo.png" alt="Impruv Fitness and Wellness">
    </a><!--
    --><div class="links">
        <a href="/services" @if ($page_title == 'Services') class="selected" @endif>
            Services
        </a>
        <a href="/events" @if ($page_title == 'Workshops') class="selected" @endif>
            Events
        </a>
    </div>
</nav>