<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['user_id','nombre','ap_paterno','ap_materno','celular','extension','telefono','empresa','direccion'];
}
