<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
     protected $fillable = [
        'student_id',
        'spp_plan_id',
        'bill_month',
        'bill_amount',
        'bill_status',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function sppPlan()
    {
        return $this->belongsTo(SppPlan::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
