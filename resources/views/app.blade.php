<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- //*fullcalendar -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.js"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <!-- livewire -->
    @livewireStyles

    <title>Emideli - @yield('title')</title>
</head>

<body class="bg-color bg-height">
    @guest

    @else
    <nav class="navbar navbar-expand-lg navbar-light nav-style">
        <div class="container-fluid">
            <a href="{{ route('pedido') }}">
                <img class="nav-img" src="{{ asset('img/Logo.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        @if ($ruta == 'pedido')
                        <a  class="nav-link active" aria-current="page" href="{{ route('pedido') }}">Home</a>
                        @else
                        <a  class="nav-link" aria-current="page" href="{{ route('pedido') }}">Home</a>
                        @endif
                    </li>
                    <li class="nav-item">
                        @if ($ruta == 'cliente')
                        <a class="nav-link active" href="{{ route('cliente') }}">Clientes</a>
                        @else
                        <a class="nav-link" href="{{ route('cliente') }}">Clientes</a>
                        @endif
                        
                    </li>
                    <li class="nav-item">
                        @if ($ruta == 'ganancia')
                        <a class="nav-link active" href="{{ route('ganancia') }}">Ganancias</a>
                        @else
                        <a class="nav-link" href="{{ route('ganancia') }}">Ganancias</a>
                        @endif
                        
                    </li>
                    <li class="nav-item">
                        <form action= "/logout" method="POST">
                            @csrf
                            <a class="nav-link" href="#" onclick= "this.closest('form').submit()">Cerrar sesion</a>
                        </form>
                        
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
    @endguest

    <!-- //*Script para cargar el calendario -->
    <script src="{{ asset('js/fullcalendar.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    @yield('content')

    @livewireScripts
</body>

</html>