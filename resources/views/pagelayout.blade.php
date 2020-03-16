@extends('layouts.layout')
@section('content')

<div class="row">
	<div class="col-md-4">
		<h2>Header</h2>
		<button type="button" class="sliderpagebutton" id="button"  onclick="location.href='{{ url('pageheader')}}'"><span> Choose Header Style</span></button>
	</div>
	<div class="col-md-4">
		<h2>Slider</h2>
		<button type="button" class="sliderpagebutton" id="button"  onclick="location.href='{{ url('sliderpage')}}'"><span> Choose Slider Style </span></button>
	</div>
	<div class="col-md-4">
		<h2>Footer</h2>
		<button type="button" class="sliderpagebutton" id="button"  onclick="location.href='{{ url('pagefootersample')}}'"><span> Choose Footer Style </span></button>
	</div>

</div>
@endsection()

