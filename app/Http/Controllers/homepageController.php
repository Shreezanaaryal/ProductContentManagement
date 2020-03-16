<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeIntro;
use Auth;
use App\Addmembers;

class homepageController extends Controller
{
    public function header()
    {
	return view('homepages');
    }
 

    public function contactform()
    {
    	return view('contactform');
    }

    public function testfun()
        {
            return view ('test');
            new dragdrop.start();
        }
   
    public function homeintro()
    {
        return view('homeintro');
    }
    public function homeintrodb(Request $request)
    {
        $request->validate([
            'introeditor'=> 'required'

        ]);
        $intro = new HomeIntro();
        $intro->user_id = Auth::user()->id;
        $intro->Home_Intro = $request->introeditor;
        $intro->Aboutus = $request->ckeditor2;
        $intro->save();
        return back()->with('success','You have successfully upload Introduction and aboutus.');
    }
    
    public function Addmembers()
    {
        return view('addmembers');
    }
    public function Addmembersdb(Request $request)
    {  


        $validatedata = $request->validate([
            'Name'=> 'required',
            'Contact_NO'=>'required',
            'ppimage' => 'required|mimes:jpeg,bmp,png|max:2048',
        ]);
        $imgName = time().'.'.request()->ppimage->getClientOriginalName();
        request()->file('ppimage')->move(public_path('image/addmember'), $imgName);
        $imgeName = 'images/'.$imgName;
        $addmembers = new Addmembers();
        $addmembers->user_id =Auth::user()->id;
        $addmembers->Name =$request->Name;
        $addmembers->ppimage = $imgName;
        $addmembers->description = $request->description;
        $addmembers->Facebooklink = $request->Facebooklink;
        $addmembers->Instalink = $request->Instalink;
        $addmembers->Contact_NO = $request->Contact_NO;
        $addmembers->save();

        return back()->with('success','You have successfully added members.');
    }

}
