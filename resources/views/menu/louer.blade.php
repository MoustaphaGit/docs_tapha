@extends('layouts.navbar')
@section('nav')
<div class="container">
    <div class="row">
        <div class="col-sm-12 pt-5">
            <h5>Location de Biens </h5> <p class="text-left" style="color:#f6993f">TRIER PAR DATE</p>
            <hr>
        </div>
        <!-- le card de recherche avec des collapse -->
        <div class="col-4 row ">
            <div class="col-6"> <h6><strong>Affiner votre Recherche </strong></h6> </div>
            <div class="col-6"></div>
            <!-- le collape avec les input dedans -->
            <div class=" col-12 py-0">
                <form  action="" method="post" name="louer_page_filter">
                    <div class="" id="accordion_1">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between activestate">
                                <a role="button" data-toggle="collapse" href="#collapse_1" aria-expanded="true">Type de Recherche </a>
                            </div>
                            <div id="collapse_1" class="collapse show" data-parent="#accordion_1" role="tabpanel">
                                <div class="card-body row">
                                    <div class="col-12 py-0">
                                        <!-- <h5 class="card-title" style="color:#f6993f "> Transaction</h5> -->
                                        <span class="text-center" style="padding:5px;color:#f6993f"">Transaction</span>
                                    </div>
                                    <div class="col-12 custom-control custom-radio py-10" style="padding-left:50px">
                                        <div>
                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required="">
                                            <label class="custom-control-label" for="customControlValidation2"><h5><strong>Location</strong></h5></label>
                                        </div>
                                        <div class="pt-10">
                                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required="">
                                            <label class="custom-control-label" for="customControlValidation3"><h5><strong>Vente</strong></h5></label>
                                        </div>
                                    </div>
                                    <div class="col-12 py-0">
                                        <!-- <h5 class="card-title" style="color:#f6993f "> Type de Biens</h5> -->
                                        <span class="text-center" style="padding:5px;color:#f6993f">Type de Biens</span>
                                    </div>
                                    <div class ="py-10" style="padding-left:30px">
                                        <select class="form-control" name="type_bien" id="type_bien" style="width:150%; ">
                                            <option value="1"> Appartement</option>
                                            <option value="1">Villa</option>
                                            <option value="1"> Terrain</option>
                                        </select>
                                    </div>
                                    <div class ="col-sm-12 py-10" style="padding-left:30px">
                                        <button type="submit"  class="btn btn-danger btn-rounded"  style="width:100%">RECHERCHER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2" aria-expanded="false">Où désirez-vous habiter ?</a>
                            </div>
                            <div id="collapse_2" class="collapse" data-parent="#accordion_1">
                                <div class="card-body pa-15">
                                    <h5 class="card-title" style="color:#f6993f"> LOCALISATION </h5>
                                    <div class="row" style="padding-bottom: 4px">
                                        <div class="col-12">
                                            <select class="form-control" name="region" id="region" >

                                                <option value=""></option>

                                            </select>
                                        </div>
                                        <div class="col-12 pt-2">
                                            <input class="form-control" type="text" name="" placeholder="Préciser le quartier" style="width:100%">
                                        </div>
                                        <div class=" col-sm-12 py-10" style="padding-left:30px">
                                            <button type="submit"  class="btn btn-danger btn-rounded"  style="width:100%">RECHERCHER</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_3" aria-expanded="false">SURFACE/BUDGET</a>
                            </div>
                            <div id="collapse_3" class="collapse" data-parent="#accordion_1">
                                <div class="card-body pa-15">
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
                                            <div class="col-6"><input class="form-control" type="text" name="" placeholder="min" style="width:100px"></div>
                                            <div class="col-6"><input class="form-control" type="text" name="" placeholder="max" style="width:100px"></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class=" col-sm-12 py-10" style="padding-left:30px">
                                            <button type="submit"  class="btn btn-danger btn-rounded"  style="width:100%">RECHERCHER</button>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4" aria-expanded="false"> Pièce(s)/Chambre</a>
                            </div>
                            <div id="collapse_4" class="collapse" data-parent="#accordion_1">
                                <div class="card-body pa-15">
                                    <li class="row list-group-item">
                                        <div class="row" style="padding-bottom: 4px">
                                            <div class="col-12 pb-2"><h6>Le nombre de pièces</h6> </div>
                                            <div class="col-12"><input class="form-control " type="number" name="" style="width:100%"></div>
                                        </div>
                                        <div class="row" style="padding-bottom: 4px">
                                            <div class="col-12 pb-2"><h6>Le nombre de Chambre</h6> </div>
                                            <div class="col-12"><input class="form-control " type="number" name="" style="width:100%"></div>
                                        </div>
                                        <div class=" col-sm-12 py-10" style="padding-left:30px">
                                            <button type="submit"  class="btn btn-danger btn-rounded"  style="width:100%">RECHERCHER</button>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- les annonces de locations avec un col-7 -->
        <div class="col-8 row">
            <div class= "col-12">
                @foreach($bien as $biens)
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-7">
                            <img src="{{$biens->images ? asset($biens->images) : asset('uploads/images/default.png')}}" style=" height:355px"; class="card-img" alt="...">
                        </div>
                        <div class="col-md-5">
                            <div class="card-body row">
                                <div class="col-12"><center><h5 class="card-title" style="color: #f6993f">{{$biens->type_annonce->name}}-{{$biens->type_bien->nom}}</h5></center></div>
                                <div class="col-12 pb-0">
                                    <center><span class="" style="font-size:1.30em;"><strong>{{$biens->mettre_2}} m² ,{{$biens->nombre_piece}}Pièces</strong></span><hr></center>
                                </div>
                                <div class="col-12  pb-2"><center><span class="" style="font-size: 1.42em;color:#f6993f"> {{$biens-> prix}}FCFA</span></center></div>
                                <div class="col-12 pb-3 "><center><span class="">{{$biens ->quartier}}</span></center></div>
                                {{$biens->description}}.
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection
