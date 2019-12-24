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
            <hr>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
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
                                        <option value="{{$key}}" {{ $key == $bien->region_id ? 'selected="selected"':''}}>{{$value}}</option>
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
                                <select id="nbr_piece" class="form-control" value="{{$bien->nombre_piece}}" name="nbr_piece">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="chambre">Nombre de Chambre</label>
                                <select id="nbr_chambre" class="form-control" value="{{$bien->nombre_chambre}}" name="nbr_chambre">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="surface">Surface : </label>
                                <input type="text" name="surface" value="{{$bien->mettre_2}}" class="form-control" placeholder="nombre de m²">
                            </div>
                            <div class="col-md-1"><label for="..."></label><br><br><p><strong>M²</strong></p></div>
                        </div>
                        {{-- End_caracteristique--}}
                        {{--le prix--}}
                        <div class="row">
                            <div class="col-md-7">
                                <label for="price">Le Prix :</label>
                                <input type="text" name="price" value="{{$bien->prix}}" placeholder="le prix ?">
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
                            <div class="col-12 text-right">
                                <img src="{{asset($bien->images)}}" alt="{{$bien->type_annonce->name}}" width="70%">
                            </div>
                            <div class="col-6">
                                <h3>Chargez une autre image pour remplacer celle-ci :</h3>
                            </div>
                            <div class="col-6">
                                <input type="file" name="annonce_image" class="form-control-file">
                            </div>
                            <div class="col-12">
                                <label for="descrip">Descriptions : </label>
                                <textarea name="description" id="description"cols="20" rows="8" class="form-control"
                                        value="{{$bien->description}}"  placeholder="une petite description de votres bien"></textarea>
                            </div>
                            <div class="col-12"><br><button type="submit" class=" btn btn-primary">Mettre à jour </button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
