<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Goods extends Model
{
    //
    use HasFactory;

    protected $fillable = ['code','name'];

    public function machine()
    {
        return $this->belongsTo(Machine::class,'machine_id');
    }
}
