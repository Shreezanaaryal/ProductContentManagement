<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="public/NiceAdmin/img/favicon.png">

  <title>My Project</title>

  <!--   sliderform -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Product Pages -->

  <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">
  <!--  sliderview -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>

  <link rel="stylesheet" type="text/css" href="css/flickity.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" type="text/css" href="{{asset('css/dragdrop.css')}}">
  <!-- <link href="{{asset('NiceAdmin/css/custom.css')}}" rel="stylesheet"/> -->
  <!-- Bootstrap CSS -->
  <link href="{{asset('NiceAdmin/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- bootstrap theme -->
  <link href="{{asset('NiceAdmin/css/bootstrap-theme.css')}}" rel="stylesheet"/>
  <link href="{{asset('NiceAdmin/css/bootstrap-datepicker.css')}}" rel="stylesheet"/>
  <link href="{{asset('NiceAdmin/css/bootstrap-colorpicker.css')}}" rel="stylesheet"/>
  <!--external css-->
  <!-- font icon -->
  <link href="{{asset('NiceAdmin/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{asset('Niceadmin/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{asset('NiceAdmin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{asset('NiceAdmin/assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{asset('NiceAdmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <!-- Custom styles -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}"/>
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="{{asset('NiceAdmin/css/widgets.css')}}" rel="stylesheet">
  <link href="{{asset('NiceAdmin/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('NiceAdmin/css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('NiceAdmin/css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{asset('NiceAdmin/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
  <link href="{{asset('NiceAdmin/css/customforheader.css')}}" rel="stylesheet">
  <!-- <link  href="https://cdn.rawgit.com/fengyuanchen/cropper/v2.0.1/dist/cropper.min.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/fengyuanchen/cropper/v2.0.1/dist/cropper.min.js"></script> -->


  </head>

  <body>
   <header>
     @foreach($websites as $web)
     @if($web->header == 'headertype1')

     <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header" style="margin-left: 1500px; margin-top: 1500px;">
            <p style="margin-left: 1500px"></p>
          </div>
          <!-- //remaining left hand sif=de menu header -->
          <div class="navbar-collapse collapse" style="margin-left: 1500px;">
            <div class="menu">

              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="index?id={{app('request')->input('pcm')}}" class="active">Home</a></li>
                <li role="presentation"><a href="#">About Us</a></li>
                <li role="presentation"><a href="services.html">Services</a></li>

                <li role="presentation"><a href="portfolio.html">Portfolio</a></li>
                <li role="presentation"><a href="blog.html">Blog</a></li>
                <li role="presentation"><a href="contact.html">Contact</a></li>


                <li role="presentation"><a href="{{url('productviewpage')}}">Product</a></li>
                <li role="presentation"><a href="{{url('galleryimage')}}">Gallery</a></li>
                <li role="presentation"><a href="{{url('contactuss')}}">Contact</a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- Second Header -->
    <!--Navbar-->
    @elseif($web->header == 'headertype3')

    <nav class="navbar navbar-expand-lg navbar-dark primary-color">

     <div class="container" style="color:black">

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse justify-content-center font-weight-bold" id="basicExampleNav">

      <!-- Links -->
      <ul class="navbar-nav">
        @foreach($introduction as $intro)
        <li class="nav-item">
          <a class="nav-link" href="index?pcm={{app('request')->input('pcm')}}"><h4><p style="color:#000; font-weight: bold">{!! $intro->Org_Name !!}</p></h4></a>
        </li>
        @endforeach
        <li class="nav-item">
          <a class="nav-link" href="index?pcm={{app('request')->input('pcm')}}"><h4><p style="color:black;font-weight: bold">Home</p></h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus?pcm={{app('request')->input('pcm')}}"><h4><p style="color:black;font-weight: bold">About Us</p></h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="productviewpage?pcm={{app('request')->input('pcm')}}"><h4><p style="color:black;font-weight: bold">Product</p></h4></a>
        </li>

      </ul>
      <!-- Links -->

      <!-- Navbar brand -->
      @foreach($introduction as $intro)
      <a class="navbar-brand px-lg-4 mr-0" href="#">
       <img src="image/Header/{{$intro->logo}}" height="35" alt="">
     </a>
     @endforeach

     <!-- Links -->
     <ul class="navbar-nav">
       <li class="nav-item">
        <a class="nav-link" href="#"><h4><p style="color:black;font-weight: bold">Blog</p></h4></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="galleryimage?pcm={{app('request')->input('pcm')}}"><h4><p style="color:black;font-weight: bold">Gallery</p></h4></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactuss?pcm={{app('request')->input('pcm')}}"><h4><p style="color:black;font-weight: bold">Contact Us</p></h4></a>
      </li>
                  <li role="presentation"><a href="index?id={{app('request')->input('pcm')}}" class="active">Home</a></li>
                  <li role="presentation"><a href="#">About Us</a></li>
                  <li role="presentation"><a href="services.html">Services</a></li>

                  <li role="presentation"><a href="portfolio.html">Portfolio</a></li>
                  <li role="presentation"><a href="blog.html">Blog</a></li>
                  <li role="presentation"><a href="contact.html">Contact</a></li>


                  <li role="presentation"><a href="{{url('productviewpage')}}">Product</a></li>
                  <li role="presentation"><a href="{{url('galleryimage')}}">Gallery</a></li>
                  <li role="presentation"><a href="{{url('contactuss')}}">Contact</a></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
      @endif
      @endforeach

      <li class="nav-item" style="margin-left: 500px;">
        @foreach($introduction as $social)
        <a class="'nav-link" href="$social->fblink"><img src="image/facebook.png" width="30px" height="25px"></a>
        <a class="'nav-link" href="{{url('$social->Instalink')}}"><img src="image/instagram.jpg" width="30px" height="25px"></a>
        <br>
        @endforeach

        @foreach($header as $headers)
        {{$headers->Contact_No}}
        @endforeach

      </li>
    </ul>
    <!-- Links -->

  </div>

