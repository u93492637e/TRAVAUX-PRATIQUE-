<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>APP | Agence</title>
</head>

<body>
    {{-- nav-bar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
        <div class="container-fluid">
            <a class="navbar-brand text-warning " href="#">Agence de transport</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav d-flex justify-content-around w-100 ">
                    <!-- Dropdown 1 -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownMenuButton1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Agence
            </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#agence-modal">Ajouter</a></li>
                            <li><a class="dropdown-item" href="{{ route('agence.index') }}">Lister</a></li>
                        </ul>
                    </li>

                    <!-- Dropdown 2 -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Region
            </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#region-modal">Ajouter</a></li>
                            <li><a class="dropdown-item" href="{{ route('region.index') }}">Lister</a></li>
                        </ul>
                    </li>

                    <!-- Dropdown 3 -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Axe
            </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                            <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#axe-modal">Ajouter</a></li>
                            <li><a class="dropdown-item" href="{{ route('axe.index') }}">Lister</a></li>
                        </ul>
                    </li>

                    <!-- Dropdown 4 -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Clients
            </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                            <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#client-modal">Ajouter</a></li>
                            <li><a class="dropdown-item" href="{{ route('client.index') }}">Lister</a></li>
                        </ul>
                    </li>

                    <!-- Dropdown 5 -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton5" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Réservations
            </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                            <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#reservation-modal">Ajouter</a></li>
                            <li><a class="dropdown-item" href="{{ route('reservation.index') }}">Lister</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid p-5">
        @yield('content')

    </div>


@include('forms.form')
</body>

</html>
