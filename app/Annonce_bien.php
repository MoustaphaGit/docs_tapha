<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce_bien extends Model
{
    protected $fillable=['title','type_bien_id','ville','quartier','prix','mettre_2','description'];
    public function type_bien(){
        return $this-> belongsTo('App\Type_bien');
    }

    
}
