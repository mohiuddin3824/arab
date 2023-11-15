<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\HomeService;

class HomeServiceController extends Controller
{
    // Auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function hServices(){
        $hservices = HomeService::first();
        return view('admin.theme-options.home-services', compact('hservices'));
        
    }

    public function hServiceUpdate(Request $request){
        $serv_id = $request->id;

        $hservices = HomeService::findOrFail($serv_id);


        $hservices->serve_sec_title =$request->serve_sec_title;

        $hservices->serve_icon_one =$request->serve_icon_one;
        $hservices->serve_title_one =$request->serve_title_one;
        $hservices->serve_desc_one =$request->serve_desc_one;
        $hservices->serve_btn_one_txt =$request->serve_btn_one_txt;
        $hservices->serve_btn_one_link =$request->serve_btn_one_link;

        $hservices->serve_icon_two =$request->serve_icon_two;
        $hservices->serve_title_two =$request->serve_title_two;
        $hservices->serve_desc_two =$request->serve_desc_two;
        $hservices->serve_btn_two_txt =$request->serve_btn_two_txt;
        $hservices->serve_btn_two_link =$request->serve_btn_two_link;

        $hservices->serve_icon_three =$request->serve_icon_three;
        $hservices->serve_title_three =$request->serve_title_three;
        $hservices->serve_desc_three =$request->serve_desc_three;
        $hservices->serve_btn_three_txt =$request->serve_btn_three_txt;
        $hservices->serve_btn_three_link =$request->serve_btn_three_link;

        $hservices->serve_icon_four =$request->serve_icon_four;
        $hservices->serve_title_four =$request->serve_title_four;
        $hservices->serve_desc_four =$request->serve_desc_four;
        $hservices->serve_btn_four_txt =$request->serve_btn_four_txt;
        $hservices->serve_btn_four_link =$request->serve_btn_four_link;

        
        $hservices->save();

        $notification = array(
            'message' => 'Home page Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('home.services')->with($notification);
        
   
    }


}
