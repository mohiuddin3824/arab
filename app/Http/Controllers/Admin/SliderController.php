<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    // Auth
    public function __construct()
    {
       $this->middleware('auth');
    }

    //Get Sliders
        public function sliders(){
        $sliders = Slider::latest()->orderBy('id', 'DESC')->get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function createSlider(){
        return view('admin.slider.create');
    }

    //Store Slider
    public function storeSlider(Request $request){
        $request->validate([
            'slider_title' => 'required',
            'slider_photo' => 'required',
        ]);

        $image = $request->file('slider_photo');
        
        if($image){
            
            $name_gen=uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('frontend/assets/images/slider/'.$name_gen);
            $save_url = 'frontend/assets/images/slider/'.$name_gen;

            Slider::create([
                'user_id' => Auth::id(),
                'slider_title' =>$request->slider_title,
                'slider_slug' =>str_replace(' ', '-', strtolower($request->slider_title) ),
                'slider_caption' =>$request->slider_caption,
                'slider_btn_text' =>$request->slider_btn_text,
                'slider_btn_link' =>$request->slider_btn_link,
                'slider_video_link' =>$request->slider_video_link,
                'slider_photo' =>$save_url,
                
                'created_at' => Carbon::now(),
            ]);
        }else{
            Slider::create([
                'user_id' => Auth::id(),
                'slider_title' =>$request->slider_title,
                'slider_slug' =>str_replace(' ', '-', strtolower($request->slider_title) ),
                'slider_caption' =>$request->slider_caption,
                'slider_btn_text' =>$request->slider_btn_text,
                'slider_btn_link' =>$request->slider_btn_link,
                'slider_video_link' =>$request->slider_video_link,
                
                'created_at' => Carbon::now(),
            ]);
        }

        $notification = array(
            'message' => 'Slider Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.sliders')->with($notification);
    }

    
    //Edit Committee Members
    public function editSlider($sl_id){
        $editSlider = Slider::findOrFail($sl_id);
        return view('admin.slider.edit', compact('editSlider'));
    }

    //Update Committee Members
   public function updateSlider(Request $request){
  

    $sl_id = $request->id;
    $image = $request->file('slider_photo');
    $oldimage = $request->oldimage;
        
        if($image){
            
            $name_gen=uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('frontend/assets/images/slider/'.$name_gen);
            $save_url = 'frontend/assets/images/slider/'.$name_gen;

            if($oldimage){
                unlink($oldimage);
            }

            Slider::findOrFail($sl_id)->update([
                'user_id' => Auth::id(),
                'slider_title' =>$request->slider_title,
                'slider_slug' =>$request->slider_title,
                'slider_caption' =>$request->slider_caption,
                'slider_btn_text' =>$request->slider_btn_text,
                'slider_btn_link' =>$request->slider_btn_link,
                'slider_video_link' =>$request->slider_video_link,
                'slider_photo' =>$save_url,
                
                'created_at' => Carbon::now(),
            ]);
        }else{
            Slider::findOrFail($sl_id)->update([
                'user_id' => Auth::id(),
                'slider_title' =>$request->slider_title,
                'slider_slug' =>$request->slider_slug,
                'slider_caption' =>$request->slider_caption,
                'slider_btn_text' =>$request->slider_btn_text,
                'slider_btn_link' =>$request->slider_btn_link,
                'slider_video_link' =>$request->slider_video_link,
                'slider_photo' =>$oldimage,
                
                'created_at' => Carbon::now(),
            ]);
        }

    $notification = array(
        'message' => 'Slider Updated Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.sliders')->with($notification);  
       
   }

   //SoftDdelete Slider
   public function trashSlider($id){
    Slider::find($id)->delete();

        $notification = array(
            'message' => 'Slider Trashed!',
            'alert-type' => 'info'
        );

        return redirect()->route('all.sliders')->with($notification);
    }

    //Trashed Sliders
   public function trashedSliders(){
        $trashedSliders = Slider::onlyTrashed()->get();
        return view('admin.slider.trashed', compact('trashedSliders'));
    }

    //Restore Committee Category
    public function restoreSlider($id){
        Slider::withTrashed()->findOrFail($id)->restore();
        $notification = array(
            'message' => 'Slider Re-Stored Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.sliders')->with($notification);
    }

    //Permanent Delete Slider
    public function deleteSlider($id){
        
        $post = DB::table('sliders')->where('id',$id)->first();
        if($post->slider_photo){
            unlink($post->slider_photo);
        }

        Slider::onlyTrashed()->findOrFail($id)->forceDelete();

        $notification = array(
            'message' => 'Slider Deleted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
