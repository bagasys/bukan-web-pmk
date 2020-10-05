<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counseling extends Model
{
    use HasFactory;

    protected $table = 'counselings';

    protected $fillable = [
        'counselor_id',
        'counselee_name',
        'counselee_contact',  
    ];
}
