<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;

    protected $table = 'meetings';

    protected $fillable = [
        'title',
        'description',
        'type',
        'start',
        'end',
        'slug',
        'attendant_count',
        'report',
        'user_id',
        'creator_name',
        'forStudent',
        'forAlumni',
        'forLecturer',
        'forPublic',
        'location',
        'image',
    ];

    /**
     * @var false|mixed|string
     */
    public function creator()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getImageAttribute($value)
    {
        if ($value) {
            return asset('storage/meetings/'.$value);
        } else {
            return asset('/images/default-avatar.jpg');
        }
    }

    public function countAttendant()
    {
        $meeting_attendant = Meeting::where(['id' => $this->id])->count();

        return $meeting_attendant;
    }
}
