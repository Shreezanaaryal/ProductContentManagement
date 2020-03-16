@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="col-md-4">
       <a href="{{url('slidertype1')}}"> <button type="button" class="sliderpagebutton" id="button">  Slider Type1  </button> </a>
    </div>
    <div class="col-md-4">
        <a href="{{url('slidertype2')}}"><button type="button" class="sliderpagebutton">Slider Type 2</button> </a>
 </div>
</div>

<h2> <b> Boxed Size Slider </b></h2>
    <div class="carousel" data-carousel-options='{ "wrapAround" : true }'>
        @foreach ($images as $img)
        	<div class="carousel-cell">
        		<img src= "{{ $img->image }}" />
        	</div>
        @endforeach
    </div>

<div class="row">
	<div class="col-md-6">
		<div class="button-section" style="margin-top: 50px;">
			<h1> <b>Choose Images for Your Slider </b> </h1>
            <form action="sliderform/slider1" method="post">
                @csrf
                <input type="hidden" value="slider1" name="slider">
                <input type="submit" value="choose slider " class="headerpagebutton">
            </form>
		</div>
	</div>
</div>














@endsection('content')