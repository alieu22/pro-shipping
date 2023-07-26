

<footer class="custom-footer fixed-bottom">


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="hf-flinks">
                    <h3>Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="nav-link{{ request()->is('/') ? ' active' : '' }}">Home</a></li>
                        <li><a href="{{ route('about') }}" class="nav-link{{ request()->is('about') ? ' active' : '' }}">About</a></li>
                        <li><a href="{{ route('services') }}" class="nav-link{{ request()->is('services') ? ' active' : '' }}">Services</a></li>
                        <li><a href="{{ route('locations') }}" class="nav-link{{ request()->is('locations') ? ' active' : '' }}">Locations</a></li>
                        <li><a href="{{ route('products') }}" class="nav-link{{ request()->is('products') ? ' active' : '' }}">Products</a></li>
                        <li><a href="{{ route('contact') }}" class="nav-link{{ request()->is('contact') ? ' active' : '' }}">Contact</a></li>
                        <li><a href="{{ route('login') }}" class="{{ request()->is('login') ? 'nav-link active' : 'nav-link' }}" data-content="Log in">Admin</a></li>
                    </li>
                    </ul>
                </div>
            </div>
           
    </div>
</footer>
