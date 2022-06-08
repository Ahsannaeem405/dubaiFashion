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
        $event->title=$request->title;


        $filenamefinal=null;
        if ($request->hasFile('image'))
        {
            foreach  ($request->image as  $imagefile) {
                $file = $imagefile;
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $filename = $file->getClientOriginalName().time().'.' . $extension;
                $file->move('uploads/appsetting/', $filename);
//dd($filename);
                $filenamefinal=$filenamefinal.$filename.',';

            }
        }

        $event->image = $filenamefinal;
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

        $event->title=$request->title;


        $filenamefinal=null;
if ($request->hasFile('image'))
{
        foreach  ($request->image as  $imagefile) {
            $file = $imagefile;
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $file->getClientOriginalName().time().'.' . $extension;
            $file->move('uploads/appsetting/', $filename);
//dd($filename);
            $filenamefinal=$filenamefinal.$filename.',';

        }
    $event->image = $filenamefinal;
        }


        $event->start=$request->start;
        $event->starttime=$request->starttime;
        $event->endtime=$request->endtime;

        $event->save();
        return back()->with('success','Event updated successfully');

    }


    public function eventHistory(){
        $events=event::withCount('joinmember')->get();

return view('dashboard.eventHistory.index',compact('events'));
    }

    public function eventHistoryfind($id)
    {

        $event=event::with('booking')->find($id);


        return view('dashboard.eventHistory.history',compact('event'));


    }


}
