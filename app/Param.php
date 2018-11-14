<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Param extends Model
{
    protected $fillable = ['is_available', 'is_lazy'];
    
    public $timestamps = false;
}
