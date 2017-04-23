<nav class="masthead" role="navigation">
    <a href="/" title="home" class="logo">
        <img src="//storage.googleapis.com/sca/mja/logo.png" alt="MJA Mangual Logo">
    </a>
    <ul>
        <li class="group">
            <span class="icon-pen"></span>
            <a href="/about" @if ($page_title == 'About') class="selected" @endif>About</a>
        </li>
        <li class="group">
            <span class="icon-users"></span>
            <a href="/coaching" @if ($page_title == 'Intercultural Coaching') class="selected" @endif>Intercultural Coaching</a>
        </li>
        <li class="group">
            <span class="icon-library"></span>
            <a href="/training" @if ($page_title == 'Training') class="selected" @endif>Training</a>
        </li>
        <li class="group">
            <span class="icon-bookmarks"></span>
            <a href="/development" @if ($page_title == 'Program Development') class="selected" @endif>Program Development</a>
        </li>
        <li class="group">
            <span class="icon-mail"></span>
            <a href="/contact" @if ($page_title == 'Contact Us') class="selected" @endif>Contact</a>
        </li>
    </ul>
</nav>