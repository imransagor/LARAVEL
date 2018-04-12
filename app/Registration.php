<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $primaryKey = 'userId';
    
    public $timestamps = false;
}
