<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('acceuil');
    }
    public function display(){
        $bien=\App\Annonce_bien::orderBy('created_at')->get();
        return view('annonces.index', compact('bien'));  
    }
   
}
