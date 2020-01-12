<?php

namespace App\Http\Controllers;
use App\Annonce_bien;
use App\Annonceur;
use App\Type_annonce;
use App\Type_bien;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $ann_count = Annonce_bien::all()->count();
        $type_a_count = Type_annonce::all()->count();
        $type_b_count = Type_bien::all()->count();
        $annonceur_count = Annonceur::all()->count();
        return view('admin.index',compact('ann_count', 'type_a_count', 'type_b_count','annonceur_count'));
    }
}
