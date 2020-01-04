@extends('layouts.app')
@section('content')
    <section class="container hk-wrapper">

        <div class="row">
            <div class="col-12 pt-1">
                <h5>RECHERCHER ET ACHETER VOTRE LOGEMENT </h5>

                <hr></div>
            <div class="col-8 row">
                <h6 class="col-12">DES VILLAS A VENDRE, <span style="color: #f6993f"> Trier par date</span></h6>
                <!--Des titres , des contenue et quelque annonce de type vente trier par date-->
                @foreach($bien as $biens )
                <div class="col-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="card mb-5">
                        <img src="{{$biens->images ? asset($biens->images) : asset('uploads/images/default.png')}}"  alt=" " style="width: 100%" class="card-img-top">
                    </div>
                    <div class="card body">
                       <h5 class="card-title" style="color:#f6993f "><center>{{$biens->type_annonce->name}}: {{$biens->type_bien->nom}} </center></h5>
                       <div class="list-group-item">
                           <p class="card-text"> localite :{{$biens->quartier}} </p>
                       </div>
                       <div class="list-group-item" style="color: #f6993f"> <p class="card-text">{{$biens->prix}} FCFA</p></div>
                    </div>
                </div>
                @endforeach
            <!--filtre de recherche pour un achat de logement -->
            <div class="col-4 row">
                <div class="col-lg-3 col-sm-4 col-xs-12 ">
                    <div class="card w-260p w-sm-290p">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#f6993f "> VOTRE RECHERCHE </h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <select  class="form-control" name="" id="" >
                                        <option value="1">selectionner un type</option>
                                        <option value="2">selectionner un type</option>
                                        <option value="3">selectionner un type</option>
                                    </select>
                                </li>
                                <li class="list-group-item">
                                    <div class="row" style="padding-bottom: 4px">
                                        <div class="col-12 pb-2"><h6> Quel budget?</h6> </div>
                                        <div class="col-6"><input class="form-control " type="text" name="" placeholder ="min" style="width:100px"></div>
                                        <div class="col-6"><input class="form-control" type="text" name="" placeholder="max" style="width:100px"></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row" style="padding-bottom: 4px">
                                        <div class="col-12 pb-2"><h6> Quelle surface?</h6> </div>
                                        <div class="col-6"><input class="form-control" type="text" name="" placeholder="min" data-mask="$999,999,999,99" style="width:100px"></div>
                                        <div class="col-6"><input class="form-control" type="text" name="" placeholder="max" style="width:100px"></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row" style="padding-bottom: 4px">
                                        <div class="col-12 pb-2"><h6>Le nombre de pièces</h6> </div>
                                        <div class="col-12"><input class="form-control " type="number" name="" style="width:100%"></div>
                                    </div>
                                </li>
                                <li class="list-group-item"></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="color:#f6993f "> LOCALISATION </h5>
                            <div class="row" style="padding-bottom: 4px">
                                <div class="col-12">
                                    <select class="form-control" >
                                        <option value=""> la ville ? </option>
                                        <option value=""> Dakar </option>
                                        <option value=""> Thies </option>
                                        <option value=""> Mbour </option>
                                        <option value=""> Saint-louis </option>
                                    </select>
                                </div>
                                <div class="col-12 pt-2">
                                    <input class="form-control" type="text" name="" placeholder="Préciser le quartier" style="width:100%">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <center><button type="submit" class="btn btn-rounded btn-dark text-white">Appliquer</button></center>
                            <br>
                            <center><button type="submit" class="btn btn-rounded btn-danger text-white">Réinicialiser</button></center></center>
                        </div>
                    </div>
                </div>

            </div>
            <!--FIN filtre de recherche pour un achat de logement -->

        </div>
    </section>


    @endsection
