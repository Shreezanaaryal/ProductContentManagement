<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
use Auth;

class FileController extends Controller
{
    public function index()
    {
    	$currentuserid = Auth::user()->id;
    	return view('file');
    }
   
    public function uploadImages()
    {
    	$imgName =time().'.'.request()->file->getClientOriginalName();
    	//return $imgName;
        request()->file->move(public_path('image/gallery'), $imgName);
        $imgeName = 'images/'.$imgName;
        $galleryimg = new Gallery();
        $galleryimg->user_id =Auth::user()->id;
        $galleryimg->galleryimg = $imgName;
        $galleryimg->save();
    	return response()->json(['uploaded' => '/image/gallery'.$imgName]);

    }
   
}
	