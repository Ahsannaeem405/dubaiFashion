<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventBooking extends Model
{
    use HasFactory;

    public function event()
    {
        return $this->belongsTo(event::class,'event_id','id');
    }

    public function user()
    {
        return $this->belongsTo(rsvp::class,'user_id','id');
    }
}
