<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CounterController extends Controller
{
    public function index()
    {
        $counter=User::where('role','counter')->get();
        return view('dashboard.counter.index',compact('counter'));
    }

    public function add()
    {
        return view('dashboard.counter.add');
    }

    public function store(Request $request)
    {
        $stu=new User();
        $stu->f_name=$request->f_name;
        $stu->l_name=$request->l_name;
        $stu->email=$request->email;
        $stu->phone=$request->phone;
        if($request->password!=null)
        {
            $stu->password=Hash::make($request->password);
        }

        $stu->about=$request->about;
        $stu->address=$request->address;
        $stu->role='counter';
        $stu->save();
        return back()->with('success','Counter added successfully');
    }

    public function delete($id)
    {
        $counter=User::find($id)->delete();
        return back()->with('success','Counter deleted successfully');


    }

    public function edit($id)
    {
        $counter=User::find($id);
return view('dashboard.counter.edit',compact('counter'));


    }

    public function update($id,Request $request)
    {
        $stu=User::find($id);

        $stu->f_name=$request->f_name;
        $stu->l_name=$request->l_name;
        $stu->email=$request->email;
        $stu->phone=$request->phone;
        if($request->password!=null)
        {
          $stu->password=Hash::make($request->password);
        }
        $stu->about=$request->about;
        $stu->address=$request->address;
        $stu->role='counter';
        $stu->save();
        return back()->with('success','Counter updated successfully');

    }



}
