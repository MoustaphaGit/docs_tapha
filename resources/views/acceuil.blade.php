@extends('layouts.app')
@section('content')
<section>

    <header class="bg-primary text-white px-5 ">
        <br><br><br><br><br><br>
        <div class="container text-center">
            <div class="bg-color-transparent text-lg-center pt-5">
                <h1> <span class="text-white">GROUPE KEURGUI_IMMOBILIER</span> </h1>
                <p class="text-white"> Désormais Se loger devient plus facile</p>
            </div>
            <br>
             <!-- le filtre de recherche -->
            <div class="container-fluid bg-color-transparent text-sm-center" >
                <form action="" method="post" name="filtre">
                    @csrf
                    <div class="row my-5 mx-1 ">
                        <div class="col-8 row  pr-0">
                            <div class="col-12 row largeur my-2">
                                <div class="col-4 p-0 ">
                                    <select name="type_annonce" class="custom-select">                                   
                                        <option selected>je veux</option>
                                        <option value="1">Louer</option>
                                        <option value="2">Acheter</option>
                                        <option value="3">Du neuf</option>
                                    </select>
                                </div>
                                <div class="col-8 pr-0">
                                    <input class="form-control" name="lieu" type="text" placeholder="Où désirez-vous habiter ?">
                                </div>
                            </div>
                            <div class="col-12 row largeur my-2">
                                <div class="col-6 p-0">
                                    <select class="custom-select" name="type_bien">
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
                                    <select class="custom-select" name >
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
@endsection