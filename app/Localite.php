<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localite extends Model
{
    public function annonce_biens(){
        return $this->hasMany("App\Annonce_bien");
    }
    public function region(){
        return $this-> belongsTo('App\Region');
    }
}

