<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\eventBooking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class counterUserController extends Controller
{
    public function index() {

        $date=Carbon::now();
        $events = event::get();

        return view('counter.events',compact('events'));
    }
    public function scan(event $id) {
        $event=$id;
        return view('counter.scan',compact('event'));
    }

    public function verify(Request $request)
    {
        $event=$request->event;
        $user=$request->user;

        $event=eventBooking::where('user_id',$user)->where('event_id',$event)->where('status','Approved')->first();

        if($event)
        {
            $event->join=1;
            $event->update();
          return response()->json(true);
        }
        else{
            return response()->json(false);
        }

    }
}
