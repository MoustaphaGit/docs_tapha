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
            <div class="col-12">
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
                </form>       
            </div>
        </div>
    </main>
</body>
</html>