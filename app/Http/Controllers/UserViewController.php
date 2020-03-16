<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;
use App\Sliderimage;
use App\Productpage;
use App\Contactus;
use App\Header;
use App\Gallery;
use App\Homeintro;
use App\Addmembers;
use App\Review;
use Auth;
use App\Footer;

class UserViewController extends Controller
{






  public function productdescription ($id)
  {
    $productall = Productpage::all();
    $productd = Productpage::find($id);
    //return $productd;
    return view('UserView.productdescription', compact('productd','productall'));
  }


  public function index(Request $request)
  {
    $user_id=$request->get('pcm');
      //return $user_id;
      // $websites= Website::where('users_id',$user_id)->orderBy('updated_at', 'desc')->first()->get();
    $websites = Website::where('users_id', $user_id)
    ->orderBy('updated_at', 'desc')
    ->take(1)
    ->get();

        //return $websites;
    $images = Sliderimage::where('users_id',$user_id)->orderBy('updated_at', 'desc')->get();
    $products = Productpage::where('users_id',$user_id)->orderBy('updated_at','desc')
    ->take(4)->get();
    $introduction = Header::where('user_id',$user_id)->orderBy('updated_at','desc')->take(1)->get();
    $header = Homeintro::where('user_id',$user_id)->orderBy('updated_at', 'desc')->take(1)->get();
    $addmember = Addmembers::where('user_id',$user_id)->orderBy('updated_at','desc')->take(4)->get();
    $footer = Footer::where('user_id',$user_id)->orderBy('updated_at','desc')->take(1)->get();
      // return $footer;
    return view('UserView.viewpage',compact('websites','images','products','introduction','header','addmember','footer'));
  }

  public function msgreview(Request $request)
  {
    $request->validate([
      'firstname'=> 'required',
      'lastname'=> 'required',
      'email'=> 'required',
      'phone'=> 'required',
      'message'=> 'required',
    ]);
    $msgreview = new Review();
    $msgreview->users_id = 'null';
    $msgreview->first_name = $request->firstname;
    $msgreview->last_name = $request->lastname;
    $msgreview->email = $request->email;
    $msgreview->phone_no = $request->phone;
    $msgreview->message = $request->message;
    $msgreview->save();
    return back()->with('success','Thank you for your suggestion.');
  }
  public function userresponse(){
   $userresponse = Review::all();

   return view('userresponse',compact('userresponse'));
 }

