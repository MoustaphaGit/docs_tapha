<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_bien extends Model
{
public function annonces_bien(){
    return $this->hasMany("App\Annonce_bien");
    }
}
