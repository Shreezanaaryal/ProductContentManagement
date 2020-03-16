@extends('layouts.layout')
@section('content')

<!-- onclick="location.href='{{ url('headerpage')}}'" -->

<div class="row">
	
	<div class="col-md-4">
		<h2>Introduction & About Us</h2>
		<button type="button" class="headerpagebutton" id="button" onclick="location.href='{{ url('homeintro')}}'"> <span> Introduction & About Us </span> </button>
	</div>
	<div class="col-md-4">
		<h2>CEO/Members</h2>
		<button type="button" class="sliderpagebutton" id="button"  onclick="location.href='{{ url('addmember')}}'"><span> Add Members </span></button>
	</div>
</div>


@endsection('content')
