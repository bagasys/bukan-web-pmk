<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SmallGroup extends Model
{
    use HasFactory;

    protected $table = 'small_groups';

    protected $fillable = [
        //
    ];

    public function lecturers()
    {
        return $this->morphedByMany(Lecturer::class, 'small_groupable')->withPivot('is_leader');;
    }

    public function students()
    {
        return $this->morphedByMany(Student::class, 'small_groupable')->withPivot('is_leader');;
    }
}
