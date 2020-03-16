<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sliderimage;
use Auth;
use App\Website;
use App\Contactus;

class sliderpageController extends Controller
{
    public function slider()
    {
        $currentuserid = Auth::user()->id;
        $images = Sliderimage::where('users_id',$currentuserid)->get();
        //return $images;
    	return view('sliderpage',compact('images'));

        return view('sliderpage')->with('images',$images);
    }
     public function sliderpage1()
    {
        $currentuserid = Auth::user()->id;
        $images = Sliderimage::where('users_id',$currentuserid)->get();
        //return $images;
        // return view('sliderpage',compact('images'));

        return view('sliderpage1')->with('images',$images);

    }
     public function sliderpage2()
    {
         $currentuserid = Auth::user()->id;
        $images = Sliderimage::where('users_id',$currentuserid)->get();
        //return $images;
        // return view('sliderpage',compact('images'));

        return view('sliderpage2')->with('images',$images);

    }
    public function sliderform()
    {
        // return $slidertype;
        //  $email = Auth::user()->email;
        // return $email;
        
        //return "success";
        return view('sliderform');

    }
 

    public function uploadgalleryimage( Request $request)
    {

    	$file = $request->file('file'); //get file from the post
    	//set file name
    	$filename = uniqid().$file->getClientOriginalName();
    	$file->mode('images/gallery', $filename);
    	$gallery = Gallery::find($request->input('gallery_id'));
    	$image = $gallery->images()->create([
    		'gallery_id' => $request->input('gallery_id')
    	]);

    }
  

    // public function uploadgalleryimage( Request $request)
    // {

    // 	$file = $request->file('file'); //get file from the post
    // 	//set file name
    // 	$filename = uniqid().$file->getClientOriginalName();
    // 	$file->mode('images/gallery', $filename);
    // 	$gallery = Gallery::find($request->input('gallery_id'));
    // 	$image = $gallery->images()->create([
    // 		'gallery_id' => $request->input('gallery_id')
    // 	]);

    // }

    public function sliderpost( Request $request)

    {   
        $web = Website::where('users_id',Auth::user()->id)->first(); 
        $web->slider=$request->slider;
        $web->save();
       
        return redirect('/sliderform');
    }

    public function sliderformdb( Request $request)
    {

             request()->validate([
            'heading' => 'required|max:20',
            'description' => 'required|max:1500',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            // |dimensions:max_width=10,max_height=20

        ]);
        //return request()->image->getClientOriginalExtension();
        $img = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/'), $img);
        $imageName = 'images/'.$img;
        $Sliderimg= new Sliderimage();
        $Sliderimg->users_id = Auth::user()->id;
        $Sliderimg->heading = $request->heading;
        $Sliderimg->description = $request->description;
        $Sliderimg->image = $imageName;
        $Sliderimg->save();

        $datafromdb = Sliderimage::where('users_id', Auth::user()->id)->get();
     
    return back()

            ->with('success','You have successfully upload image.')

            ->with('imgs',$datafromdb);

    }

       public function contactus()
    {
        return view('contactus');
    }
     public function contactusdb(Request $request)
    {

        $validatedata = $request->validate([
            'ckeditor1'=> 'required',
            'ckeditor2' => 'required'
        ]);
        $contact = new Contactus();
        $contact->user_id =Auth::user()->id;
        $contact->Contactdetails = $request->ckeditor1;
        $contact->embedmap = $request->ckeditor2;
        $contact->save();
         return back()->with('success','You have successfully uploaded Contactus.');
    }


}
        
