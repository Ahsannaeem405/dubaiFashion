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

    public function send2(Request $request)
    {
        \Session::put('phone',$request->phone);

        \Session::put('verification',true);
        return redirect('/');
    }
    public function send(Request $request)
    {



        try {

            $code=rand(100000, 999999);
            \Session::put('code',$code);
            \Session::put('phone',$request->phone);
            $receiverNumber = $request->phone;
            $message = "Your verification code is $code";

//            $msg=    \Http::
//            withBasicAuth(env('TWELLO_KEY'),env('TWELLO_SECRET'))
//                ->asForm() ->post(env('TWELLO_URL'),[
//                    'To'=>$receiverNumber,
//                    'MessagingServiceSid'=>env('TWELLO_MSGID'),
//                    'Body'=>$message,
//                ]);

            $msg=    \Http::get('https://api.smscountry.com/SMSCwebservice_bulk.aspx?User=arabfashioncouncil&passwd=65934234&mobilenumber='.$receiverNumber.'&message='.$message.'&sid=xxxxxxxx&mtype=N&DR=Y');

            if($msg->successful()!=true)
            {
                $res=json_decode($msg->body());
                return back()->with('error',$res->message);
            }


            return redirect('verify/sms')->with('success','Code send successfully');

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

//            $msg=    \Http::
//            withBasicAuth(env('TWELLO_KEY'),env('TWELLO_SECRET'))
//                ->asForm() ->post(env('TWELLO_URL'),[
//                    'To'=>$phone,
//                    'MessagingServiceSid'=>env('TWELLO_MSGID'),
//                    'Body'=>$message,
//                ]);

            $msg=    \Http::get('https://api.smscountry.com/SMSCwebservice_bulk.aspx?User=arabfashioncouncil&passwd=65934234&mobilenumber='.$phone.'&message='.$message.'&sid=xxxxxxxx&mtype=N&DR=Y');


            if($msg->successful()!=true)
            {
                $res=json_decode($msg->body());
                return back()->with('error',$res->message);
            }

            return back()->with('success','Code Resend successfully');

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
