<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class biensController extends Controller
{
    public function index(){
        return view('acceuil');
    }
    
    public function show(){
        return view('annonce');
    } 
}
