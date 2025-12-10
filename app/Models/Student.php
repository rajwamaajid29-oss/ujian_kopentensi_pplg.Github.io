<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'nis',
        'full_name',
        'class',
        'status',
    ];

   
    public function bills()
    {
        return $this->hasMany(Bill::class, 'student_id', 'id');
    }

    // Example: Student has many Payments
    public function payments()
    {
        return $this->hasMany(Payment::class, 'student_id', 'id');
    }
}
