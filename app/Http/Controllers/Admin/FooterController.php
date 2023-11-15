<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Footer;

class FooterController extends Controller
{
    // Auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function footerSettings(){
        $footers = Footer::first();
        return view('admin.theme-options.footer-settings',compact('footers'));
        
    }

    public function footerUpdate(Request $request){
        $foot_id = $request->id;
        $image = $request->file('footer_logo');    
        $old_img = $request->oldimage;

        if($image){
            $name_gen=uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('backend/images/logo/'.$name_gen);
            $save_url = 'backend/images/logo/'.$name_gen;
            if($old_img){
                unlink($old_img);
            }
            $footer = Footer::findOrFail($foot_id);
            $footer->footer_widget_one_title =$request->footer_widget_one_title;
            $footer->footer_logo = $save_url;
            $footer->footer_about_desc =$request->footer_about_desc;
            $footer->footer_widget_two_title =$request->footer_widget_two_title;
            $footer->footer_important_link1_text =$request->footer_important_link1_text;
            $footer->footer_important_link1 =$request->footer_important_link1;
            $footer->footer_important_link2_text =$request->footer_important_link2_text;
            $footer->footer_important_link2 =$request->footer_important_link2;
            $footer->footer_important_link3_text =$request->footer_important_link3_text;
            $footer->footer_important_link3 =$request->footer_important_link3;
            $footer->footer_important_link4_text =$request->footer_important_link4_text;
            $footer->footer_important_link4 =$request->footer_important_link4;
            $footer->footer_important_link5_text =$request->footer_important_link5_text;
            $footer->footer_important_link5 =$request->footer_important_link5;
            $footer->footer_widget_three_title =$request->footer_widget_three_title;
            $footer->footer_address =$request->footer_address;
            $footer->footer_phone =$request->footer_phone;
            $footer->footer_email =$request->footer_email;
            $footer->save();

            $notification = array(
                'message' => 'Footer Updated Successfully',
                'alert-type' => 'success'
            );
              return Redirect()->route('footer.settings')->with($notification);
        }else{
            $footer = Footer::findOrFail($foot_id);
            $footer->footer_widget_one_title =$request->footer_widget_one_title;
            $footer->footer_logo = $old_img;
            $footer->footer_about_desc =$request->footer_about_desc;
            $footer->footer_widget_two_title =$request->footer_widget_two_title;
            $footer->footer_important_link1_text =$request->footer_important_link1_text;
            $footer->footer_important_link1 =$request->footer_important_link1;
            $footer->footer_important_link2_text =$request->footer_important_link2_text;
            $footer->footer_important_link2 =$request->footer_important_link2;
            $footer->footer_important_link3_text =$request->footer_important_link3_text;
            $footer->footer_important_link3 =$request->footer_important_link3;
            $footer->footer_important_link4_text =$request->footer_important_link4_text;
            $footer->footer_important_link4 =$request->footer_important_link4;
            $footer->footer_important_link5_text =$request->footer_important_link5_text;
            $footer->footer_important_link5 =$request->footer_important_link5;
            $footer->footer_widget_three_title =$request->footer_widget_three_title;
            $footer->footer_address =$request->footer_address;
            $footer->footer_phone =$request->footer_phone;
            $footer->footer_email =$request->footer_email;
            $footer->save();

            $notification = array(
                'message' => 'Footer Updated Successfully',
                'alert-type' => 'success'
            );
              return Redirect()->route('footer.settings')->with($notification);
        }
   
    }
}
