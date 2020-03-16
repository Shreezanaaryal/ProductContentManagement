<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{asset('NiceAdmin/img/favicon.png')}}">

  <title>My Project</title>
  <link rel="stylesheet" type="text/css" href="cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" src="cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">$(document).ready( function () {
    $('#example').DataTable();
  });
</script>


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
  <link rel="stylesheet" href="{{asset('NiceAdmin/css/owl.carousel.css')}}" type="text/css">
  <link href="{{asset('NiceAdmin/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">

  <!-- gallery -->
  <link rel="stylesheet" type="text/css" href="cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">


  <link href="{{asset('NiceAdmin/css/customforheader.css')}}" rel="stylesheet">

  <link  href="https://cdn.rawgit.com/fengyuanchen/cropper/v2.0.1/dist/cropper.min.css" rel="stylesheet">
  <script src="https://cdn.rawgit.com/fengyuanchen/cropper/v2.0.1/dist/cropper.min.js"></script>
  <script type="text/javascript" src="NiceAdmin/js/custom.js"></script>
  <script type="text/javascript" src="cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> </script>

  <!-- <link  href="https://cdn.rawgit.com/fengyuanchen/cropper/v2.0.1/dist/cropper.min.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/fengyuanchen/cropper/v2.0.1/dist/cropper.min.js"></script> -->


  </head>

  <body>
    <!-- container section start -->
    <section id="container" class="">


      <header class="header dark-bg">
        <div class="toggle-nav">
          <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="{{url('productpage')}}" class="logo">Product<span class="lite"> Content Management</span></a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">
          <!--  search form start -->
          <ul class="nav top-menu">
            <li>
              <form class="navbar-form">
                <input class="form-control" placeholder="Search" type="text">
              </form>
            </li>
          </ul>
        </div>

        <div class="top-nav notification-row">
          <ul class="nav pull-right top-menu">
            <!-- user login dropdown start-->
            <!-- <li class="dropdown"> -->

              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  
                <span class="profile-ava">
                  <img alt="" src="NiceAdmin/img/adminimage.jpg" width="50px" height="45px">
                </span>

                <span class="username">{{Auth::user()->name}}
                     <span class="username">
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                     Logout
                  </a>    
                  <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                  </form>
                 </span> 
                </span>


              </a>

              <!-- <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"><i class="icon_key_alt"></i> Log Out</a> 
              </li>
           </ul> -->
            </li>
            <!-- user login dropdown end -->
          </ul>
          <!-- notificatoin dropdown end-->
        </div>
    </header>
  </section>
  <!--header end-->

  <!--sidebar start-->
  <aside>
    <div id="sidebar" class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu">
        <li class="active">
          <a class="" href="index.html">
            <i class="icon_house_alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="{{url('pagelayout')}}" class="">
            <i class="icon_document_alt"></i>
            <span>Page Layout</span>
            <span class="menu-arrow arrow_carrot-right"></span>
          </a>
          
        </li>
        <li class="sub-menu">
          <a href="{{url('productpage')}}" class="">
            <i class="icon_document_alt"></i>
            <span>Product Page</span>
            <span class="menu-arrow arrow_carrot-right"></span>
          </a>
          <i class="icon-bell-l"></i>
          <span class="badge bg-important">7</span>
        </a>
      </li>
      <!-- alert notification end-->
      <!-- user login dropdown start-->
     
     
       
      <!-- user login dropdown end -->
    </ul>
    <!-- notificatoin dropdown end-->
  </div>
</header>
</section>
<!--header end-->

