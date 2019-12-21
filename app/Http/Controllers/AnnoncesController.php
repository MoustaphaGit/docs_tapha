<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;


class AnnoncesController extends Controller
{
    public function show(){
        $type=\App\Type_bien::pluck('nom','id');
        return view('annonces.create',compact('type'));
    }

    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk ='public', $filename = null){
        $name = !is_null($filename) ? $filename : Str::random ('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }

    public function depot(Request $request){
        $data= $request->validate([
            'title'=>'required|max:50',
            'prix'=>'max:7|numeric',
            'description'=>'nullable|min:3|max:100000',
            'images'=>'nullable|image|mimes:jpeg,png,jpg,gif| max: 2048'
        ]);
        $annonce = new \App\Annonce_bien();
        if($request->has('annonce_image')){
            $img= $request->file('annonce_image');
            $img_name=Str::slug($request->input('title')).'_'.time();
            $dossier='/uploads/images/';
            $annonce->images= $dossier.$img_name.','.$img->getClientOriginalExtension();
            $this->uploadImage($img,'public',$img_name);
        }
        $annonce->title = $request->input('title');
        $annonce->ville = $request->input('ville');
        $annonce->quartier = $request->input('quartier');
        $annonce->prix = $request->input('price');
        $annonce->mettre_2 = $request->input('surface');
        $annonce->description = $request->input('description');
        $annonce->type_bien_id = $request->input('type_bien');
        $annonce->save();
        return redirect('/annonces/index')->with(['success'=>"Annonce bien enregistré"]);
    }
}

