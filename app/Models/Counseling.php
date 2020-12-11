<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counseling extends Model
{
    use HasFactory;

    protected $table = 'counselings';

    protected $fillable = [
        'nrp',
        'counselee_contact',
        'counselor_id',
    ];

    public function counselor()
    {
        return $this->belongsTo(Counselor::class);
    }
}
