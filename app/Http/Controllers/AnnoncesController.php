<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnoncesController extends Controller
{
    public function show(){
        return view('annonces.index');
    } 
}
