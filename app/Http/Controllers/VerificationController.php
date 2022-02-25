<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Exception;
use Twilio\Rest\Client;

class VerificationController extends Controller
{

    public function verifysms(){
        return view('verify.verify');
    }
    public function send(Request $request)
    {




        try {




            $code=rand(100000, 999999);


            \Session::put('code',$code);
            \Session::put('phone',$request->phone);

            $receiverNumber = $request->phone;
            $message = "Your verification code is $code";

            $msg=    \Http::
            withBasicAuth(env('TWELLO_KEY'),env('TWELLO_SECRET'))
                ->asForm() ->post('https://api.twilio.com/2010-04-01/Accounts/ACd3ad0905b6eb4ccff2bb0e90c926485a/Messages.json',[
                    'To'=>$receiverNumber,
                    'MessagingServiceSid'=>env('TWELLO_MSGID'),
                    'Body'=>$message,
                ]);


            if($msg->successful()!=true)
            {
                $res=json_decode($msg->body());
                return back()->with('error',$res->message);
            }


            return redirect('verify/sms')->with('success','code send successfully');

        } catch (\Exception $e) {

            return back()->with('error',$e->getMessage());
            //echo ("Error: ". $e->getMessage());
        }


    }

    public function resend(Request $request)
    {



        try {

            $code=rand(100000, 999999);


            \Session::put('code',$code);
            $phone=  \Session::get('phone');


            $message = "Your verification code is $code";

            $msg=    \Http::
            withBasicAuth(env('TWELLO_KEY'),env('TWELLO_SECRET'))
                ->asForm() ->post('https://api.twilio.com/2010-04-01/Accounts/ACd3ad0905b6eb4ccff2bb0e90c926485a/Messages.json',[
                    'To'=>$phone,
                    'MessagingServiceSid'=>env('TWELLO_MSGID'),
                    'Body'=>$message,
                ]);



            if($msg->successful()!=true)
            {
                $res=json_decode($msg->body());
                return back()->with('error',$res->message);
            }

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
