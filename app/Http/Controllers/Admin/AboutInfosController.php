<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\AboutInfo;

class AboutInfosController extends Controller
{
    // Auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function aboutSettings(){
        $about = AboutInfo::first();
        return view('admin.theme-options.about-info',compact('about'));
        
    }

    public function aboutUpdate(Request $request){
        $abt_id = $request->id;
        $image = $request->file('section_one_img');    
        $old_img = $request->oldimage;

        if($image){
            $name_gen=uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('frontend/assets/images/pages/'.$name_gen);
            $save_url = 'frontend/assets/images/pages/'.$name_gen;
            if($old_img){
                unlink($old_img);
            }
            $aboutInfo = AboutInfo::findOrFail($abt_id);
            $aboutInfo->section_one_title =$request->section_one_title;
            $aboutInfo->section_one_desc =$request->section_one_desc;
            $aboutInfo->section_one_btn_text =$request->section_one_btn_text;
            $aboutInfo->section_one_btn_link =$request->section_one_btn_link;
            $aboutInfo->section_one_img = $save_url;

            $aboutInfo->vision_title =$request->vision_title;
            $aboutInfo->vision =$request->vision;

            $aboutInfo->serve_sec_title =$request->serve_sec_title;

            $aboutInfo->serve_icon_one =$request->serve_icon_one;
            $aboutInfo->serve_title_one =$request->serve_title_one;
            $aboutInfo->serve_desc_one =$request->serve_desc_one;

            $aboutInfo->serve_icon_two =$request->serve_icon_two;
            $aboutInfo->serve_title_two =$request->serve_title_two;
            $aboutInfo->serve_desc_two =$request->serve_desc_two;

            $aboutInfo->serve_icon_three =$request->serve_icon_three;
            $aboutInfo->serve_title_three =$request->serve_title_three;
            $aboutInfo->serve_desc_three =$request->serve_desc_three;

            $aboutInfo->serve_icon_four =$request->serve_icon_four;
            $aboutInfo->serve_title_four =$request->serve_title_four;
            $aboutInfo->serve_desc_four =$request->serve_desc_four;

            $aboutInfo->activities_title =$request->activities_title;
            $aboutInfo->activities_description =$request->activities_description;
            
            $aboutInfo->save();

            $notification = array(
                'message' => 'About Information Updated Successfully',
                'alert-type' => 'success'
            );
              return Redirect()->route('about.settings')->with($notification);
        }else{
            $aboutInfo = AboutInfo::findOrFail($abt_id);
            
            $aboutInfo->section_one_title =$request->section_one_title;
            $aboutInfo->section_one_desc =$request->section_one_desc;
            $aboutInfo->section_one_btn_text =$request->section_one_btn_text;
            $aboutInfo->section_one_btn_link =$request->section_one_btn_link;
            $aboutInfo->section_one_img = $old_img;

            $aboutInfo->vision_title =$request->vision_title;
            $aboutInfo->vision =$request->vision;

            $aboutInfo->serve_sec_title =$request->serve_sec_title;

            $aboutInfo->serve_icon_one =$request->serve_icon_one;
            $aboutInfo->serve_title_one =$request->serve_title_one;
            $aboutInfo->serve_desc_one =$request->serve_desc_one;

            $aboutInfo->serve_icon_two =$request->serve_icon_two;
            $aboutInfo->serve_title_two =$request->serve_title_two;
            $aboutInfo->serve_desc_two =$request->serve_desc_two;

            $aboutInfo->serve_icon_three =$request->serve_icon_three;
            $aboutInfo->serve_title_three =$request->serve_title_three;
            $aboutInfo->serve_desc_three =$request->serve_desc_three;

            $aboutInfo->serve_icon_four =$request->serve_icon_four;
            $aboutInfo->serve_title_four =$request->serve_title_four;
            $aboutInfo->serve_desc_four =$request->serve_desc_four;

            $aboutInfo->activities_title =$request->activities_title;
            $aboutInfo->activities_description =$request->activities_description;
            
            $aboutInfo->save();

            $notification = array(
                'message' => 'About Information Updated Successfully',
                'alert-type' => 'success'
            );
              return Redirect()->route('about.settings')->with($notification);
        }
   
    }
}
