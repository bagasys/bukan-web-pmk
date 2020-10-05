<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmallGroup extends Model
{
    use HasFactory;

    protected $table = 'small_groups';

    public function students()
    {
        return $this->morphedByMany(Student::class, 'small_groupable')
            ->withPivot('is_leader');
    }

    public function lecturers()
    {
        return $this->morphedByMany(Lecturer::class, 'small_groupable')
            ->withPivot('is_leader');
    }
}
