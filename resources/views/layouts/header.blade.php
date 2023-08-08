<header class="custom-header">
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'nav-link active' : 'nav-link' }}" data-content="Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="{{ request()->is('about') ? 'nav-link active' : 'nav-link' }}" data-content="About">About us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('services') }}" class="{{ request()->is('services') ? 'nav-link active' : 'nav-link' }}" data-content="Services">Services</a>
                    </li>
                  
                    <li class="nav-item">
                        <a href="{{ route('products') }}" class="{{ request()->is('products') ? 'nav-link active' : 'nav-link' }}" data-content="products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'nav-link active' : 'nav-link' }}" data-content="Contact">Contact us </a>
                    </li>
                   
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="{{ request()->is('login') ? 'nav-link active' : 'nav-link' }}" data-content="Log in">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


            

