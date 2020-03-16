<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|



*/
Route::get('/viewpage','UserViewController@index');
Route::get('contactuss','UserViewController@contacusview');
Route::get('galleryimage','UserViewController@showimagegallery');
// Route::get('/index','UserViewController@index1');
Route::get('aboutus','UserViewController@aboutus');
Route::get('ourteam','UserViewController@ourteam');

// contact us review
Route::post('msgreview','UserViewController@msgreview');
Route::get('userresponse','UserViewController@userresponse');
Route::get('deleteresponse/{id}','UserViewController@userdelete')->name('deleteresponse');



Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/layout', function(){
	return view('layouts.layout');
});

Route::get('/contactform','homepageController@contactform');
Route::get('/siru','homepageController@testfun');
// Route::get('/headerpage','headerpageController@header');
Route::get('/sliderpage','sliderpageController@slider')->middleware('auth');
Route::get('/slidertype1','sliderpageController@sliderpage1');
Route::get('/slidertype2','sliderpageController@sliderpage2');

Route::get('/sliderform','sliderpageController@sliderform')->middleware('auth');

Route::post('/sliderform/{slidertype}', 'sliderpageController@sliderpost')->middleware('auth');

Route::post('sliderformdb','sliderpageController@sliderformdb')->middleware('auth');

Route::get('/pagelayout', function()
{
	return view('pagelayout');
});

//homepage
Route::get('/homepage','homepageController@header')->middleware('auth');
Route::get('homeintro','homepageController@homeintro');
Route::post('homeintro','homepageController@homeintrodb')->name('homeintroo');

Route::get('addmember','homepageController@Addmembers')->middleware('auth');
Route::post('addmembers','homepageController@Addmembersdb');
Route::get('abooutus','homepageController@abooutus')->name('abooutus');

//header
Route::get('/pageheader', function()
{
	return view('pageheadersample');

});
Route::get('/headers','headerpageController@pageheader')->middleware('auth');
Route::post('/headers','headerpageController@pageheaderdb');

Route::post('headers/{id}','headerpageController@headerpost')->middleware('auth');
//test image

Route::get('/headers', function()
{
	return view('pageheader');
});

Route::get('/productpage','productpageController@product')->middleware('auth');
Route::post('/productpagedb','productpageController@productpagedb');

Route::get('/deleteproduct','productpageController@deleteproduct')->middleware('auth');
Route::get('delete/{id}','productpageController@delete')->name('delete');

//product view page

Route::get('/productviewpage','UserViewController@productviewpage');
Route::get('productdescription/{id}','UserViewController@productdescription')->name('productdescription');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('image-view','ImageController@index');
Route::post('image-view','ImageController@store');

//Gallery
Route::get('upload-image','FileController@index')->middleware('auth');
Route::post('upload-image',['as'=>'image.upload','uses'=>'FileController@uploadImages']);
//gallery view 


//footer
Route::get('pagefootersample', 'headerpageController@pagefootersample')->middleware('auth');
Route::post('pagefooter','headerpageController@pagefooterdb')->name('pagefooter')->middleware('auth');
Route::post('pagefooter/{footertype}','headerpageController@footerpost')->middleware('auth');
Route::get('pagefooter','headerpageController@pagefooter')->middleware('auth');




Route::get('pagefootersample',function()
{
	return view('pagefootersample');
});




Route::get('contactus','sliderpageController@contactus')->middleware('auth');
Route::post('contactusdb', 'sliderpageController@contactusdb')->middleware('auth');



