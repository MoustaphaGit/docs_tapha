<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce_bien extends Model
{
    public function type_bien(){
        return $this-> belongsTo('App\Type_bien');
    }
    
}