<!--sidebar start-->
<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu">
      <li class="active">
        <a class="" href="viewpage?pcm={{ Auth::user()->id }}" target="_blank">
          <i class="fa fa-spinner"></i>
          <span>Visit Site</span>
        </a>
      </li>
      <li class="active">
        <a class="" href="{{url('home')}}">
          <i class="icon_house_alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="{{url('pagelayout')}}" class="">
          <i class="fa fa-object-group"></i>
          <span>Page Layout</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        
      </li>
      <li class="sub-menu">
        <a href="{{url('homepage')}}" class="">
          <i class="fa fa-institution"></i>
          <span>Homepage</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
           <!--  <ul class="sub">
              <li><a class="" href="form_component.html">Product Page</a></li>
            </ul> -->
          </li>
          <li class="sub-menu">
            <a href="{{url('productpage')}}" class="">
              <i class="fa fa-cubes"></i>
              <span>Product</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="{{url('deleteproduct')}}" class="">
              <i class="fa fa-delete"></i>
              <span>Delete Product</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
          </li>
          <li>
            <a class="" href="chart-chartjs.html">
              <i class="icon_piechart"></i>
              <span>Review</span>
            </a>
          </li>
          <li>
            <a class="" href="{{url('upload-image')}}">
              <i class="fa fa-photo"></i>
              <span>Gallery</span></a>
            </li>
            <li>
              <a class="" href="{{url('contactus')}}">
                <i class="fa fa-photo"></i>
                <span>Contact Us</span></a>
              </li>
               <li>
              <a class="" href="{{url('userresponse')}}">
                <i class="glyphicon glyphicon-sunglasses"></i>
                <span>User Response</span></a>
              </li>
            </ul>
            <!-- sidebar menu end-->
          </div>
        </aside>
      </section>

      <section id="main-content">
        <section class="wrapper">

          @yield('content')
          @yield('formcontent')

        </section>
      </section>
      <script type="text/javascript" src="js/flick.js"></script>
      <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
      <script type="text/javascript" src="js/jssor.slider-27.4.0.min.js"></script>
    </section>
  </section>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/flickity.pkgd.min.js"></script>
  <script type="text/javascript" src="js/flickity-pkgd.js"></script>
  <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <script src="js/jssor.slider-27.4.0.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="{{asset('NiceAdmin/js/custom.js')}}"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script type="text/javascript" src="js/flick.js"></script>
  <script src="{{asset('NiceAdmin/js/jquery.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/jquery.autosize.min.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/jquery-ui-1.10.4.min.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/jquery-1.8.3.min.js')}}"></script>
  <script type="{{asset('NiceAdmin/text/javascript" src="js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('NiceAdmin/')}}"></script>
  <!-- bootstrap -->
  <script src="{{asset('NiceAdmin/js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{asset('NiceAdmin/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{asset('NiceAdmin/assets/jquery-knob/js/jquery.knob.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/jquery.sparkline.js" type="text/javascript')}}"></script>
  <script src="{{asset('NiceAdmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
  <!-- jQuery full calendar -->
  <script src="{{asset('NiceAdmin/js/fullcalendar.min.js')}}"></script>

  <!-- Full Google Calendar - Calendar -->
  <script src="{{asset('NiceAdmin/assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
  <!--script for this page only-->
  <script src="{{asset('NiceAdmin/js/calendar-custom.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/jquery.rateit.min.js')}}"></script>
  <!-- custom select -->
  <script src="{{asset('NiceAdmin/js/jquery.customSelect.min.js')}}"></script>
  <script src="{{asset('NiceAdmin/assets/chart-master/Chart.js')}}"></script>

  <!--custome script for all page-->
  <script src="{{asset('NiceAdmin/js/scripts.js')}}"></script>
  <!-- custom script for this page-->
  <script src="{{asset('NiceAdmin/js/sparkline-chart.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/easy-pie-chart.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/jquery-jvectormap-world-mill-en.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/xcharts.min.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/jquery.autosize.min.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/jquery.placeholder.min.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/gdp-data.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/morris.min.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/sparklines.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/charts.js')}}"></script>
  <script src="{{asset('NiceAdmin/js/jquery.slimscroll.min.js')}}"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

  <script src="js/dragdrop.js-master/dist/dragdrop.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    $("#image-file").fileinput({
      theme: 'fa',
      uploadUrl: "{{route('image.upload')}}",
      uploadExtraData: function() {
        return {
          _token: "{{ csrf_token() }}",
        };
      },
      allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
      overwriteInitial: false,
      maxFileSize:2048,
      maxFilesNum: 10
    });
  </script>

  <script>
    new dragdrop.start((dom, api) => {
      dom.addEventListener('drop', (event) => {
        console.log( api.orders );
      })
    });
  </script>

  <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

  <script>

    CKEDITOR.replace( 'summary-ckeditor' );

  </script>


  <script type="text/javascript" src="js/bower_components/bootstrap-fileinput/js/fileinput.min.js">
    <script type="text/javascript" src="NiceAdmin/js/custom.js"></script>   
  </script>



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

    <!-- Sliderpage -->
    <script type="text/javascript">
      $(document).ready(function(){
       $("#menu button a").on('click',function(e){
         e.preventDefault();
         var page = $(this).data('page');
         $("#pages .page:not('.hide')").stop().fadeOut('fast',
          function()
          {
            $(this).addClass('hide');
            $('#pages .page[data-page='+page+']').fadeIn('slow').removeClass('hide');
          });
       });
     });
   </script>
   <style type="text/css">
   .hide
   {
    display : none;
  }
</style>


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
