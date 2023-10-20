<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Bootstrap Example</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
</head>
<body>
<header>
    <!-- Header Content -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/artworks">Artwork</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
        
    </header>
    <div class="container">
        @yield('content')   
    </div>

    <!-- Liên kết tới tệp tin JS của Bootstrap -->
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>
