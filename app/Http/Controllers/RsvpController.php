<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\eventBooking;
use App\Models\rsvp;
use Illuminate\Http\Request;

class RsvpController extends Controller
{
    public function rsvp()
    {
        $rsvp=rsvp::whereHas('userEvent', function($q) {
                     $q->where('send',0)
                         ->whereIn('status',['pending','Approved']);
        })->get();


        return view('dashboard.rsvp.index',compact('rsvp'));
    }


    public function rsvpFind($id)
    {
        $rsvp=rsvp::find($id);
        $events=eventBooking::where('user_id',$id)->where(function($q) {
            $q->where('send',0)->
            whereIn('status',['pending','Approved']);
        })->with('event')->get();
        $travelling=rsvp::where('parent',$id)->get();
        if($rsvp->parent!=null)
        {
            $parent=rsvp::find($rsvp->parent);
        }
        else{
            $parent=null;
        }


        return view('dashboard.rsvp.rsvpEvent',compact('rsvp','events','travelling','parent'));
    }

    public function rsvpStatus($id,$staus,Request $request)
    {
        if (\request()->post())
        {
         //   dd($request->input());

            $rsvp=eventBooking::find($id);
            $rsvp->status=$staus;
            $rsvp->seat=$request->seatname==null ? $request->seat : $request->seatname;
            $rsvp->update();
            return back()->with('success','Status updated successfully');
        }
        else
        {
            $rsvp=eventBooking::find($id);
            $rsvp->status=$staus;
            $rsvp->update();
            return back()->with('success','Status updated successfully');
        }



    }
}
