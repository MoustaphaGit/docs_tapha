<?php

namespace App\Http\Controllers;
use App\Annonce_bien;
use App\Type_bien;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function index(Request $request)
    {
        $sliderAnnonce = Annonce_bien::orderBy('created_at', 'DESC')->select('quartier','description','prix','type_bien_id','type_annonce_id')->take(3)->get();
        $annonces = Annonce_bien::all()->take(3);
        return view('menu.home', compact('sliderAnnonce','annonces'));
    }
    public function show_acheter()
    {
        return view('menu.acheter');
    }
    public function show_louer()
    {
        return view('menu.louer');
    }


}
    /*public function display(){
        $bien=\App\Annonce_bien::orderBy('created_at')->get();
        return view('annonces.index', compact('bien'));
    }
    public function edit($ann){
        $bien=\App\Annonce_bien::find($ann);
        $type_b=\App\Type_bien::pluck('nom','id');
        $type_a=\App\Type_annonce::pluck('name','id');
        $region=\App\Region::pluck('nom','id');
       return view('annonces.edit', compact('bien','type_b','type_a','region'));
    }
    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name . '.' . $uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
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
                'type_annonce_id'=> $request->input('type_annonce'),
                'region_id'=> $request->input('type_annonce'),
            ]);
        }
        return redirect('/annonces/index')->with(['success'=>"Annonce bien mis à jour"]);

    }
}
