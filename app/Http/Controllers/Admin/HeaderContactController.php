<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeaderContact;

class HeaderContactController extends Controller
{
    // Auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function HeaderSettings(){
        $data = HeaderContact::first();
        return view('admin.theme-options.header',compact('data'));
        
    }

    public function HeaderUpdate(Request $request){
        $thead_id = $request->id;
        
        $thead = HeaderContact::findOrFail($thead_id);
        $thead->top_mobile_text =$request->top_mobile_text;
        $thead->top_mobile_no =$request->top_mobile_no;
        $thead->top_email_text =$request->top_email_text;
        $thead->top_email =$request->top_email;
        $thead->top_open_text =$request->top_open_text;
        $thead->top_open_time =$request->top_open_time;
        
        $thead->save();

        $notification = array(
            'message' => 'Top Header Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('header.settings')->with($notification);
    }
}
