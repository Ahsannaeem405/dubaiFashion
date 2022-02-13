<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $status = \Session::get('verification');
        $phone = \Session::get('phonestep');
        $num = \Session::get('phone');
        if ($status == true and $phone == true) {
            return view('welcome');
        }
        elseif ($status == true) {

            return view('verify.phone',compact('num'));
        }


        return view('verify.index');


    }

    public function final(Request $request)
    {

        $phone = \Session::put('phonestep',true);
        $phone = \Session::put('phone',$request->phone);


return redirect('/');
    }
}
