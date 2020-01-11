<?php

namespace App\Http\Controllers;

use App\Annonce_bien;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AnnoncesController extends Controller
{
    /* pour afficher la page d'une annonce  */
    public function show_ann($slug)
    {
        $ann = Annonce_bien::where('id',$slug)->first();
        if($ann)
            return view("menu.one_annonce", compact('ann'));
        else
            return redirect('/acceuil');
    }
    /* methode pour la page  create */
    public function show(){
        $type_b=\App\Type_bien::pluck('nom','id');
        $type_a=\App\Type_annonce::pluck('name','id');
        /*$localite=\App\Localite::pluck('localite','id');*/
        $region=\App\Region::pluck('nom','id');
        return view('annonces.create',compact('type_b','type_a','region'));
    }
    /* methode pour afficher toutes les annonces  */
    public function display(){
        $bien = \App\Annonce_bien::orderBy('created_at')->get();
        return view('annonces.index', compact('bien'));
    }
    /* methode pour afficher les annonce de vente */
    public function display_acheter(){
        $bien = \App\Annonce_bien::where('type_annonce_id', 5)->take(6)->get();
        $type_b=\App\Type_bien::pluck('nom','id');
        $type_a=\App\Type_annonce::pluck('name','id');
        $region=\App\Region::pluck('nom','id');
        return view('menu.acheter', compact('bien','type_b','type_a','region'));
    }
    /* Editer un annonces  */
    public function edit($ann){
        $bien=\App\Annonce_bien::find($ann);
        $type_b=\App\Type_bien::pluck('nom','id');
        $type_a=\App\Type_annonce::pluck('name','id');
        $region=\App\Region::pluck('nom','id');
        return view('annonces.edit', compact('bien','type_b','type_a','region'));
    }
   /* End <editer des produits */

    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }
    public function destroy($id){
        $annonce = Annonce_bien::find($id);
        if($annonce)
            $annonce->delete();
        return redirect('/annonces/index');
    }
/* methode de traitrement d'une annonce */
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
    public function update(Request $request,$ann){
        $request->validate([
            'price'=>'numeric',
            'description'=>'nullable | min:3 | max:100000',
            'annonce_image'=>'nullable| image| max:2048'
        ]);
        $bien=\App\Annonce_bien::find($ann);
        if($bien){
            if($request->has('annonce_image')){
                $img= $request->file('annonce_image');
                if(file_exists(public_path().$bien->images))
                    Storage::delete(asset($bien->images));
                $img_name=Str::slug($request->input('type_bien')).'_'.time();
                $dossier='/uploads/images/';
                $bien->images= $dossier.$img_name.'.'.$img->getClientOriginalExtension();
                $this->uploadImage($img,$dossier,'public',$img_name);
            }
            $bien->update([
                'nombre_piece'=>$request->input('nbr_piece'),
                'nombre_chambre'=>$request->input('nbr_chambre'),
                'quartier'=>$request->input('quartier'),
                'prix'=>$request->input('price'),
                'mettre_2'=>$request->input('surface'),
                'description'=>$request->input('description'),
                'type_bien_id'=>$request->input('type_bien'),
                'type_annonce_id'=>$request->input('type_annonce'),
                'region_id'=> $request->input('region'),
            ]);
        }
        return redirect('/annonces/index')->with(['success'=>"Annonce bien mis à jour"]);
    }
}

