<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Review;
use App\Models\User;

class Comments extends Model
{
    protected $fillable = [
        'user_id',
        'review_id',
        'text_comment',
    ];

    public function review()
    {
        return $this->belongsTo(Review::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
