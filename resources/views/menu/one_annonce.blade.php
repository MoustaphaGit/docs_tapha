@extends('layouts.navbar')
@section('nav')
<div class="container">
    <h1 class='col-sm-12 pt-3 pb-0'></h1>
    <hr>
    <div class="col-12 "><center><span class="" style="color:#f6993f;font-size: 1.98em; font-family:'Ubuntu Light';" >{{$ann->prix}} FCFA</span></center></div>
    <div class="col-12"><h2 class="">{{$ann->type_annonce->name}} {{$ann->type_bien->nom}}</h2></div>
    <div class="col-12 card card-sm container row">
        <div class="col-12 row">
            <div class='col-7'>
                <!--immage  -->
                <img src="{{ $ann->images}}" alt="img" style="width:610px; height:445px; display:table-cell" class="img-fluid ">
            </div>
            <div class='col-5 row'>
                <div class="col-12 ">
                    <div class="card-title"><h4 class="text-left border-left border-orange border-5"> DESCRIPTION DE L'ANNONCE</h4></div>
                        <p class="card-text "><strong>{{$ann->description}}</strong></p>
                </div>
               <div class="col-4 pb-1" ><span class="" style="color:#f6993f;font-size: 1.98em; font-family:'Ubuntu Light';">{{ $ann->nombre_piece }} Pièces</span> </div>
               <div class="col-5 px-2" ><span style="color:#f6993f;font-size: 1.98em; font-family:'Ubuntu Light';" >  {{ $ann->nombre_chambre }} Chambre</span> </div>
                <div class="col-3 px-1"> <span style="color:#f6993f;font-size: 1.98em; font-family:'Ubuntu Light';">{{ $ann->mettre_2}} m²</span></div>
                <div class="col-12 px-1">
                    <h4 >CONTACTER NOUS</h4> <span style="color:#f6993f;font-size: 1.98em; font-family:'Ubuntu Light';"> +221 -77-729-89-95 </span>
                </div>
            </div>

        </div>
    </div>
    <!-- end .container row -->

</div>
@endsection
