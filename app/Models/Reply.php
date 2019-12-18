<?php


namespace App\Models;


class Reply extends Model
{
    protected $fillable = [
        'title', 'body', 'category_id', 'excerpt', 'slug'
    ];

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}