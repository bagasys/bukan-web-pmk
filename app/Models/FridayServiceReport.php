<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FridayServiceReport extends Model
{
    use HasFactory;

    protected $table = 'friday_service_reports';

    protected $fillable = [
        'title',
        'speaker',
        'date',
        'content',
        'image',
    ];

    public function getImageAttribute($value)
    {
        if ($value) {
            return asset('storage/fridayservicereports/'.$value);
        } else {
            return asset('/images/default-avatar.jpg');
        }
    }
}
