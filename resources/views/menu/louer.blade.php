@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 pt-5">
            <hr>
            <h5>Location de Biens </h5><br> <p class="text-left" style="color:#f6993f">TRIER PAR DATE</p>
            <hr>
            <!-- les annonces de locations avec un col-7 -->
            <div class="col-sm-8">

            </div>
            <!-- le card de recherche avec des collapse -->
            <div class="col-sm-4 row">
                <div class="col-6"> <h6><strong>Affiner votre Recherche</strong></h6> </div>
                <div class="col-6"></div>
                <!-- le collape avec les input dedans -->
                <div class="col-sm-12 py-5">
                        <div class="accordion" id="accordion_1">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between activestate">
                                    <a role="button" data-toggle="collapse" href="#collapse_1" aria-expanded="true">Type de Recherche</a>
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
                                        <div class ="py-10" style="padding-left:30px" >
                                            <select class="form-control" name="type_bien" id="type_bien" style="width:150%; ">
                                                <option value="1"> Appartement</option>
                                                <option value="1">Villa</option>
                                                <option value="1"> Terrain</option>
                                            </select>
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
                                    </div>
                                </div>
                            </div>                        
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4" aria-expanded="false"> Pièce(s)/Chambre</a>
                                </div>
                                <div id="collapse_4" class="collapse" data-parent="#accordion_1">
                                    <div class="card-body pa-15">
                                        <li class="list-group-item">
                                            <div class="row" style="padding-bottom: 4px">
                                                <div class="col-12 pb-2"><h6>Le nombre de pièces</h6> </div>
                                                <div class="col-12"><input class="form-control " type="number" name="" style="width:100%"></div>
                                            </div>
                                            <div class="row" style="padding-bottom: 4px">
                                                <div class="col-12 pb-2"><h6>Le nombre de Chambre</h6> </div>
                                                <div class="col-12"><input class="form-control " type="number" name="" style="width:100%"></div>
                                            </div>
                                        </li> 
                                    </div>
                                </div>
                            </div>                        
                        </div>   
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection