<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function cariculam(){
        return $this->belongsTo(Cariculam::class,'cariculam_id','id');
    }
    public function department(){
        return $this->belongsTo(Department::class,'department_id','id');
    }
    public function semester(){
        return $this->belongsTo(Semester::class,'semester_id','id');
    }
    public function session(){
        return $this->belongsTo(Session::class,'session_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'created_by','id');
    }
}