</nav>

<!--/.Navbar-->
</header>

<section id="main-slider" class="no-margin">
  <!-- for slider type 1 -->

  <!-- for if (website->header== header1 ) -->
  @foreach($websites as $web)
  @if($web->slider == 'slider1')
  <div class="carousel" data-carousel-options='{ "wrapAround" : true }'>
    @foreach($images as $imgslider)
    <div class="carousel-cell">
      <img src= "{{$imgslider->image}}" />
    </div>
    @endforeach
  </div>
  @elseif($web->slider == 'slider2')
  <div style="position:relative;top:0;left:0;width:100%;height:100%;overflow:hidden;">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1366px;height:768px;overflow:hidden;visibility:hidden;">
      <!-- Loading Screen -->
      <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
      </div>
      <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1366px;height:768px;overflow:hidden;">
        @foreach($images as $imgslider)
        <div>
          <img data-u="image" src="{{ $imgslider->image }}" />
          <div data-ts="flat" data-p="150" style="position:absolute;top:184px;left:283px;width:800px;height:400px;overflow:hidden;">
            <div data-u="caption" data-t="1" style="position:absolute;top:214px;left:164px;width:461px;height:28px;font-size:23px;font-weight:500;color:#ffffff;line-height:1;letter-spacing:0.05em;text-align:center;">
              <div>{!! $imgslider->description !!}</div>
            </div>
            <div data-u="caption" data-t="2" style="position:absolute;top:97px;left:71px;width:658px;height:92px;font-size:73px;font-weight:900;color:#ffffff;line-height:1.1;letter-spacing:0.05em;text-align:center;">
              <div>{{$imgslider->heading}}</div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <!-- Bullet Navigator -->
      <div data-u="navigator" class="jssorb064" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:16px;height:16px;">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
          </svg>
        </div>
      </div>
      <!-- Arrow Navigator -->
      <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
          <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
      </div>
      <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
          <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
      </div>
    </div>
  </div>
  @endif
  @endforeach
</section>
<!--/#main-slider-->


<div class="about">
  <div class="row">
    <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
      <h2>About us</h2>
      @foreach($header as $head)

      {!! $head->Aboutus !!}
      @endforeach
    </div>

    <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
      <h2>Introduction</h2>
      @foreach($header as $intro)
      {!! $intro->Home_Intro !!}
      @endforeach
    </div>
  </div>
</div>

<div class="feature">
  <div class="container">
    <div class="text-center">
      @foreach($products as $product)
      <div class="col-md-3">
        <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fa fa-book"></i>
          <p> <img src="{{ $product->product_image }}"/> </p>
          <h2> {{ $product->product_name}}</h2>
          <p> {!! $product->product_description !!}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>



