@extends('layouts.layout')
@section('content')
 @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

        </div>
  @endif

<div class="row">
		<div class="col-md-4">
	
		<h2>About Us(In short word)</h2>

		<form action="{{route('pagefooter')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<textarea class="form-control" id="summary-ckeditor" name="ckeditor1"></textarea>

			@if ($errors->has('ckeditor1'))
			<span class="text-danger">{{ $errors->first('ckeditor1') }}</span>
			@endif
		</div>
		<div class="col-md-4">
			<div class="form-line">
				<h2>Why Us</h2>
				<textarea id="ckeditor1" name="ckeditor2" class="ckeditor"></textarea>
				<script type="text/javascript">
					var editor = CKEDITOR.replace( 'ckeditor1' );
					CKFinder.setupCKEditor( editor, '/ckfinder/' );
				</script>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-line">
				<h2>Contact Us</h2>
				<textarea id="ckeditor11" name="ckeditor3" class="ckeditor"></textarea>
				<script type="text/javascript">
					var editor = CKEDITOR.replace( 'ckeditor11' );
					CKFinder.setupCKEditor( editor, '/ckfinder/' );
				</script>
				@if ($errors->has('ckeditor3'))
				<span class="text-danger">{{ $errors->first('ckeditor3') }}</span>
				@endif
			</div>
		</div>
		<div class="row">
			<button  type="submit" class="btn btn-primary" style="margin-left: 500px;">Update Footer</button>
		</div>
	</form>
	@endsection()