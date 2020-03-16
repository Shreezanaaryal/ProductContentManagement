@extends('layouts.layout')
@section('content')

 @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

        </div>
  @endif


<main class="page">
	<!-- input file -->
	<form action="{{url('addmembers')}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<!-- ///<input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
		<div class="row
			<div class="form-group">
				<label style="margin-left: -100px; padding-top: 5px;"><h3>Name:</h3> <small></small>  </label><br><br>
				<input class="form-control" type="text" name="Name" id="">
				@if ($errors->has('Name'))
				<span class="text-danger">{{ $errors->first('Name') }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-6">
			
			<div class="box">
				<h4 style="margin-left:-150px; ">Upload your Photo</h4><br>

				<input type="file" id="file-input" name="ppimage" onClick="javascript:test();">
			</div>
			<!-- leftbox -->
			<div class="box-2">
				<div class="result"> </div>
			</div>
			<!--rightbox-->
			<div class="box-2 img-result hide">
				<!-- result of crop -->
				<img class="cropped" src="" alt="">
			</div>
			<!-- input file -->
 <!--  <div class="box">
    <div class="options hide">
     <label> Width</label>
     <input type="number" class="img-w" value="300" min="100" max="1200" />
 </div> -->
 <!-- save btn -->
 <!-- <button class="btn save hide">Save</button> -->
</div>
</main>
<div class="row">
	<div class="col-md-6 col-sm-12 col-xs-12">
		<div class="form-group">
			<label>Description <small>(Describe yourself)</small> :    </label>
			<textarea class="form-control" id="summary-ckeditor" name="description"></textarea>
			@if ($errors->has('description'))
			<span class="text-danger">{{ $errors->first('description') }}</span>
			@endif
		</div>
	</div>

	<div class="col-md-6 col-sm-12 col-xs-12">
		<div class="form-group">
			<label>Facebook Link <small>( Copy & paste your facebook profile URL )</small> :    </label>
			<input class="form-control" type="text" name="Facebooklink" id="Facebooklink">
			@if ($errors->has('Facebooklink'))
			<span class="text-danger">{{ $errors->first('Facebooklink') }}</span>
			@endif
		</div>

	</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="form-group">
				<label>Instagram Link <small>( Copy & paste your instagram profile URL )</small> :    </label>
				<input class="form-control" type="text" name="Instalink" id="Facebooklink">
				@if ($errors->has('Instalink'))
				<span class="text-danger">{{ $errors->first('Instalink') }}</span>
				@endif
			</div>

		</div>

		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="form-group">
				<label>Contact Number <small>(number or email)</small> :    </label>
				<input class="form-control" type="text" name="Contact_NO" id="adminOrganization">
				@if ($errors->has('Contact_NO'))
				<span class="text-danger">{{ $errors->first('Contact_NO') }}</span>
				@endif
			</div>
			<!-- <input type="submit" name="submit" class="btn btn-lg btn-primary" > -->
			<button type="submit" class="btn btn-success">Save & Continue</button>
		</div>
		</form>
	@endsection()
