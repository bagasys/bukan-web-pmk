<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $table = 'lecturers';

    protected $fillable = [
        'name',
        'nid',
        'department',
        'sex',
        'address',
        'email',
        'phone',
    ];

    public function smallGroup()
    {
        return $this->morphToMany(SmallGroup::class, 'small_groupable')->withPivot('is_leader');;
    }
}
