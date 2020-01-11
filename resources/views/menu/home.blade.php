@extends('layouts.navbar')
@section('nav')
<section>
        <header class="bg-primary text-white px-5  " style="background-image: url(./../photos/img2.jpg);
         background-size: cover;background-attachment: fixed;background-position: top left ;">
            <br><br><br><br><br>
            <br>
            <div class="container text-center">
                <div class=" text-lg-center bg-color-transparent pt-5" style="background-color:rgba(76, 76, 74, 0.408);">
                    <h1> <span class="text-white">GROUPE KEURGUI_IMMOBILIER</span> </h1>
                    <p class="text-white"> Désormais Se loger devient plus facile</p>
                </div>
                <br>
                <br><br>
                <!-- le filtre de recherche -->
                <div class="container-fluid bg-color-transparent text-sm-center" style="background-color:rgba(75, 75, 73, 0.408);" >
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

    <section class=" py-1"><!-- la section des annonces  -->
    <div class="row">
        <div class="col-12 py-0">
            <!-- le div du slide pour faire defiller quelques annonces -->
            <h4 lass="hk-sec-title"> Quelques offres en exclusivite</h4>
            <div class="row px-5 py-3">
                    
            </div>
        </div>
        <!-- le div des 3 derniers annonce  -->
        <div class=" row col-12 mx-1 ">
            <div class="card col-lg-4 col-md-6 col-sm-12 rounded">
                <a href="#">
                    <div class="card-img card-img-bg text-white" style="background-image: url(./photos/img1.jpg); background-size:cover;">
                        <div class="card-img-overlay text-white bg-trans-dark-60">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text">is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </a>
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