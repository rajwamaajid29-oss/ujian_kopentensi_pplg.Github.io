<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
      protected $table = 'bills';

    protected $fillable = [
        'student_id',
        'spp_plan_id',
        'bill_month',
        'bill_amount',
        'bill_status',
    ];


    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function sppPlan()
    {
        return $this->belongsTo(SppPlan::class, 'spp_plan_id', 'id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'bill_id', 'id');
    }
}
