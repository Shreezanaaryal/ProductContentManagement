<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productpage;
use Auth;
use Validator;

class productpageController extends Controller
{
    public function product()
    {
    	return view('productpage');
    }

    public function productpagedb(Request $request)
    {
       //return $request->category;
    	request()->validate([
    		
            'product_name' => 'required',
            'product_description' => 'required',
            'category'=>'required',
            'product_price'=>'required|numeric',
            'image' => 'required|mimes:jpeg,bmp,png',
        ]);
    	$img = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('productimages/'), $img);
        $imageName = 'productimages/'.$img;
        $product = new Productpage();
        $product->users_id = Auth::user()->id;
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_category = $request->category;
        $product->other1="null";

        if($request->category == 'Other')
        { 
            $product->other1 = $request->other;
            $product->product_category = $request->other; 
        }
        $product->product_price = $request->product_price;
        $product->product_image = $imageName;
        $product->save();

        return back()->with('success','You have successfully enter data.');

    }
    public function deleteproduct(){
        $deleteproduct = Productpage::where('users_id',Auth::user()->id)->get();

        return view('deleteproduct',compact('deleteproduct'));
        
    }

           public function delete($id){
        $deletedata = Productpage::find($id)->delete();
        return redirect('deleteproduct');
    }

}
