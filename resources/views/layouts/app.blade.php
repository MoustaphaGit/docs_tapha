<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document </title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('css/docs.css')}}"/>
</head>

<body  class="bg-white" style="font-family:sans-serif;font-size:small" id="page-top">
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
                    <a class="nav-link text-white " href="">ACCUEIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="">ACHETER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="">LOUER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="">FAIRE GERER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="">Consulter un expert</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="">SE CONNECTER</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="hk-wrapper">
    @yield("content")
</div>




<!-- Footer -->
    <footer class="py-4 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
        <!-- /.container -->
    </footer>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/scrolling-nav.js')}}"></script>
    </body>
</html>
