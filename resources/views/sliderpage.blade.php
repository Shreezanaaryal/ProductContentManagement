@extends('layouts.layout')
@section('content')
    <div class="row">
    <div class="col-md-4">
        <button type="button" class="sliderpagebutton" id="button" onclick="location.href='{{ url('slidertype1')}}'"> <span> Slider Type1 </span> </button>
    </div>
    <div class="col-md-4">
        <button type="button" class="sliderpagebutton" onclick="location.href='{{ url('slidertype2')}}'"><span> Slider Type 2 </span></button>
    </div>
</div>

<div class="container">
    <h2> <b> Boxed Size Slider </b></h2>
    <div class="carousel" data-carousel-options='{ "wrapAround" : true }'>
        @foreach ($images as $img)
        <div class="carousel-cell">
        	<img src= "{{ $img->image }}" />
        </div>
        @endforeach
    </div>
</div>
    


@endsection('content')