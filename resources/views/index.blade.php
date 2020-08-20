<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Restaurant Name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Lobster&display=swap" rel="stylesheet"> 
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid py-1">
            <div>
                <button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse" data-target=".dual-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse w-100 dual-collapse order-1 order-md-0">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Welcome</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="text-nowrap mx-auto order-0 order-md-1 position-relative">
                <a class="logo" href="#">
                    {{ config('app.name', 'Restaurant Name') }}</title>
                </a>
            </div>
            <div class="navbar-collapse collapse w-100 dual-collapse order-2 order-md-2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reservations</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <img class="main-pic img-fluid" src="images/pablo-merchan-montes-GFW3dJRiMsQ-unsplash.jpg" alt="">
    </div>
    <div class="row">
        <div class="container mt-4">
            <u><h1 class="text-center">About Us</h1></u>
        </div>
    </div>
</body>
</html>