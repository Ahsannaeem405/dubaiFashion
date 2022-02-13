<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Exception;

class VerificationController extends Controller
{

    public function verifysms(){
        return view('verify.verify');
    }
    public function send(Request $request)
    {




        try {

            $basic  = new \Vonage\Client\Credentials\Basic(env('NEXMO_KEY'), env('NEXMO_SECRET'));
            $client = new \Vonage\Client($basic);


            $code=rand(100000, 999999);


            \Session::put('code',$code);
            \Session::put('phone',$request->phone);

            $receiverNumber = $request->phone;
            $message = "Your verification code is $code";

            $data= $client->message()->send([
                'to' => $receiverNumber,
                'from' => 'Gigli',
                'text' => $message
            ]);


            return redirect('verify/sms')->with('success','code send successfully');

        } catch (\Exception $e) {

            return back()->with('error',$e->getMessage());
            //echo ("Error: ". $e->getMessage());
        }


    }

    public function resend(Request $request)
    {



        try {

            $basic  = new \Vonage\Client\Credentials\Basic(env('NEXMO_KEY'), env('NEXMO_SECRET'));
            $client = new \Vonage\Client($basic);


            $code=rand(100000, 999999);


            \Session::put('code',$code);
            $phone=  \Session::get('phone');

            $receiverNumber = $request->phone;
            $message = "Your verification code is $code";

            $data= $client->message()->send([
                'to' => $phone,
                'from' => 'Gigli',
                'text' => $message
            ]);

            return back()->with('success','code Resend successfully');

        } catch (\Exception $e) {

            return back()->with('error',$e->getMessage());
            //echo ("Error: ". $e->getMessage());
        }


    }

    public function verify(Request $request){
        $code=\Session::get('code');
      //  dd($code);
        if ($code==$request->code)
        {
            \Session::put('verification',true);
            return redirect('/')->with('success','verification successfully');
        }

        else
        {
            return back()->with('error','invalid code');
        }

    }
}
