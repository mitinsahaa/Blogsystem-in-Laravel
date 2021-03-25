<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Blog extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = [
        'blogtitle','blogcontent','category','author','comments','slug','image',
    ];
    public function comments()
    {
        return $this->hasMany('App\Models\Comment')->orderBy('created_at','desc');
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'blogtitle'
            ]
        ];
    }
}
