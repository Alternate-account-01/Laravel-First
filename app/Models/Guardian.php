<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    /** @use HasFactory<\Database\Factories\GuardianFactory> */
    use HasFactory;
    protected $fillable = [
        'nama',
        'job',
        'phone_number',
        'email',
        'address',
    ];
}
