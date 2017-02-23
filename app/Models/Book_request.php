<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book_request extends Model
{
    protected $fillable = [
        'user_id',
        'book_id',
        'accepted',
    ];
    
}
