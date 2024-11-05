<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['title'];
    use SoftDeletes;
    public function books(){
        return $this->belongsToMany(Book::class,'category_book_pivot');
    }
}

