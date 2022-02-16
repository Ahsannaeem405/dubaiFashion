<?php

namespace App\Http\Controllers;

use App\Mail\result;
use App\Models\event;
use App\Models\eventBooking;
use App\Models\rsvp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;

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

    public function rsvpSend($id)
    {
        $rsvp=rsvp::find($id);

        $events=eventBooking::where('user_id',$id)->where(function($q) {
            $q->where('send',0)
            ->whereIn('status',['Approved']);
        })->with('event')->get();





        $email=$rsvp->email;

        $rand2 =  rand(00000,99999);
        $idd =  ($id);

        $host="$idd";
        $pdf = \PDF::loadView('pdf.report',compact('host','events','rsvp'));
        $rand= rand(0, 99999999999999);
        $path = 'pdf/';
        $fileName = $rand . '.' . 'pdf' ;
        $pdf->save($path  . $fileName);

        Mail::to($email)->send(new result($rand));


        $events=eventBooking::where('user_id',$id)->where(function($q) {
            $q->where('send',0)
                ->whereIn('status',['Approved']);
        })->update(['send'=>1]);





        return redirect('admin/rsvp')->with('success','Notification send successfully');


    }
}
