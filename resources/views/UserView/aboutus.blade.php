

<!DOCTYPE html>


<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Content Management</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- google fonts -->

	<!-- Css link -->
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
<body id="top">
	
	<header id="navigation" class="navbar-fixed-top animated-header">
		@foreach($websites as $web)
		@if($web->header == 'headertype1')
		<div class="container">
			<div class="navbar-header">
				<!-- responsive nav button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- /responsive nav button -->
				<!-- logo -->
				<h5 class="navbar-brand">
					@foreach($introduction as $intro)
					<a href="#body"><img src="image/Header/{{$intro->logo}}" height="50" width="100" alt="" style=" border-radius: 50%;"></a>
					{!! $intro->Org_Name !!}
					
					@endforeach
				</h5>
				<!-- /logo -->
			</div>

			<!-- main nav -->
			<nav class="collapse navbar-collapse navbar-right" role="navigation">
				<ul id="nav" class="nav navbar-nav menu">
					<li><a href="viewpage?pcm={{app('request')->input('pcm')}}">Home</a></li>
					<li><a href="aboutus?pcm={{app('request')->input('pcm')}}">About Us</a></li>
					<li><a href="productviewpage?pcm={{app('request')->input('pcm')}}">Our Products</a></li>					
					<li><a href="ourteam?pcm={{app('request')->input('pcm')}}">Our Team</a></li>
					<li><a href="galleryimage?pcm={{app('request')->input('pcm')}}">Gallery</a></li>
					<li><a href="contactuss?pcm={{app('request')->input('pcm')}}">Contact Us</a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>

					<li></li><a href="#contact-form"> @foreach($introduction as $social)
						<a class="'nav-link" href="{{$social->fblink}}"><img src="image/facebook.png" width="30px" height="25px"></a>
						<a class="'nav-link" href="{{$social->Instalink}}"><img src="image/instagram.jpg" width="30px" height="25px"></a>

						@endforeach
						@foreach($introduction as $headers)
						{{$headers->Contact_No}}
					@endforeach</a></li>
				</ul>
			</nav>
			<!-- /main nav -->

		</div>
		@elseif($web->header == 'headertype2')
		<div class="container">
			<div class="navbar-header">
				<!-- responsive nav button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- /responsive nav button -->
				<!-- logo -->

				<!-- /logo -->
			</div>

			<!-- main nav -->
			<nav class="collapse navbar-collapse navbar-right" role="navigation">
				<ul id="nav" class="nav navbar-nav menu">
					<li>
						@foreach($introduction as $intro)
						<h2>{!! $intro->Org_Name !!}</h2>

					@endforeach</li>
					<li><a href="viewpage?pcm={{app('request')->input('pcm')}}">Home</a></li>
					<li><a href="aboutus?pcm={{app('request')->input('pcm')}}">About Us</a></li>
					<li><a href="productviewpage?pcm={{app('request')->input('pcm')}}">Our Products</a></li>
					<h5 class="navbar-brand">
						@foreach($introduction as $intro)
						<a href="#body"><img src="image/Header/{{$intro->logo}}" height="50" width="100" alt="" style="  border-radius: 50%;"></a>
						
						@endforeach
					</h5>
					<li><a href="ourteam?pcm={{app('request')->input('pcm')}}">Our Team</a></li>
					<li><a href="galleryimage?pcm={{app('request')->input('pcm')}}">Gallery</a></li>
					<li><a href="contactuss?pcm={{app('request')->input('pcm')}}">Contact Us</a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>

					<li></li><a href="#contact-form"> @foreach($introduction as $social)
						<a class="'nav-link" href="{{$social->fblink}}"><img src="image/facebook.png" width="30px" height="25px"></a>
						<a class="'nav-link" href="{{$social->Instalink}}"><img src="image/instagram.jpg" width="30px" height="25px"></a>

						@endforeach
						@foreach($introduction as $headers)
						{{$headers->Contact_No}}
					@endforeach</a></li>
				</ul>
			</nav>
			<!-- /main nav -->

		</div>
		@elseif($web->header == 'headertype3')
		<div class="container">
			<div class="navbar-header">
				<!-- responsive nav button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- /responsive nav button -->
				<!-- logo -->

				<!-- /logo -->
			</div>

			<!-- main nav -->
			@foreach($introduction as $intro)
			<a href="#body"><img src="image/Header/{{$intro->logo}}" height="50" width="100" alt="" style="  border-radius: 50%;"></a>

			@endforeach
			<nav class="collapse navbar-collapse navbar-right" role="navigation">
				<p style="text-align: center; margin-left: 500px;">
					@foreach($introduction as $intro)
					<h2>{!! $intro->Org_Name !!}</h2>

					@endforeach
				</p>
				<ul id="nav" class="nav navbar-nav menu">
					<li><a href="viewpage?pcm={{app('request')->input('pcm')}}">Home</a></li>
					<li><a href="aboutus?pcm={{app('request')->input('pcm')}}">About Us</a></li>
					<li><a href="productviewpage?pcm={{app('request')->input('pcm')}}">Our Products</a></li>
					
					<h5 class="navbar-brand">
						
					</h5>
					<li><a href="ourteam?pcm={{app('request')->input('pcm')}}">Our Team</a></li>
					<li><a href="galleryimage?pcm={{app('request')->input('pcm')}}">Gallery</a></li>
					<li><a href="contactuss?pcm={{app('request')->input('pcm')}}">Contact Us</a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>

					<li></li><a href="#contact-form"> @foreach($introduction as $social)
						<a class="'nav-link" href="{{$social->fblink}}"><img src="image/facebook.png" width="30px" height="25px"></a>
						<a class="'nav-link" href="{{$social->Instalink}}"><img src="image/instagram.jpg" width="30px" height="25px"></a>

						@endforeach
						@foreach($introduction as $headers)
						{{$headers->Contact_No}}
					@endforeach</a></li>
				</ul>
			</nav>
			<!-- /main nav -->

		</div>
		@endif
		@endforeach
	</header>

	<section id="play-video">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						@foreach($introduction as $head)
						<h2 class="wow fadeInUp" data-wow-delay=".3s">{!! $head->Org_Name !!}</h2>
						@endforeach
						
						<a href="contactuss?pcm={{app('request')->input('pcm')}}" class="html5lightbox" data-width=800 data-height=400>
							<h1>About Us</h1>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="testimonial">
		<div class="container">
			<div class="row">
				<div class="title">
					@foreach($introduction as $intro)
					<h2>{!! $intro->Org_Name !!}</h2>
					@endforeach
					<p>The Achievements of an organization are the results of combined effort of each individual</p>
				</div>
				<div class="col col-md-6">
					<div class="media wow fadeInLeft" data-wow-delay=".05s">
						
						<div class="media-body">
							<a href="#"><h4 class="media-heading">Introduction</h4></a>
							@foreach($header as $headers)
							<p>{!! $headers->Home_Intro !!}</p>
							
						</div>
					</div>
				</div>
				<div class="col col-md-6">
					<div class="media wow fadeInRight" data-wow-delay=".5s">
						<div class="media-body">
							<a href="#"><h4 class="media-heading">About Us</h4></a>
							<p>{!! $headers->Aboutus!!}</p>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	



	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title">
						<h2>OUR TEAM</h2>
						<p>Teamwork is the ability to work together toward a common vision. The ability to direct individual accomplishments toward organizational objectives. It is the fuel that allows common people to attain uncommon results.</p>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($addmember as $member)
				<div class="col-md-3 col-xs-6 col-sm-6">
					<div class="feature-block text-center">
						<div class="icon-box">
							<img src="image/addmember/{{$member->ppimage}}" height="200px" width="200px" style="border-radius: 50%;">
						</div>
						<h2 class="wow fadeInUp" data-wow-delay=".3s">{{$member->Name}}</h2>
						<p class="wow fadeInUp" data-wow-delay=".5s">{{$member->Contact_NO}}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>


	
	
	
	@foreach($websites as $web)
	@if($web->footer == 'footertype1')
	<!-- Footer -->
	<footer class="page-footer font-small blue pt-4">
		<!-- Grid row -->
		<div class="row">
			<!-- Grid column -->
			@foreach($footer as $foot)
			<div class="col-md-4 mt-md-0 mt-3">
				<h4 class="text-uppercase">ABOUT US</h4>

				<p class="left">{!! $foot->About_Us !!} </p>
				<style type="text/css">
				.left {
					float: left;}

				</style>

			</div>
			<div class="col-md-4 mb-md-0 mb-3">
				<h5 class="text-uppercase"> WHY US? </h5>
				<p>{!! $foot->Why_Us !!}</p>
			</div>
			<div class="col-md-4 mb-md-0 mb-3">
				<h5 class="text-uppercase">CONTACT_US</h5>
				<p> {!! $foot->Contact_Us !!}</p>
			</div>
			@endforeach
		</div>   
		<!-- Footer Links -->

		<!-- Copyright -->
		<div class="footer-copyright text-center py-3">© 2018 Copyright:
			<a href="http://srijanaaryal.com.np//"> Srijana</a>
		</div>
		<!-- Copyright -->

	</footer>
	<!-- Footer -->
	@elseif($web->footer == 'footertype2')
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<a href="#"><img src="img/logo.png" alt=""></a>
						<p>© 2018 Alterterterterl rights reserved <a href="http://srijanaaryal.com.np/" target="_blank">Srijana</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>


	@elseif($web->footer == 'footertype3')
	<footer class="page-footer font-small indigo">


		<div class="container text-center text-md-left">

			<div class="row">

				@foreach($footer as $foot)       
				<div class="col-md-4 mt-md-0 mt-3">
					<h4 class="text-uppercase">ABOUT US</h4>

					<p class="left">{!! $foot->About_Us !!} </p>
				</div>        	
				<div class="col-md-4 mb-md-0 mb-3">

					<h5 class="text-uppercase"> WHY US? </h5>

					<p>{!! $foot->Why_Us !!}</p>
				</div>
				<div class="col-md-4 mb-md-0 mb-3">
					<h5 class="text-uppercase">CONTACT_US</h5>
					<p> {!! $foot->Contact_Us !!}</p>
				</div>
				<div class="col-md-3 mb-md-0 mb-3">
					<h5 class="text-uppercase">Socail Media</h5>
					@foreach($introduction as $int)
					<p> {!! $int->fblink !!}</p> 
					<p> {!! $int->Instalink !!}</p>             
					@endforeach
				</div>
				@endforeach
			</div>   

		</div>


		<div class="footer-copyright text-center py-3">© 2018 Copyright:
			<a href="http://srijanaaryal.com.np/">Srijana</a>
		</div>    

	</footer>


	@endif
	@endforeach
	<!-- SliderPage -->

	<script src="{{asset('js/jquery-1.11.3.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/jssor.slider-27.4.0.min.js')}}" type="text/javascript"></script>
	<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/flickity-docs.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/flickity.pkgd.min.js')}}"></script>
	<!-- load Js -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>
	<script src="{{asset('Indexpage/js/waypoints.min.js')}}"></script>
	<script src="{{asset('Indexpage/js/lightbox.js')}}"></script>
	<script src="{{asset('Indexpage/js/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('Indexpage/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('Indexpage/js/html5lightbox.js')}}"></script>
	<script src="{{asset('Indexpage/js/jquery.mixitup.js')}}"></script>
	<script src="{{asset('Indexpage/js/wow.min.js')}}"></script>
	<script src="{{asset('Indexpage/js/jquery.scrollUp.js')}}"></script>
	<script src="{{asset('Indexpage/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('Indexpage/js/jquery.nav.js')}}"></script>
	<script src="{{asset('Indexpage/js/main.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/flick.js')}}"></script>


	

	<!-- SliderPage -->

	<script type="text/javascript">

      //knob
      $(function() {
      	$(".knob").knob({
      		'draw': function() {
      			$(this.i).val(this.cv + '%')
      		}
      	})
      });
      //carousel
      $(document).ready(function() {
      	$("#owl-slider").owlCarousel({
      		navigation: true,
      		slideSpeed: 300,
      		paginationSpeed: 400,
      		singleItem: true

      	});
      });
      //custom select box
      $(function() {
      	$('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
      	$('#map').vectorMap({
      		map: 'world_mill_en',
      		series: {
      			regions: [{
      				values: gdpData,
      				scale: ['#000', '#000'],
      				normalizeFunction: 'polynomial'
      			}]
      		},
      		backgroundColor: '#eef3f7',
      		onLabelShow: function(e, el, code) {
      			el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
      		}
      	});
      });
  </script>

  <!-- Sliderpage  -->
  <script type="text/javascript">
  	var carousel = document.querySelector('.carousel');
  	var flkty = new Flickity( carousel, {
  		imagesLoaded: true,
  		percentPosition: false,
  	});
  	var imgs = carousel.querySelectorAll('.carousel-cell img');
// get transform property
var docStyle = document.documentElement.style;
var transformProp = typeof docStyle.transform == 'string' ?
'transform' : 'WebkitTransform';

flkty.on( 'scroll', function() {
	flkty.slides.forEach( function( slide, i ) {
		var img = imgs[i];
		var x = ( slide.target + flkty.x ) * -1/3;
		img.style[ transformProp ] = 'translateX(' + x  + 'px)';
	});
});
</script>



</body>
</html>