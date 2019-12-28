@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="container row">
            <div class="col-12"><h1>Nos annonces</h1></div>
            <div class="col-6">
                <ul class="list-group list-group-flush">
                    @if(session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @endif

                    @foreach($bien as $biens)
                        <li class="list-group-item row">
                            <div class="col-12"><img src="{{$biens->images ? asset($biens->images) : asset('uploads/images/default.png')}}" alt="{{$biens->title}}" width="200">
                            </div>
                            <div class="col-12">
                                <h2>{{$biens->type_annonce->name}} </h2>
                                <ul class="list-group list-goup-flush">
                                    <li class="list-group-item list-group-item-dark">type: {{$biens->type_bien->nom}} </li>
                                    <li class="list-group-item list-group-item-dark">Ville : {{$biens->region->nom}} </li>
                                    <li class="list-group-item list-group-item-dark"> Quartier : {{$biens->quartier}} </li>
                                    <li class="list-group-item list-group-item-dark"> Prix : {{$biens->prix}} </li>
                                </ul><br><br>
                                <div class="row">
                                    <div class ="col"><p><a href="{{route('editer_annonce',['ann'=>$biens->id])}}"><button class="btn btn-secondary">Editer l'annonce</button></a></p></div>
                                    <div class ="col">
                                        <form action="biens/{{$biens->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection

