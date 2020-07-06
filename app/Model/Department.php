<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function cariculam(){
        return $this->belongsTo(Cariculam::class,'cariculam_id','id');
    }
}
