<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $fillable=['title','body'];
    use SoftDeletes;
    public function author(){
        return $this->belongsTo(Author::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class,'category_book_pivot');
    }
}
