<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = [
        'code_order', 'idUser', 'name', 'address', 'email', 'phone', 'money', 'massage', 'status',
    ];

    public function User(){
        return $this->belongsTo('App\Models\User','idUser','id');
    }
}
