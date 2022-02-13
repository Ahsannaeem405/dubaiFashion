<?php

namespace App\Http\Controllers;

use App\Models\User;
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

            $status = \Session::get('verification');
        $phone = \Session::get('phonestep');
        $num = \Session::get('phone');
        if ($status == true and $phone == true) {

            return view('welcome',compact('num'));
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
