<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\WhyChoose;

class WhyChoosController extends Controller
{
    // Auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function chooses(){
        $chooses = WhyChoose::first();
        return view('admin.theme-options.home-choose', compact('chooses'));
        
    }

    public function chooseUpdate(Request $request){
        $choos_id = $request->id;
        $image = $request->file('choose_sec_img');    
        $old_img = $request->oldimage;

        if($image){
            $name_gen=uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('frontend/assets/images/pages/'.$name_gen);
            $save_url = 'frontend/assets/images/pages/'.$name_gen;
            if($old_img){
                unlink($old_img);
            }
            $choosUs = WhyChoose::findOrFail($choos_id);
            $choosUs->choose_sec_title =$request->choose_sec_title;
            $choosUs->description =$request->description;
            $choosUs->choose_sec_img = $save_url;

            $choosUs->save();

            $notification = array(
                'message' => 'About Information Updated Successfully',
                'alert-type' => 'success'
            );
              return Redirect()->route('about.settings')->with($notification);
        }else{
            $choosUs = WhyChoose::findOrFail($choos_id);
            
            $choosUs->choose_sec_title =$request->choose_sec_title;
            $choosUs->description =$request->description;
            $choosUs->choose_sec_img = $old_img;
            
            $choosUs->save();

            $notification = array(
                'message' => 'Information Updated Successfully',
                'alert-type' => 'success'
            );
              return Redirect()->route('chooses')->with($notification);
        }
   
    }

    
}
