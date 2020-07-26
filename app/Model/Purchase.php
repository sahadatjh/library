<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Book;
use App\Model\Publication;
use App\Model\Author;
use App\Model\User;

class Purchase extends Model
{
    protected $fillable = ['name','invoice_number','book_id','publication_id','author_id','quantity','priented_price','discount','created_by','updated_by','remarks'];

    public function bookName(){
        return $this->belongsTo(Book::class,'book_id','id');
    }
    public function publicationName(){
        return $this->belongsTo(Publication::class,'publication_id','id');
    }
    public function createdUser(){
        return $this->belongsTo(User::class,'created_by','id');
    }
    public function updatedUser(){
        return $this->belongsTo(User::class,'updated_by','id');
    }
    public function authorName(){
        return $this->belongsTo(Author::class,'author_id','id');
    }
}
