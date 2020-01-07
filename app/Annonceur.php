<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonceur extends Model
{

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function annonce_biens(){
        return $this->hasMany(\App\Annonce_bien::class);
    }
}
