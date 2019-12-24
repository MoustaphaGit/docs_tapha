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

<body id="page-top">

<!-- Navigation  contenant des boutons -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">Keugui_IMMO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto  py-3">
        <li class="nav-item">
          <a class="nav-link  " href="">ACCUEIL</a>
        </li>
          <li class="nav-item">
          <a class="nav-link " href="">ACHETER</a>
          </li>
        <li class="nav-item">
          <a class="nav-link " href="">LOUER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="">FAIRE GERER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="">Consulter un expert</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="">SE CONNECTER</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header class="bg-primary text-white">
  <div class="container text-center">
    <div class="bg-color-transparent text-lg-center">
        <h1> <span>GROUPE KEURGUI_IMMOBILIER</span> </h1>
        <p class="lead"> Désormais Se loger devient plus facile</p>
    </div>
    <div class="container-fluid bg-color-transparent text-sm-center" >
        <!-- le filtre de recherche -->
      <form action="#" method="" name="filtre">
        <div class="row my-5 mx-1 ">
          <div class="col-8 row  pr-0">
            <div class="col-12 row largeur my-2">
              <div class="col-4 p-0 ">
                  <select name="" class="custom-select">
                      <option selected>je veux</option>
                      <option value="1">Louer</option>
                      <option value="2">Acheter</option>
                      <option value="3">Du neuf</option>
                    </select>
              </div>
              <div class="col-8 pr-0">
                  <input class="form-control" type="text" placeholder="Où désirez-vous habiter ?">
              </div>
            </div>
            <div class="col-12 row largeur my-2">
              <div class="col-6 p-0">
                <select class="custom-select">
                  <option selected>type de biens</option>
                  <option value="1">Maison</option>
                  <option value="2">Chambre</option>
                  <option value="3">Appartement</option>
                  <option value="4">terrains</option>
                  <option value="5">immeuble</option>
                  <option value="6">Hotels</option>
                </select>
              </div>
{{--              <div class="col-2 p-0"> <input class="form-control" type="text" placeholder="Surface min"></div>--}}
{{--              <div class="col-2 p-0"> <input class="form-control" type="text" placeholder="Prix-max"></div>--}}
              <div class="col-4 p-0 ml-3">
                  <select class="custom-select">
                      <option selected> Nombre de Pièces</option>
                      <option value="1">Studio</option>
                      <option value="2">2 pièces</option>
                      <option value="3">3 pièces</option>
                      <option value="4">4 pièces</option>
                      <option value="5">5 pièces +</option>
                    </select>
              </div>
            </div>
          </div>
          <div class="col-4 row px-1">
              <div class="col-12 py-2 pl-0"><a href="#"><button type="button" class="btn btn-dark button">RECHERCHER</button></div></a>
              <div class="col-12"></div>
          </div>
        </div>
      </form>
    </div>
      <!-- fin filtre de recherche -->

  </div> <br> <br>
</header>

<section class="container-fluid"><!-- la section des annonces  -->
  <div class=" row container  ">
      <div class="col-12"> <!-- le div du slide pour faire defiller quelques annonces -->
        <div class="container">
        </div>
      </div>
      <div class=" container row justify-content-center col-12 mx-0 "> <!-- le div des 3 derniers annonce  -->
        <div class="col">
            <div class="img-annonce"> <a href="#"><img class="img-fluid" src="./photos/img1.jpg" alt="annonce 1"></a></div>
            <div class="text-description "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, iure.</div>
        </div>
        <div class="col">
              <div class="img-annonce"> <a href="#"><img class="img-fluid" src="./photos/img2.jpg" alt="annonce 2"></a></div>
              <div class="text-description ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quos tempore accusamus totam ipsa at.</div>
      </div>
      <div class="col">
              <div class="img-annonce"> <a href="#"><img class="img-fluid"  src="./photos/img3.jpg" alt="annonce 3"></a></div>
              <div class="text-small"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, molestiae. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, dolores?</div>
      </div>
      <div class="col">
              <div class="img-annonce"> <a href="#"><img class="img-fluid"  src="./photos/img4.jpg" alt="annonce 3"></a></div>
              <div class="text-small"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, molestiae. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, dolores?</div>
      </div>
    </div>
  </div>
</section>

<section id="services" class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2>Services we offer</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
      </div>
    </div>
  </div>
</section>

<section id="contact">
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
