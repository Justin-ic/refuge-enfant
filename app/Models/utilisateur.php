<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    public function dons() {
        return $this->hasMany(don::class,'utilisateur_id'); // Relation One to Many: inscrit est le père
    } 
    protected $fillable = ['nom','email','password','avatar','provider','social_id','remember'];
    
}





