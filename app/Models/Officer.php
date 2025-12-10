<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{


    protected $table = 'officers';

    protected $fillable = [
        'names_officer',
        'username',
        'password',
        'phone_numbers',
        'email',
    ];

   
    public function payments()
    {
        return $this->hasMany(Payment::class, 'officer_id', 'id');
    }
}
