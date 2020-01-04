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

<body class=" bg-white" style="font-family:sans-serif;font-size:small" id="page-top">

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
<section>

    <header class="bg-primary text-white ">
        <br><br>
        <div class="container text-center">
            <div class="bg-color-transparent text-lg-center pt-5">
                <h1> <span class="text-white">GROUPE KEURGUI_IMMOBILIER</span> </h1>
                <p class="text-white"> Désormais Se loger devient plus facile</p>
            </div>
            <br>
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
        </div>
        <br> <br><br> <br><br> <br>
    </header>
</section>

<section class="container py-1"><!-- la section des annonces  -->
  <div class="row">
      <div class="col-12 py-0">
          <!-- le div du slide pour faire defiller quelques annonces -->
          <div class="">
              <h4    class="hk-sec-title"> Quelques offres en exclusivite</h4>
              <div class="row px-5 py-3">
                  <div class="row-sm">
                      <div id='carouselExampleIndicators' class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                              <div class="carousel-item active">
                                  <img class="d-block w-100" src="./photos/img1.jpg" alt="first slide ">
                                  <div class="carousel-caption d-none d-md-block">
                                      <h5 class="text-white">first Slide label</h5>
                                      <p>this content paragraph enough to say</p>
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100" src="./photos/img4.jpg" alt="">
                                  <div class="carousel-caption d-none d-md-block">
                                      <h5 class="text-white">second Slide label</h5>
                                      <p>this content paragraph enough to say</p>
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100" src="./photos/img3.jpg" alt="">
                                  <div class="carousel-caption d-none d-md-block">
                                      <h5 class="text-white bg">third Slide label</h5>
                                      <p>this content paragraph enough to say</p>
                                  </div>
                              </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class=" container row justify-content-center col-12  mx-1 "> <!-- le div des 3 derniers annonce  -->
        <div class="col">
            <div class="img-annonce"> <a href="#"><img class="img-fluid" src="./photos/img1.jpg" alt="annonce 1"></a></div>
            <div class="text-description "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, iure.</div>
        </div>
        <div class="col">
              <div class="img-annonce"> <a href="#"><img class="img-fluid" src="./photos/img2.jpg" alt="annonce 2"></a></div>
              <div class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quos tempore accusamus totam ipsa at.</div>
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

  </div>
</section>

<section id="contact">
  <div class="container">

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
</body>
</html>
