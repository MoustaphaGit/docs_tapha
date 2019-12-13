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
    public function edit($ann){
        $bien=\App\Annonce_bien::find($ann);
        $type=\App\Type_bien::pluck('nom','id');
       return view('annonces.edit', compact('bien','type'));

    }
    public function update(Request $request,$ann){
        /*$request->validate([
            "title"=>"required|max:300|min:5",
            "prix"=>"required|numeric",
            "description" => 'nullable'
            ]);*/
        $bien=\App\Annonce_bien::find($ann);
        if($bien){
            $bien->update([
                'title'=>$request->input('title'),
                'ville'=>$request->input('ville'),
                'quartier'=>$request->input('quartier'),
                'prix'=>$request->input('price'),
                'mettre_2'=>$request->input('surface'),
                'description'=>$request->input('description'),
                'type_bien_id'=>$request->input('type_bien'),
            ]);
        }
        return redirect('/annonces/index')->with(['success'=>"Annonce bien mis à jour"]);;

    }
}
