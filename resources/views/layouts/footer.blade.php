<style> 
  /* For now i used a custom css to mitigate the issue of the footer not showing up when the bootstrap style bg-purple is implemented */
    .custom-footer { 
        background-color: purple;
        color: white;
    }
</style>

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
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ps-contact">
                    <h3>Contact</h3>
                    <ul class="list-unstyled">
                        <li>Open daily</li>
                        <li>123-456-7890</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hf-fsocial">
                    <h3>Social Media</h3>
                    <ul class="list-inline">
                        <!-- Add your social media links here -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
