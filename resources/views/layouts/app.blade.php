<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>keugui_Immo - Accueil</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('css/docs.css')}}"/>
</head>

<body class="bg-white" style="font-family:sans-serif;font-size:small" id="page-top">
<!-- Navigation  contenant des boutons -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark " id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Keugui_IMMO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar nav-tabs ml-auto py-2">
                <li class="nav-item active">
                    <a class="nav-link text-white " href="http://127.0.0.1:8000/">ACCUEIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="/menu/acheter">ACHETER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/menu/louer">LOUER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}">
                         <button class="btn btn-secondary">Deposer une Annonce</button> 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="{{ route('login') }}">SE CONNECTER</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    @yield("content")


<!-- Footer -->
    <footer class="py-4 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
        <!-- /.container -->
    </footer>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/scrolling-nav.js')}}"></script>
    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
    <script>
        tinymce.init({
            selector:'textarea.description',
            width: 900,
            height: 300
        });
    </script>

    </body>
</html>
