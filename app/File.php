<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['name','size'];

    public function record(){
      return $this->belongsTo(Record::class);
    }
}
