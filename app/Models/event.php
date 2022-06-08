<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    public function eventBook()
    {
        $search= \Session::get('array_data');
        return $this->hasMany('App\Models\eventBooking','event_id','id')->
        where(function ($q) use ($search){
            foreach ($search as $value) {
                $q->orwhere('user_id',$value);
            }
       });
    }

    public function seat()
    {
        return $this->hasMany(seat::class,'event_id');
    }

    public function booking()
    {
        return $this->hasMany(eventBooking::class,'event_id');
    }

    public function members()
    {
        return $this->hasMany(eventBooking::class,'event_id')->where('status','Approved');
    }

    public function joinmember()
    {
        return $this->hasMany(eventBooking::class,'event_id')->where('join',1);
    }

}
