<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Mark;
use App\Models\Category;
use App\Models\Review;
use App\Models\Rate;

class Book extends Model
{
    protected $fillable =[
        'category_id',
        'title',
        'author',
        'number_page',
        'image',
        'description',
        'avg_rating',
        'public_date',
    ];
    protected $date = [
        'public_date',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function rating()
    {
        return $this->hasMany(Rate::class);
    }

    public function marks()
    {
        return $this->hasMany(Mark::class);
    }
    
    public function updateAvgRating()
    {
        $this->avg_rating = $this->rates->avg('point');
        $this->save;
    }
}
