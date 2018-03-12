<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = ["fb","tw","yt","in",'name','jobs','photo','phone','email','locat','icon'];
}
