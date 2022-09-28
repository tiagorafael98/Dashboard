<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <img src="/img/" alt=""> 
        <script src="/js/scripts.js"></script>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/users" class="nav-link">Listagem de Utilizadores</a>
                        </li>
                        <li class="nav-item">
                            <a href="/cars" class="nav-link">Listagem de Carros</a>
                        </li>
                        <li class="nav-item">
                            <a href="/trip" class="nav-link">Listagem de Viagens</a>
                        </li>
                        <li class="nav-item">
                            <a href="/marcas" class="nav-link">Listagem de Marcas</a>
                        </li>
                        <li class="nav-item">
                            <a href="/modelos" class="nav-link">Listagem de Modelos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
    </body>
</html>
