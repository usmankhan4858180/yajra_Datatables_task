<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    public $fillable = ['name','email', 'address', 'phoneno', 'cnic'];
}
