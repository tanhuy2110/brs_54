<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function getTopBooks()
    {
    	return $this->books->sortByDESC('avg_rating')->take(5);
    }
}
