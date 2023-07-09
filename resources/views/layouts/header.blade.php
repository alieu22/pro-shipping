<header class="header">

 
  
  <button class="nav-toggle" aria-label="toggle navigation">
    <span class="nav-toggle-icon"></span>
  </button>
  
  <ul class="nav main-nav">
    <li class="nav-item"><a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}" data-content="Home">Home</a></li>
    <li class="nav-item"><a href="{{ route('about') }}" class="{{ request()->is('about') ? 'active' : '' }}" data-content="About">About</a></li>
    <li class="nav-item"><a href="{{ route('services') }}" class="{{ request()->is('services') ? 'active' : '' }}" data-content="Services">Services</a></li>
    <li class="nav-item"><a href="{{ route('locations') }}" class="{{ request()->is('locations') ? 'active' : '' }}" data-content="Contact">Locations</a></li>
    <li class="nav-item"><a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}" data-content="Contact">Contact</a></li>
    <li class="nav-item"><a href="{{ route('login') }}" class="{{ request()->is('login') ? 'active' : '' }}" data-content="Log in">Admin</a></li>
  </ul>
</header>

