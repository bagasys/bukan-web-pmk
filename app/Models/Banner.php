<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banners';

    protected $fillable = [
        'image',
        'title',
        'subtitle',
        'description',
    ];

    public function getImageAttribute($value)
    {
        if ($value) {
            return asset('storage/banners/'.$value);
        } else {
            return asset('/images/default-avatar.jpeg');
        }
    }
}
