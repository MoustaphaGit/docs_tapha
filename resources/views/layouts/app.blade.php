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

<body>
<body id="page-top">

<!-- Navigation  contenant des boutons -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">Keugui_IMMO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href=""><button class="btn btn-warning">Rechercher un logement</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href=""> <button class="btn btn-success">Déposer une Annonce</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="">Voir les Annonces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="">Consulter un expert</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="">Se Connecter</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
@yield('content')
</div>

<section id="">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2>Contact us</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
  </div>
  <!-- /.container -->
</footer>
<script src="{{asset('js/app.js')}}"></script>
<!-- <script src="{{asset('js/scrolling-nav.js')}}"></script> -->
</body>
</html>