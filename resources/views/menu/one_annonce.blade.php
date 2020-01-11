@extends('layouts.navbar')
@section('nav')
<div class="container">
    <h1 class='col-sm-12 pt-3 pb-0'>{{$ann->type_annonce->name}}:{{$ann->type_bien->nom}}</h1>
    <hr>
    <div class="col-sm-12 "><center><span class="" style="color:red;">le prix</span></center></div>
    <div class="col-sm-9"><!--  --> ici</div>
    <div class="col-sm-3 bg-light-[30] ">
         <button type="submit" class="btn btn-black rounded text-white">Appeler</button>
    </div>
    <div class="col-12 card card-sm  container row">
        <div class="col-12 row">
            <div class='col-9 '>
                <!--immage  -->
                <img src="{{ $ann->images}}" alt="img" style="width:620px; height:465px; display:table-cell" class="img-fluid ">
            </div>
            <div class='col-3 row'>
                <div class="col-sm-12 bg-light-[15]">
                    <!-- description -->
                    <p class="card-text "> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat,
                         ipsum! Lorem ipsum dolor sit, amet consectetur
                          adipisicing elit. Fuga, eaque!</p>
                </div>
                <div class="col-sm-12 row">
                    <div class="col-sm-12">
                            <!-- addresse -->
                        <h1>ici</h1>
                    </div>
                    <div class="col-sm-12">
                            <!-- nom du porteur d'annonce -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end .container row -->

</div>
@endsection
