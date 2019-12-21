<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editer une annonces</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('css/docs.css')}}"/>
</head>
<body>
    <main>
        <div class="container row ">
            <div class="col-12"><h1>Modifier votre annonce </h1></div>
            <form action="{{route('update_annonce',['ann'=>$bien->id])}}" method="post" class="form-control" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-6">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="type_annonce">Type d'annonce</label>
                                <select class="form-control" name="type_annonce" id="type_annonce">
                                    @foreach($type_a as $key=>$value)
                                        <option value="{{$key}}" {{ $key == $bien->type_annonce_id ? 'selected="selected"':''}}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="type_bien">Type de biens</label>
                                <select class="form-control" name="type_bien" id="type_bien">
                                    @foreach($type_b as $key=>$value)
                                        <option value="{{$key}}" {{ $key == $bien->type_bien_id ? 'selected="selected"':''}}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- LOCALISATION --}}
                        <div class="form-group row" >
                            <div class = "col-12">
                                <hr>
                                <h4><center> <fieldset disabled>Ou se trouve votre bien ?</fieldset></center> </h4>
                                <hr>
                            </div>
                            <div class="col-6">
                                <label for="ville">Dans qu'elle VILLE ?</label>
                                <select class="form-control" name="region" id="region">
                                    @foreach($region as $key=>$value)
                                        <option value="{{$key}}" {{ $key == $bien->region_sid ? 'selected="selected"':''}}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="quartier">Dans quel quartier ?</label>
                                <input type="text" name="quartier" value="{{$bien->quartier}}" class="form-control" placeholder="Preciser le quartier">
                            </div>
                        </div>
                        {{--End_localisation--}}

                        {{--  les caracteristiques --}}
                        <div class="form-row">
                            <div class = "col-12">
                                <hr>
                                <h4><center> <fieldset disabled>Caracteristiques ...</fieldset></center> </h4>
                                <hr>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="piece">Nombre de pièces</label>
                                <select id="nbr_piece" class="form-control" value="{{$bien->nbr_piece}}" name="nbr_piece">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="chambre">Nombre de Chambre</label>
                                <select id="nbr_chambre" class="form-control" name="nbr_chambre">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="surface">Surface : </label>
                                <input type="text" name="surface" class="form-control" placeholder="nombre de m²">
                            </div>
                            <div class="col-md-1"><label for="..."></label><br><br><p><strong>m²</strong></p></div>
                        </div>
                        {{-- End_caracteristique--}}
                        {{--le prix--}}
                        <div class="row">
                            <div class="col-md-7">
                                <label for="price">Le Prix :</label>
                                <input type="text" name="price" placeholder="le prix ?">
                            </div>
                            <div class=col-md-5>
                                <select class="col-6" name="devise" id="">
                                    <option selected value="">FCFA</option>
                                    <option  value="">Euro</option>
                                    <option  value="">$</option>
                                </select>
                            </div>
                        </div>
                        {{-- End le prix--}}
                    </div>
                    <div class="col-6 ">
                        <div class="row">
                            <div class = "col-12">
                                <hr>
                                <h4><center> <fieldset disabled> Images et description</fieldset></center> </h4>
                                <hr>
                            </div>
                            <div class="col-12">
                                <label for="">Ajouter des images : </label>
                                <input type="file" name="annonce_image" class="form-control-file">
                            </div>
                            <div class="col-12">
                                <label for="descrip">Descriptions : </label>
                                <textarea name="description" id="description"cols="20" rows="8" class="form-control"
                                          placeholder="une petite description de votres bien"></textarea>
                            </div>
                            <div class="col-12"><br><button type="submit" class=" btn btn-primary">Enregistrer</button></div>
                        </div>
                    </div>
                </div>
            </form>
            <{{--div class="col-12">
                <form action="{{route('update_annonce',['ann'=>$bien->id])}}" method="post" class="form-control">
                @csrf
                @method('patch')
                    <label for="">Titre :</label>
                    <input type="text" name="title" class="form-control" placeholder="un titre a votre annonce" value="{{$bien->title}}">
                    <label for="">Type de biens : </label>
                    <select class="form-control" name="type_bien" id="type_bien">
                    <option value="">type de biens</option>
                    @foreach($type as $key=>$value)
                    <option value="{{$key}}"{{ $key == $bien->type_bien_id ? 'selected="selected"':''}}> {{$value}} </option>
                    @endforeach
                    </select>
                    <label for="">Ville : </label>
                    <input type="text" name="ville" class="form-control" placeholder="Dans quel ville ?" value="{{$bien->ville}}">
                    <label for="">Quartier : </label>
                    <input type="text" name="quartier" class="form-control" placeholder="le quartier?" value="{{$bien->quartier}}">
                    <label for=""> Prix : </label>
                    <input type="text" name="price" class="form-control" placeholder="Donner le prix de votre biens?" value="{{$bien->prix}}">
                    <label for="surface">Surface : </label>
                    <input type="text" name="surface" class="form-control" placeholder="le nombre de mettre carre?" value="{{$bien->mettre_2}}">
                    <label for="">Descriptions : </label>
                    <textarea name="description" id="description"cols="30" rows="10" class="form-control" placeholder="une petite description de votres bien" value="{{$bien->description}}"></textarea>
                    <br>
                    <div><button class=" btn btn-primary">Enregistrer</button></div>
                </form>--}}
            </div>
        </div>
    </main>
</body>
</html>
