<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SppPlan extends Model
{
    protected $table = 'spp_plans';

    protected $fillable = [
        'amount_spp',
        'period_type',
        'academic_year',
    ];

    public function bills()
    {
        return $this->hasMany(Bill::class, 'spp_id', 'id');
    }
}
