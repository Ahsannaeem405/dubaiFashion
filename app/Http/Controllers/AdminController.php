<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\eventBooking;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user=User::where('role','admin')->count();
        $event=event::all()->count();
        $booking=eventBooking::all()->count();
        $counter=User::where('role','counter')->count();
        return view('dashboard.index',compact('user','event','booking','counter'));
    }

    public function setting()
    {
$setting=Setting::first();
        return view('dashboard.setting',compact('setting'));
    }


    public function settingupdate(Request $request)
    {
        $setting=Setting::first();
        $setting->heading=$request->heading;
        $setting->update();
        return back()->with('success','setting updated successfully');
    }


}
