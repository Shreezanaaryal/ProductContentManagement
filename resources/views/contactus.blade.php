@extends('layouts.layout')
@section('content')
 @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

        </div>
  @endif
<div class="row">
	<div class="col-md-6">
		<form action="{{url('contactusdb')}}" method="post" >
			@csrf
		<h3>Detail Contact Information</h3>
		<textarea class="form-control" id="summary-ckeditor" name="ckeditor1"></textarea>
	</div>
	
	<div class="col-md-6">
		<div class="form-line">
			<h2>Embed Map Url</h2><h6>Go through the google map click toggle bar click share & embed map copy mapurl and paste</h6>
			<textarea id="ckeditor11" name="ckeditor2" class="ckeditor"></textarea>
			<script type="text/javascript">
				var editor = CKEDITOR.replace( 'ckeditor11' );
				CKFinder.setupCKEditor( editor, '/ckfinder/' );
			</script>
			@if ($errors->has('ckeditor3'))
			<span class="text-danger">{{ $errors->first('ckeditor3') }}</span>
			@endif
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1757.154326370855!2d83.96940175757342!3d28.25865637385372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39959481bfe6174f%3A0xb02f1e78598d2986!2sGandaki+College+of+Engineering+and+Science!5e0!3m2!1sen!2snp!4v1533358794403" width="600" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="col-md-4">
		<button type="submit" class="btn btn-primary" style="margin-left: 500px;color: blue">UPDATE</button>
		</form>
	</div>
</div>




@endsection()