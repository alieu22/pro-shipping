
<footer id="footer">   
   <div class="hf-footer">
        <div class="hf-flinks">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}" data-content="Home">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->is('about') ? 'active' : '' }}" data-content="About Us">About Us</a></li>
                <li><a href="{{ route('services') }}" class="{{ request()->is('services') ? 'active' : '' }}" data-content="Services">Services</a></li>
                <li><a href="{{ route('products') }}" class="{{ request()->is('products') ? 'active' : '' }}" data-content="products">products</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}" data-content="Contact">Contact</a></li>
                
            </ul>
        </div>

</footer> 
