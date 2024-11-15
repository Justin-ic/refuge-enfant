<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $fillable = ['agency_code','secure_code','domain_name','url_on_success','url_on_failed'];
}
