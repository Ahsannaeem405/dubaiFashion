<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\eventBooking;
use App\Models\rsvp;
use App\Models\seat;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

//        $search=[1,2,5];
//        $user=User::where(function ($q) use ($search){
//            foreach ($search as $key=>$value) {
//                $q->where('id',$value);
//            }
//        })->toSql();
//        dd($user);
//\Session::flush();

        $num = \Session::get('phone');
            $status = \Session::get('verification');

        $phone = \Session::get('phonestep');
        $step1 = \Session::get('step1');
        $email = \Session::get('email');
        $emailStep = \Session::get('emailStep');

        $submit = \Session::get('submitionstep');
        $date=Carbon::now();
        $search= \Session::get('array_data');
        $heading= Setting::first();

        if ($status == true and $phone == true && $submit == true) {
            $events = event::with('eventBook')->whereDate('start','>=',$date)->get()->groupBy('start');
          //  return view('welcome',compact('num','heading'));
            return view('events',compact('events','search'));
        }

        if ($status == true and $phone == true) {

            return view('welcome',compact('num','heading'));
        }
        elseif ($step1 == true and $phone == true)
        {
//email write


        }
        elseif ($step1 == true) {


            return view('verify.phone',compact('num'));
        }


       // return view('welcome',compact('num','heading'));

        return view('verify.index');


    }

    public function final(Request $request)
    {

        if ($request->types=='yes')
        {
            $phone = \Session::put('phone',$request->phone);
        }
        else{
            $phone = \Session::put('phone',$request->phonecode.$request->phone2);
        }
        $phone = \Session::put('phonestep',true);



return redirect('/');
    }

    public function submit(Request $request)
    {

        $data=array();
  for ($i=0; $i<count($request->fname);$i++)
  {

      $revps=rsvp::where('email',$request->email[$i])->first();

      if (!$revps)
      {

      $revps=new rsvp();
      $revps->f_name=$request->fname[$i];
      $revps->l_name=$request->lname[$i];
      $revps->f_name=$request->fname[$i];
      $revps->email=$request->email[$i];
      $revps->phone=$request->phone[$i];
      $revps->insta=$request->insta[$i];
      $revps->linkedin=$request->linkedin[$i];
      $revps->category=$request->cat[$i];
      $revps->code=$request->code[$i];
      $revps->company=$request->company[$i];

      if ($i==0)
      {   $revps->save();
          $id=$revps->id;
      }
      if ($i!=0)
      {
          $revps->parent=$id;
          $revps->save();
      }

      }
      else{
          if ($i==0)
          {
              $id=$revps->id;
          }
      }


          array_push($data,$revps->id);



  }



 $arr= \Session::put('array_data',$data);
 $arr= \Session::get('array_data');

  \Session::put('submitionstep',true);
  return redirect('/');

    }


    public function submitevent(Request $request)    {
        $arr= \Session::get('array_data');
if($request->eventId==null)
{

    return back()->with('error','PLEASE SELECT EVENT FOR BOOKING');
}
else{
    foreach ($request->eventId as $eve)
    {

        foreach ($arr as $user)
        {
            $find=eventBooking::where('user_id',$user)->where('event_id',$eve)->first();
            if (!$find)
            {
                $event=new eventBooking();
                $event->event_id=$eve;
                $event->user_id=$user;
                $event->save();
            }

        }
    }

    \Session::flush();
    return redirect('/')->with('success','THANK YOU FOR REGISTERING');
}



    }


}
