<!-- app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            <!-- Add your menu items here -->
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="{{ request()->is('/home') ? 'nav-link active' : 'nav-link' }}" data-content="Home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('about') }}" class="{{ request()->is('about') ? 'nav-link active' : 'nav-link' }}" data-content="About">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('services') }}" class="{{ request()->is('services') ? 'nav-link active' : 'nav-link' }}" data-content="Services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('locations') }}" class="{{ request()->is('locations') ? 'nav-link active' : 'nav-link' }}" data-content="Locations">Locations</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('products') }}" class="{{ request()->is('products') ? 'nav-link active' : 'nav-link' }}" data-content="Products">Products</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'nav-link active' : 'nav-link' }}" data-content="Contact">Contact</a>
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                          
                            

                                 
                        </ul>
                    </div>
                    <div id="app">
        @include('layouts.header')
                </div>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

