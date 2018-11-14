<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    protected $fillable = ['slot_name', 'slot_element_id', 'slot_size'];
}
