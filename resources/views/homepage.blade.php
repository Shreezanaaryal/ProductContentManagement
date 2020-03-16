@extends('layouts.layout')
@section('content')

<!-- onclick="location.href='{{ url('headerpage')}}'" -->

<div class="row">
	<div class="col-md-4">
		<h2>Header</h2>
		<button type="button" class="headerpagebutton" id="button" onclick="location.href='{{ url('pageheader')}}'"> <span> Header </span> </button>
	</div>
	<div class="col-md-4">
		<h2>Slider</h2>
		<button type="button" class="headerpagebutton" id="button" onclick="location.href='{{ url('sliderpage')}}'"> <span> Slider </span> </button>
	</div>
	<div class="col-md-4">
		<h2>Introduction</h2>
		<button type="button" class="headerpagebutton" id="button" onclick="location.href='{{ url('homeintro')}}'"> <span> Introduction </span> </button>
	</div>
	<div class="col-md-4">
		<h2>Members</h2>
		<button type="button" class="sliderpagebutton" id="button"  onclick="location.href='{{ url('addmember')}}'"><span> Add Members </span></button>
	</div>
	<div class="col-md-4">
		<h2>Gallery</h2>
		<button type="button" class="sliderpagebutton" id="button"  onclick="location.href='{{ url('upload-image')}}'"><span> Gallery </span></button>
	</div>
	<div class="col-md-4">
		<h2>Contact Us</h2>
		<button type="button" class="sliderpagebutton" id="button"  onclick="location.href='{{ url('contactus')}}'"><span> Contact Us </span></button>
	</div>

	

</div>


@endsection('content')
