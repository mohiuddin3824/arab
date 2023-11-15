<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteIdentity;
use Intervention\Image\Facades\Image;

class SiteIdentityController extends Controller
{
    // Auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function siteIdentitySettings(){
        $siteidentity = SiteIdentity::first();
        return view('admin.theme-options.site-identity',compact('siteidentity'));
        
    }

    public function siteIdentityUpdate(Request $request){
        $iden_id = $request->id;

        $image = $request->file('site_logo');    
        $icon = $request->file('site_fav');    
        $old_img = $request->oldimage;
        $old_icon = $request->oldicon;

        if($image && $icon){
            $name_gen=uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('backend/images/logo/'.$name_gen);
            $save_url = 'backend/images/logo/'.$name_gen;
            if($old_img){
                unlink($old_img);
            }

            $icon_gen=uniqid().'.'.$icon->getClientOriginalExtension();
            Image::make($icon)->save('backend/images/logo/'.$icon_gen);
            $icon_url = 'backend/images/logo/'.$icon_gen;

            if($old_icon){
                unlink($old_icon);
            }

            $identity = SiteIdentity::findOrFail($iden_id);

            $identity->site_name =$request->site_name;
            $identity->site_tag_line =$request->site_tag_line;
            $identity->site_logo = $save_url;
            $identity->site_fav = $icon_url;
           
            $identity->save();

            $notification = array(
                'message' => 'Website Identity Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('site.identity.settings')->with($notification);

        }elseif($image){
            $name_gen=uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('backend/images/logo/'.$name_gen);
            $save_url = 'backend/images/logo/'.$name_gen;
            if($old_img){
                unlink($old_img);
            }


            $identity = SiteIdentity::findOrFail($iden_id);

            $identity->site_name =$request->site_name;
            $identity->site_tag_line =$request->site_tag_line;
            $identity->site_logo = $save_url;
            $identity->site_fav = $old_icon;
           
            $identity->save();

            $notification = array(
                'message' => 'Website Identity Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('site.identity.settings')->with($notification);

        }elseif($icon){
            $icon_gen=uniqid().'.'.$icon->getClientOriginalExtension();
            Image::make($icon)->save('backend/images/logo/'.$icon_gen);
            $icon_url = 'backend/images/logo/'.$icon_gen;

            if($old_icon){
                unlink($old_icon);
            }

            $identity = SiteIdentity::findOrFail($iden_id);

            $identity->site_name =$request->site_name;
            $identity->site_tag_line =$request->site_tag_line;
            $identity->site_logo = $old_img;
            $identity->site_fav = $icon_url;
           
            $identity->save();

            $notification = array(
                'message' => 'Website Identity Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('site.identity.settings')->with($notification);

        }
        else{

            $identity = SiteIdentity::findOrFail($iden_id);

            $identity->site_name =$request->site_name;
            $identity->site_tag_line =$request->site_tag_line;
            $identity->site_logo = $old_img;
            $identity->site_fav = $old_icon;
           
            $identity->save();

            $notification = array(
                'message' => 'Website Identity Updated Successfully',
                'alert-type' => 'success'
            );
              return Redirect()->route('site.identity.settings')->with($notification);
        }
   
    }
}
