@extends('layouts.layout')
@section('content')
<div class="row">
	<div class="col-md-8">

	<form action="/file-upload"
      class="dropzone"
      id="my-awesome-dropzone">
      	{{csrf_field()}}
      	<input type="hidden" name="file">
      </form>
      </div>
</div>
<div>
	<div class="col-md-12">
		<a href="{{url('/home')}}" class="btn btn-danger"> Back </a><a href="{{url('uploadgalleryimage')}}" class="btn btn-danger">Upload</a>
	</div>
	
</div>
@endsection()