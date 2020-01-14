@extends('layouts.navbar')
@section('nav')
    <h1> Bienvenue dans votre espace annonce</h1>
    <div class="container bg-blue-dark-1 text-white">
        <a href="/seller/annonces/create" > <h4 class="text-white">Poster une annonce / Acceder au formulaire</h4>  </a>
    </div>
    <hr>
    <br>
    <div class="container bg-blue-dark-1 text-white">
        <a href="/annonces/index" > <h4 class="text-white">voir mes Annonces</h4>  </a>
    </div>
    @endsection