<section id="partner">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2> Our Team</h2>
      <p>Teamwork is the ability to work together toward a common vision. The ability to direct individual accomplishments toward organizational objectives. It is the fuel that allows common people to attain uncommon results.</p>
    </div>
    <div class="feature">
      <div class="container">
        <div class="text-center">
          @foreach($addmember as $member)

          <div class="col-md-3">
            <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <i class="fa fa-book"></i>
              <p "> <img src=" image/addmember/{{ $member->ppimage }}" style="border-radius: 50%";/>
              </p>
              <h2> {{ $member->Name}}</h2>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <!--/.container-->
</section>
<!--/#partner-->

<section id="conatcat-info">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="pull-left">
            <i class="fa fa-phone"></i>
          </div>
          <div class="media-body">
            <h2>Have a question or need a custom quote?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.container-->
</section>
<!--/#conatcat-info-->

<footer>
  <div class="footer">
    <div class="container">
      <div class="social-icon">
        <div class="col-md-4">
          <ul class="social-network">
            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
        </div>
      </div>


      <div class="pull-right">
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
      </div>
    </div>
  </footer>



  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="{{asset('js/flickity.pkgd.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/flickity-pkgd.js')}}"></script>
  <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <script src="js/jssor.slider-27.4.0.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="NiceAdmin/js/custom.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script type="text/javascript" src="js/flick.js"></script>
  <script src="NiceAdmin/js/jquery.js"></script>
  <script src="NiceAdmin/js/jquery-ui-1.10.4.min.js"></script>
  <script src="NiceAdmin/js/jquery-1.8.3.min.js"></script>
  <script type="NiceAdmin/text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="NiceAdmin/"></script>
  <!-- bootstrap -->
  <script src="NiceAdmin/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="NiceAdmin/js/jquery.scrollTo.min.js"></script>
  <script src="NiceAdmin/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="NiceAdmin/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="NiceAdmin/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="NiceAdmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <!-- jQuery full calendar -->
  <script src="NiceAdmin/js/fullcalendar.min.js"></script>
  <!-- Full Google Calendar - Calendar -->
  <script src="NiceAdmin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
  <!--script for this page only-->
  <script src="NiceAdmin/js/calendar-custom.js"></script>
  <script src="NiceAdmin/js/jquery.rateit.min.js"></script>
  <!-- custom select -->
  <script src="NiceAdmin/js/jquery.customSelect.min.js"></script>
  <script src="NiceAdmin/assets/chart-master/Chart.js"></script>
  <script type="text/javascript" src="NiceAdmin/js/owl.carousel.js"></script>
  <!--custome script for all page-->
  <script src="NiceAdmin/js/scripts.js"></script>
  <!-- custom script for this page-->
  <script src="NiceAdmin/js/sparkline-chart.js"></script>
  <script src="NiceAdmin/js/easy-pie-chart.js"></script>
  <script src="NiceAdmin/js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="NiceAdmin/js/jquery-jvectormap-world-mill-en.js"></script>
  <script src="NiceAdmin/js/xcharts.min.js"></script>
  <script src="NiceAdmin/js/jquery.autosize.min.js"></script>
  <script src="NiceAdmin/js/jquery.placeholder.min.js"></script>
  <script src="NiceAdmin/js/gdp-data.js"></script>
  <script src="NiceAdmin/js/morris.min.js"></script>
  <script src="NiceAdmin/js/sparklines.js"></script>
  <script src="NiceAdmin/js/charts.js"></script>
  <script src="NiceAdmin/js/jquery.slimscroll.min.js"></script>

  <!-- <script type="text/javascript" src="js/bower_components/bootstrap-fileinput/js/fileinput.min.js"> -->
    <script>
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

    <script src="js/dragdrop.js-master/dist/dragdrop.js"></script>

    <script>
      new dragdrop.start((dom, api) => {
        dom.addEventListener('drop', (event) => {
          console.log( api.orders );
        })
      });
    </script>
    <script type="text/javascript" src="js/bower_components/bootstrap-fileinput/js/fileinput.min.js"> </script>
    <script type="text/javascript" src="NiceAdmin/js/custom.js"> </script>
    <!-- Sliderpage -->

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