<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use Auth;
use App\Footer;
use App\Website;


class headerpageController extends Controller
{
    public function header()
    {
    	return view('headerpage');
    }

    public function pageheader()
    {
    	return view('pageheader');
    }
    public function pageheaderdb( Request $request)
    {
    	$validatedata = $request->validate([
    		'orglogo'=> 'required',
    		'Contact_NO'=>'required',
    		'Organization_Name' => 'required'
    	]);
    	$imgName = time().'.'.request()->file('orglogo')->getClientOriginalName();
    	//return $imgName;
        request()->file('orglogo')->move(public_path('image/Header'), $imgName);
        $imgeName = 'images/'.$imgName;
        $header = new Header();
        $header->user_id =Auth::user()->id;
        $header->logo = $imgName;
        $header->Org_Name = $request->Organization_Name;
        $header->fblink = $request->Facebooklink;
        $header->Instalink = $request->instalink;
        $header->Contact_No = $request->Contact_NO;
        $header->save();

        return back()->with('Sucessfully inserted'); 

    }


    public function headerpost( Request $request)
    {
        $user_all = Website::all();
        $users=array();
        foreach ($user_all as $user){
            array_push($users ,$user['users_id']);
        }
        //return $users;

        if(in_array(Auth::user()->id , $users))
        {
            $web = Website::findOrFail(Auth::user()->id);

        }
        else {
            $web= new Website();
        }
        $web->users_id = Auth::user()->id;
        $web->header = $request->header;
        $web->slider = 'NULL';
        $web->footer = 'NULL';
        $web->save();

        return redirect('/headers');
    }

    public function pagefootersample(){
        return view('pagefootersample');

    }
    public function pagefooter()
    {
        return view('pagefooter');
    }
    public function pagefooterdb(Request $request)
    {
        $validatedata = $request->validate([
            'ckeditor1'=> 'required',
            'ckeditor2'=>'required',
            'ckeditor3' => 'required'
        ]);
        $footer = new Footer();
        $footer->user_id =Auth::user()->id;
        $footer->About_Us = $request->ckeditor1;
        $footer->Why_Us = $request->ckeditor2;
        $footer->Contact_Us = $request->ckeditor3;
        $footer->save();
        return back()->with('success','You have successfully upload footer.');
    }

    public function footerpost(Request $request)
    {      
        $web = Website::where('users_id',Auth::user()->id)->firstOrFail();
        $web->footer = $request->footer;
        $web->save();
        return redirect()->route('pagefooter');
    }


}
