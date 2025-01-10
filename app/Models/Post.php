<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    use HasFactory;

    protected $fillable = ['title', 'body', 'member_id'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }
}
