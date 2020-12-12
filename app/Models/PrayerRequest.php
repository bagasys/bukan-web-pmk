<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrayerRequest extends Model
{
    use HasFactory;

    protected $table = 'prayer_requests';

    protected $fillable = [
        'nrp',
        'name',
        'prayer_content',
        'status',
    ];
}
