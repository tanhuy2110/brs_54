<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Relationship;
use App\Models\Book;
use App\Models\Comment;
use App\Models\Review;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
        'status',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function role()
    {
        return $this->role;
    }

    public function setPasswordAttribute($pass)
    {
        $this->attributes['password'] = bcrypt($pass);
    }
    
    public function followers()
    {
        return $this->hasMany(Relationship::class);
    }

    public function followings()
    {
        return $this->hasMany(Relationship::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function bookRequests()
    {
        return $this->belongsToMany(Book::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
    
}
