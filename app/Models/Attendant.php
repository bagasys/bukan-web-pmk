<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendant extends Model
{
    use HasFactory;

    protected $table = 'attendants';

    protected $fillable = [
        'event_id',
        'origin',
        'name',
        'nrp',
        'nid',
        'username',
    ];

    public function attendee()
    {
        return $this->morphTo();
    }
}
