<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //
    use HasFactory;

    protected $fillable = ['good_id','machine_id','code','name','is_enabled','is_available','price','stock','capacity','expiry_date'];
}
