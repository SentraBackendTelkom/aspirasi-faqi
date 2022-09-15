<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aspirasi extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'aspirasi';
    protected $fillable = [
        'topic',
        'description',
        'sender_name',
        'lokasi',
        'status',
        'rate',
        'session_id'
    ];
}
