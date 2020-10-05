<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumnis';

    protected $fillable = [
        'user_id',
        'name',
        'department',
        'job',
        'sex',
        'address',
        'avatar',
        'year_entry',
        'year_exit',
        'year_end',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

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

    public function attendedEvents()
    {
        return $this->morphMany(Attendant::class, 'attendees');
    }
}