 public function userdelete($id){
  $userresponse = Review::find($id)->delete();
  return redirect('userresponse');
}





public function aboutus(Request $request)
{    
  $user_id=$request->get('pcm');
  $websites = Website::where('users_id', $user_id)
  ->orderBy('updated_at', 'desc')
  ->take(1)
  ->get();
  $images = Sliderimage::where('users_id',$user_id)->orderBy('updated_at', 'desc')->get();
  $products = Productpage::where('users_id',$user_id)->orderBy('updated_at','desc')
  ->take(4)->get();
  $introduction = Header::where('user_id',$user_id)->orderBy('updated_at','desc')->take(1)->get();
  $header = Homeintro::where('user_id',$user_id)->orderBy('updated_at', 'desc')->take(1)->get();
  $addmember = Addmembers::where('user_id',$user_id)->orderBy('updated_at','desc')->take(4)->get();
  $footer = Footer::where('user_id',$user_id)->orderBy('updated_at','desc')->take(1)->get();
      // return $footer;
  return view('UserView.aboutus',compact('websites','images','products','introduction','header','addmember','footer'));

}
public function ourteam(Request $request)
{    
  $user_id=$request->get('pcm');
  $websites = Website::where('users_id', $user_id)
  ->orderBy('updated_at', 'desc')
  ->take(1)
  ->get();
  $images = Sliderimage::where('users_id',$user_id)->orderBy('updated_at', 'desc')->get();
  $products = Productpage::where('users_id',$user_id)->orderBy('updated_at','desc')
  ->take(4)->get();
  $introduction = Header::where('user_id',$user_id)->orderBy('updated_at','desc')->take(1)->get();
  $header = Homeintro::where('user_id',$user_id)->orderBy('updated_at', 'desc')->take(1)->get();
  $addmember = Addmembers::where('user_id',$user_id)->orderBy('updated_at','desc')->take(4)->get();
  $footer = Footer::where('user_id',$user_id)->orderBy('updated_at','desc')->take(1)->get();
      // return $footer;
  return view('UserView.ourteam',compact('websites','images','products','introduction','header','addmember','footer'));

}
public function contacusview(Request $request)
{  
  $user_id=$request->get('pcm');
  $contactus = Contactus::where('user_id',$user_id)->orderBy('updated_at','desc')->take(1)->get();
  $contactno = Header::where('user_id',$user_id)->orderBy('updated_at','desc')->take(1)->get();


  $websites = Website::where('users_id', $user_id)
  ->orderBy('updated_at', 'desc')
  ->take(1)
  ->get();
  $images = Sliderimage::where('users_id',$user_id)->orderBy('updated_at', 'desc')->get();
  $products = Productpage::where('users_id',$user_id)->orderBy('updated_at','desc')
  ->take(4)->get();
  $introduction = Header::where('user_id',$user_id)->orderBy('updated_at','desc')->take(1)->get();
  $header = Homeintro::where('user_id',$user_id)->orderBy('updated_at', 'desc')->take(1)->get();
  $addmember = Addmembers::where('user_id',$user_id)->orderBy('updated_at','desc')->take(4)->get();
  $footer = Footer::where('user_id',$user_id)->orderBy('updated_at','desc')->take(1)->get();
      // return $footer;
  return view('UserView.contactuss',compact('websites','images','products','introduction','header','addmember','footer','contactus','contactno'));


}
public function productviewpage(Request $request)
{
  $user_id=$request->get('pcm');

  $websites = Website::where('users_id', $user_id)
  ->orderBy('updated_at', 'desc')
  ->take(1)
  ->get();
  $images = Sliderimage::where('users_id',$user_id)->orderBy('updated_at', 'desc')->get();
  $products = Productpage::where('users_id',$user_id)->orderBy('updated_at','desc')->get();
  $introduction = Header::where('user_id',$user_id)->orderBy('updated_at','desc')->take(1)->get();
  $header = Homeintro::where('user_id',$user_id)->orderBy('updated_at', 'desc')->take(1)->get();
  $addmember = Addmembers::where('user_id',$user_id)->orderBy('updated_at','desc')->take(4)->get();
  $footer = Footer::where('user_id',$user_id)->orderBy('updated_at','desc')->take(1)->get();
      // return $footer;
  return view('UserView.productviewpage',compact('websites','images','products','introduction','header','addmember','footer','contactus','contactno'));

}
  public function showimagegallery(Request $request)
  {
    $user_id=$request->get('pcm');
    $gallery = Gallery::where('user_id',$user_id)->get();



  $websites = Website::where('users_id', $user_id)
  ->orderBy('updated_at', 'desc')
  ->take(1)
  ->get();
  $images = Sliderimage::where('users_id',$user_id)->orderBy('updated_at', 'desc')->get();
  $products = Productpage::where('users_id',$user_id)->orderBy('updated_at','desc')
  ->take(4)->get();
  $introduction = Header::where('user_id',$user_id)->orderBy('updated_at','desc')->take(1)->get();
  $header = Homeintro::where('user_id',$user_id)->orderBy('updated_at', 'desc')->take(1)->get();
  $addmember = Addmembers::where('user_id',$user_id)->orderBy('updated_at','desc')->take(4)->get();
  $footer = Footer::where('user_id',$user_id)->orderBy('updated_at','desc')->take(1)->get();
      // return $footer;
  return view('UserView.userviewgallery',compact('websites','images','products','introduction','header','addmember','footer','contactus','contactno','gallery'));
  }

}