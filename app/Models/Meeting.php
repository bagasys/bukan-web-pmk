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
        'creator_id',
        'creator_type',
    ];
    /**
     * @var false|mixed|string
     */

    public function creator()
    {
        return $this->morphTo();
    }
}
