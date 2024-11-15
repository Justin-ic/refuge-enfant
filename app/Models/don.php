<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class don extends Model
{
    public function utilisateur() {
        return $this->belongsTo(utilisateur::class,'utilisateur_id'); // Relation One to Many: note est le fils et inscrit le père
    } 

    protected $fillable = ['transaction_id','utilisateur_id','montant','date','status'];
}




