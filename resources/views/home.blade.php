@extends('layouts.navbar')

@section('nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="container bg-blue-dark-1 text-white">
                            <a href="/seller/annonces/create" > <h4 class="text-white">Poster une annonce / Acceder au formulaire</h4>  </a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
