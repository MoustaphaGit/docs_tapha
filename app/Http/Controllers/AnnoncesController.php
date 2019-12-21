<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class AnnoncesController extends Controller
{
    public function show(){
        $type_b=\App\Type_bien::pluck('nom','id');
        $type_a=\App\Type_annonce::pluck('name','id');
        /*$localite=\App\Localite::pluck('localite','id');*/
        $region=\App\Region::pluck('nom','id');
        return view('annonces.create',compact('type_b','type_a','localite','region'));
    }

    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }


    public function depot(Request $request){
        $data= $request->validate([
            'price'=>'numeric',
            'description'=>'nullable | min:3 | max:100000',
            'annonce_image'=>'nullable| image| max:2048'
        ]);
        $annonce = new \App\Annonce_bien();
        if($request->has('annonce_image')){
            $img= $request->file('annonce_image');
            $img_name=Str::slug($request->input('type_bien')).'_'.time();
            $dossier='/uploads/images/';
            $annonce->images= $dossier.$img_name.'.'.$img->getClientOriginalExtension();
            $this->uploadImage($img,$dossier,'public',$img_name);
            }
        $annonce->type_annonce_id = $request->input('type_annonce');
        $annonce->type_bien_id = $request->input('type_bien');
        $annonce->region_id = $request->input('region');
        /*$annonce->localite_id = $request->input('quartier');*/
        $annonce->quartier = $request->input('quartier');
        $annonce->nombre_piece = $request->input('nbr_piece');
        $annonce->nombre_chambre = $request->input('nbr_chambre');
        $annonce->mettre_2 = $request->input('surface');
        $annonce->prix = $request->input('price');
        $annonce->description = $request->input('description');
        $annonce->save();
            return redirect('/annonces/index')->with(['success'=>"Annonce bien enregistré"]);
    }
}

