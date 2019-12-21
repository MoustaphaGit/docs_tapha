<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce_bien extends Model
{
    protected $fillable=['type_bien_id','quartier','prix','mettre_2','description'];
    public function type_bien(){
        return $this-> belongsTo('App\Type_bien');
    }
    public function type_annonce(){
        return $this-> belongsTo('App\Type_annonce');
    }
 /*public function localite(){
        return $this-> belongsTo('App\Localite');
    }*/
    public function region(){
        return $this-> belongsTo('App\Region');
    }

}
