
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!DOCTYPE html> 
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rocket Design - Portfolio</title>
	<link rel="stylesheet" type="text/css" href="galleryfile/style.css" />
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="galleryfile/css/lightbox.min.css">

		<link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/flickity.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('Indexpage/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('Indexpage/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('Indexpage/css/owl.transitions.css')}}">
	<link rel="stylesheet" href="{{asset('Indexpage/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('Indexpage/css/lightbox.css')}}">
	<link rel="stylesheet" href="{{asset('Indexpage/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('Indexpage/css/preloader.css')}}">
	<link rel="stylesheet" href="{{asset('Indexpage/css/image.css')}}">
	<link rel="stylesheet" href="{{asset('Indexpage/css/icon.css')}}">
	<link rel="stylesheet" href="{{asset('Indexpage/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('Indexpage/css/responsive.css')}}">

</head>


	<section id="play-video">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						@foreach($introduction as $head)
						<h2 class="wow fadeInUp" data-wow-delay=".3s">{!! $head->Org_Name !!}</h2>
						@endforeach
						
						<a href="contactuss?pcm={{app('request')->input('pcm')}}" class="html5lightbox" data-width=800 data-height=400>
							<h1>gallery</h1>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<div id="wrapper">
			@foreach($gallery as $images)

		<section class="one-third">
			<a class="example-image-link" id="Lightbox-img" href="image/gallery/{{ $images-> galleryimg }}" data-lightbox="example-set">
				<img src="image/gallery/{{ $images-> galleryimg }}" ></a>
		</section>
				@endforeach


	</div>
	
	<script type="text/javascript" src="galleryfile/js/lightbox-plus-jquery.min.js"></script>
	</body>


	</html>








