<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('css/docs.css')}}"/>
</head>
<body>
    <main>
        <div class="container row ">
            <div class="col-12"><h1>informations sur votre annonces </h1></div>
            @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
            @endforeach
            @endif
            <div class="col-6">
                <form action="{{route('ajout_annonce')}}" method="post" class="form-control">
                @csrf
                    <label for="">Titre :</label>
                    <input type="text" name="title" class="form-control" placeholder="un titre a votre annonce">
                    <label for="">Type de biens : </label>
                    <select class="form-control" name="type_bien" id="type_bien">
                    <option value="">type de biens</option>
                    @foreach($type as $key=>$value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                    </select>
                    <label for="">Ville : </label>
                    <input type="text" name="ville" class="form-control" placeholder="Dans quel  ville ?">
                    <label for="">Quartier : </label>
                    <input type="text" name="quartier" class="form-control" placeholder="le quartier?">
                    <label for=""> Prix : </label>
                    <input type="text" name="price" class="form-control" placeholder="Donner le prix de votre biens?">
                    <label for="surface">Surface : </label>
                    <input type="text" name="surface" class="form-control" placeholder="le nombre de mettre carre?">
                    <label for="">Descriptions : </label>
                    <textarea name="description" id="description"cols="30" rows="10" class="form-control" placeholder="une petite description de votres bien"></textarea>
                    <br>
                    <div><button class=" btn btn-primary">Enregistrer</button></div>
                </form>
                
            </div>
            

        </div>
    </main>
</body>
</html>