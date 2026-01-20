<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $table = 'students';

    protected $with = ['classroom'];
    protected $fillable = [
        'nama',
        'date_of_birth',
        'classroom_id',
        'email',
        'address',
    ];
    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }
}
