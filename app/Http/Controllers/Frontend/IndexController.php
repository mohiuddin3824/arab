<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\AboutInfo;
use App\Models\Page;
use App\Models\ContactInfos;
use App\Models\HomeService;
use App\Models\WhyChoose;

class IndexController extends Controller
{
    public function index(){
        $sliers = Slider::orderBy('id', 'DESC')->get();
        $services = HomeService::orderBy('id', 'ASC')->first();
        $choos = WhyChoose::orderBy('id', 'ASC')->first();

        
        
        
        return view('frontend.index', compact('sliers','services', 'choos' ));
    }

    //About Page
    public function about(){
        $abinfo = AboutInfo::orderBy('id', 'DESC')->first();
        $about = Page::where('slug', 'about-us')->first();

        if($about){
            return view('frontend.pages.about-us', compact('about', 'abinfo'));
        }else {
            return redirect('/');
        }

    }

    //contact page
    public function userContact(){
        $contactInfos = ContactInfos::first();

        $contact = Page::where('slug', 'contact-us')->first();

        if($contact){
            return view('frontend.pages.contact-us', compact('contactInfos', 'contact'));
        }else {
            return redirect('/');
        }

    }

    //contact page
    public function services(){

        $services = Page::where('slug', 'services')->first();

        if($services){
            return view('frontend.pages.services', compact('services'));
        }else {
            return redirect('/');
        }

    }

    //Housing Management
    public function HousingManage(){

        $HousingManage = Page::where('slug', 'housing-management')->first();

        if($HousingManage){
            return view('frontend.pages.housing-management', compact('HousingManage'));
        }else {
            return redirect('/');
        }

    }

    //Construction Planning
    public function consPlanning(){

        $consPlanning = Page::where('slug', 'construction-planning')->first();

        if($consPlanning){
            return view('frontend.pages.construction-planning', compact('consPlanning'));
        }else {
            return redirect('/');
        }

    }
    
    //Construction Planning
    public function archDesign(){

        $archDesign = Page::where('slug', 'architecture-design')->first();

        if($archDesign){
            return view('frontend.pages.architecture-design', compact('archDesign'));
        }else {
            return redirect('/');
        }

    }

    //Construction Planning
    public function intDesign(){

        $intDesign = Page::where('slug', 'interior-planning')->first();

        if($intDesign){
            return view('frontend.pages.interior-planning', compact('intDesign'));
        }else {
            return redirect('/');
        }

    }



}
