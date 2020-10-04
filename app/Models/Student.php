<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'nrp',
        'name',
        'department',
        'sex',
        'birth_date',
        'phone',
        'current_address',
        'origin_address',
        'guardian_name',
        'guardian_phone',
        'year_entry',
        'year_graduate',
    ];

    public function smallGroup()
    {
        return $this->morphToMany(SmallGroup::class, 'small_groupable')->withPivot('is_leader');
    }
}
