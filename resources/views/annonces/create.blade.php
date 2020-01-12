@extends('layouts.navbar')
    @section('nav')
        <section class="container">
            <form action="{{route('ajout_annonce')}}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">formulaire</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#body_b">Aide</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body" id="body_a">
                        <hr>
                        <div class="col-12"><center><h1>informations sur votre annonces</h1></center></div>
                        <hr>
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                            @endforeach
                        @endif
                        <div class="col-9 card">
                            <div class="row py-5">
                                <div class="col-6">
                                    <label>Type d'annonce</label>
                                    <select class="form-control" name="type_annonce" id="type_annonce">
                                        @foreach($type_a as $key=>$value)
                                            <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="type_bien">Type de biens</label>
                                    <select class="form-control" name="type_bien" id="type_bien">
                                        @foreach($type_b as $key=>$value)
                                            <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{--LOCALISATION--}}
                            <div class="form-row py-5" >
                                    <div class= "col-12 bg-dark">
                                        <h4 class="text-white"><center> Ou se trouve votre bien ?</center> </h4>
                                        <br>
                                    </div>
                                <div class="col-6">
                                    <label for="ville">Dans qu'elle VILLE ?</label>
                                    <select class="form-control" name="region" id="region">
                                        @foreach($region as $key=>$value)
                                            <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="quartier">Dans quel quartier ?</label>
                                    <input type="text" name="quartier" class="form-control" placeholder="Preciser le quartier">
                                </div>
                            </div>
                            {{--  End_localisation--}}

                            {{--les caracteristiques--}}
                            <div class="form-row py-5">
                                <div class= "col-12 bg-dark">
                                    <h4 class="text-white"><center> Caracteristiques</center> </h4>
                                    <br>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="piece">Nombre de pièces</label>
                                    <input type="number" class="form-control" name="nbr_piece" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="chambre">Nombre de Chambre</label>
                                    <input type="number" name="nbr_chambre" class="form-control" id="nbr_chambre">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="surface">Surface : </label>
                                    <input type="text" name="surface" class="form-control" placeholder="nombre de m²">
                                </div>
                                <div class="col-md-1"><label for="..."></label><br><br><p><strong>m²</strong></p></div>
                            </div>
                            {{-- End_caracteristique--}}
                            {{-- le prix--}}
                            <div class="row pb-5">
                                <div class="col-7 ">
                                    <label for="price">Le Prix :</label>
                                    <input type="text" name="price"  placeholder="le prix ?" > FCFA
                                </div>
                            </div>
                            {{-- End le prix--}}
                        </div>
                    </div>
                    <div class="card-body" >
                        <h4 class="card-title"><center> <fieldset disabled> Images et description</fieldset></center> </h4>
                        <div class="col-6 card">
                            <div class="row">
                                <div class="col-12">
                                    <label for="">Ajouter des images : </label>
                                    <input type="file" name="annonce_image" class="form-control-file">
                                </div>
                                <div class="col-12">
                                    <label for="descrip">Descriptions : </label>
                                    <textarea name="description" id="description"cols="20" rows="8" class="description"
                                              placeholder="une petite description de votre bien"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12"><br><button type="submit" class=" btn btn-primary">Enregistrer</button></div>
                    </div>
                </div>
            </form>
        </section>
        <section class="container ">

            <form action="{{route('ajout_annonce')}}" method="post"  enctype="multipart/form-data">


            </form>
        </section>
    @endsection
