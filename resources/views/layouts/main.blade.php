<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/styles.css">
        <!-- Bootstrep -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600;700&display=swap" rel="stylesheet">

       <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div id="logo"><img src="/img/Logo.png" alt="Logotipo"></div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href='/'>Eventos</a></li>
                    <li class="nav-item"><a class="nav-link" href='/events/create'>Criar Eventos</a></li>
                @auth
                <li class="nav-item"><a class="nav-link" href='/dashboard'>Meus eventos</a></li>
                <li class="nav-item">
                    <form action='/logout' method="POST">
                        @csrf
                        <a class="nav-link"
                            href='/logout'
                            onclick="event.preventDefault();
                            this.closest('form').submit();">Sair</a>
                    </form>
                </li>
                @endauth
                @guest
                    <li class="nav-item"><a class="nav-link" href='/login'>Entrar</a></li>
                    <li class="nav-item"><a class="nav-link" href='/register'>Cadastrar</a></li>
                @endguest
                    <li class="nav-item"><a class="nav-link" href='/contato'>Contato</a></li>
                </ul>
            </div>
        </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{ session('msg')}}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
       <footer><p>HDC Events &copy; 2022</p></footer>
       <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
       <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
