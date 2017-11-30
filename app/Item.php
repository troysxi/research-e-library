<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
    {
    protected $fillable = ['Title','Faculty_Involved','Researchers','Abstract'];
    }
