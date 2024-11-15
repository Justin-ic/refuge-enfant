<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payementNotif extends Model
{
    protected $fillable = ['payment_mode','paid_sum','paid_amount','payment_token','payment_status','command_number','payment_validation_date'];
}
