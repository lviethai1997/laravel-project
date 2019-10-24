<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Custommer extends Model
{
    protected $table = 'custommer';
    protected $fillable= [
        'idUser', 'address', 'phone'
    ];

    public function User(){
        return $this->belongsTo('App\Models\User','idUser','id');
    }
}
