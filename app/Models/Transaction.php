<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'lecturer_id',
        'student_id',
        'alumni_id',
        'sender_name',
        'sender_account',
        'send_date',
        'receiver_account',
        'wallet',
        'status',
        'verified_by',
        'verified_date',
        'proof',
        'amount',
        'note',
    ];
//
//    protected $casts = [
//        'send_date' => 'date',
//        'verified_date' => 'date',
//    ];

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function alumni()
    {
        return $this->belongsTo(Alumni::class);
    }

    public function getProofAttribute($value)
    {
        if ($value) {
            return asset('storage/transactions/'.$value);
        } else {
            return asset('/images/default-avatar.jpeg');
        }
    }
}
