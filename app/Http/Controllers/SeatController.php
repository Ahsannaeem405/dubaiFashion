<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function seat($id)
    {
        $seats=seat::where('event_id',$id)->get();
        return view('dashboard.event.seat.index',compact('seats','id'));
    }
    public function addSeat(Request $request,$id)
    {

        $seat=new seat();
        $seat->seat=$request->name;
        $seat->event_id=$id;
        $seat->save();
        return back()->with('success','Seat save successfully');

    }



    public function delSeat($id)
    {
        $seat=seat::find($id)->delete();
        return back()->with('success','Seat deleted successfully');


    }

    public function updateSeat(Request $request,$id)
    {

        $seat=seat::find($id);
        $seat->seat=$request->name;
        $seat->save();
        return back()->with('success','Seat updated successfully');

    }
}
