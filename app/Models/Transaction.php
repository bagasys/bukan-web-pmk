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
        'note'
    ];
}
