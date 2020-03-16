<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
   /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('image-view');
    }


    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$imageName = request()->file->getClientOriginalName();
        request()->file->move(public_path('upload'), $imageName);
    	return response()->json(['uploaded' => '/upload/'.$imageName]);
    }
}
