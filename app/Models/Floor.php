<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;


    protected $guarded=[];

    public function floorflat()
    {
        return $this->belongsTo(Flat::class,'flat_id','id');

    }

}
