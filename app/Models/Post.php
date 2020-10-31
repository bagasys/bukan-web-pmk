<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'category',
        'content',
        'author',
        'image',
    ];

    public function getImageAttribute($value)
    {
        if ($value) {
            return asset('storage/posts/'.$value);
        } else {
            return asset('/images/default-avatar.jpg');
        }
    }
}
