<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    //
    use HasFactory;
protected $fillable = ['dateTime','type','test','balance','complete','promocode','cashless_id','machine_id'];
    public function machine()
    {
        return $this->belongsTo(Machine::class,'machine_id');
    }
}
