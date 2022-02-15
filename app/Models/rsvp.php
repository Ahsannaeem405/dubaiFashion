<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rsvp extends Model
{
    use HasFactory;

    public function userEvent()
    {
        return $this->hasMany('App\Models\eventBooking','user_id','id');
    }
}
