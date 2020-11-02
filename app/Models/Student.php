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
        'avatar',
        'department',
        'birthdate',
        'year_entry',
        'year_end',
        'guardian_name',
        'guardian_phone',
        'sex',
    ];

    public function smallGroups()
    {
        return $this->morphToMany(SmallGroup::class, 'small_groupable')
            ->withPivot('is_leader')->withTimestamps();
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function meetings()
    {
        return $this->morphMany(Meeting::class, 'creator');
    }

    public function attendedMeetings()
    {
        return $this->morphMany(Attendant::class, 'attendee');
    }

    public function profileId()
    {
        return $this->morphOne('App\Models\ProfileId', 'model');
    }
}
