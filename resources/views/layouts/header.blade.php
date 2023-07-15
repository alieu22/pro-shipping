<style>  /* For now i used a custom css to mitigate the issue of the header text and container not showing up when the bootstrap style bg-purple is implemented */
    .custom-header {
        background-color: purple;
    }
    .custom-header .navbar-nav .nav-link {
        color: white;
    }
</style>
<header class="custom-header">
    <nav class="navbar navbar-expand-md navbar-light bg-purple shadow-sm">
        <div class="container">
            </a>
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
                        <a href="{{ route('locations') }}" class="{{ request()->is('locations') ? 'nav-link active' : 'nav-link' }}" data-content="Locations">Locations</a>
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


            

