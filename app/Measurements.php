<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measurements extends Model
{
    protected $fillable=['id','node','value','created_at','updated_at'];
    //protected $hidden=['created_at','updated_at'];
}
