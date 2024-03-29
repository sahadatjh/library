<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function bookName(){
        return $this->belongsTo(Book::class,'book_id','id');
    }
    public function createdUser(){
        return $this->belongsTo(User::class,'created_by','id');
    }
    public function updatedUser(){
        return $this->belongsTo(User::class,'updated_by','id');
    }
}
