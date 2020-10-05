<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    
    protected $fillable = [
        'name',
        'nrp',
        'current_address',
        'origin_address',
        'phone',
        'department',
        'birthdate',
        'year_entry',
        'year_end',
        'guardian_name',
        'guardian_phone',
        'sex',
    ];

    public function small_group()
    {
        return $this->morphToMany(SmallGroup::class, 'small_groupable')
            ->withPivot('is_leader')->withTimestamps();
    }
}
