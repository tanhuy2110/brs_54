<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Relationship extends Model
{
    protected $fillable = [
        'user_id',
        'follower',
        'following',
    ];
    
    public function relationship()
    {
        return $this->belongsTo(User::class);
    }

}
