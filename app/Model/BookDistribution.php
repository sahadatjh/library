<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BookDistribution extends Model
{
    public function studentInfo(){
        return $this->belongsTo(Student::class,'student_roll','board_roll');
    }
    public function book(){
        return $this->belongsTo(Book::class,'book_id','id');
    }
}
