<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event()
    {
        $events=event::all();
        return view('dashboard.event.index',compact('events'));
    }
    public function addEvent(Request $request)
    {

        $event=new event();
        $event->name=$request->name;
        $event->desc=$request->desc;



        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time().'.' . $extension;
            $file->move('uploads/appsetting/', $filename);

            $event->image = $filename;

        }
        $event->start=$request->start;
        $event->starttime=$request->starttime;
        $event->endtime=$request->endtime;

        $event->save();
        return back()->with('success','Event save successfully');

    }



    public function delEvent($id)
    {
        $event=event::find($id)->delete();
        return back()->with('success','Event deleted successfully');


    }

    public function updateEvent(Request $request,$id)
    {

        $event=event::find($id);
        $event->name=$request->name;
        $event->desc=$request->desc;



        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time().'.' . $extension;
            $file->move('uploads/appsetting/', $filename);

            $event->image = $filename;

        }
        $event->start=$request->start;
        $event->starttime=$request->starttime;
        $event->endtime=$request->endtime;

        $event->save();
        return back()->with('success','Event updated successfully');

    }


}
