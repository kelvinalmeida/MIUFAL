<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7003c35a0f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/fila.css">
    <!-- <title>Situação da Fila</title> -->
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="/">MIRU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="/page" href="/">Home</a>
            </li>
            @auth
            <li class="nav-item">
                <a class="nav-link" href="/perfil">Meu Perfil</a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="POST">
                    @csrf
                    <a href="/logout" 
                    class="nav-link"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">Sair</a>
                </form>
            </li>
            @endauth
            <li class="nav-item">
            <a class="nav-link" href="/cardapio">Cardápio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/fila">Situação da Fila</a>
            </li>
            @guest
            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register">Registrar</a>
            </li>
            @endguest
        </ul>
        <!-- <span class="navbar-text">
            Navbar text with an inline element
        </span> -->
        </div>
    </div>
    </nav>

      @yield('content')


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/arquivo.js"></script>
      
</body>
</html>