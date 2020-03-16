@extends('layouts.layout')
@section('content')
 @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

        </div>
  @endif
<form action="{{route('homeintroo')}}" method="post" enctype="form-data/multipart">
	{{csrf_field()}}
	<div class="col-md-4">
				<h2>Introduction</h2>
			<textarea class="form-control" id="summary-ckeditor" name="introeditor"></textarea>
		</div>

	<div class="col-md-4">
			<div class="form-line">
				<h2>About Us</h2>
				<textarea id="ckeditor1" name="ckeditor2" class="ckeditor"></textarea>
				<script type="text/javascript">
					var editor = CKEDITOR.replace( 'ckeditor1' );
					CKFinder.setupCKEditor( editor, '/ckfinder/' );
				</script>
			</div>
	<div class="row">

	<button type="submit" class="btn btn-primary" style="margin-left:400px;">Update</button>
	</div>
</form>
@endsection()