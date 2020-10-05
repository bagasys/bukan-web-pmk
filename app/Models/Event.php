<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'title',
        'description',
        'type',
        'start',
        'end',
        'slug',
        'attendant_count',
        'report',
        'creator_id',
        'creator_type'
    ];

    public function creator()
    {
        return $this->morphTo();
    }

}
