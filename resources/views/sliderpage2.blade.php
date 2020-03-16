 @extends('layouts.layout')
@section('content')

<div class="row">
    <div class="col-md-4">
       <a href="{{url('slidertype1')}}"> <button type="button" class="sliderpagebutton" id="button">  Slider Type1  </button> </a>
    </div>
    <div class="col-md-4">
        <a href="{{url('slidertype2')}}"><button type="button" class="sliderpagebutton">Slider Type 2</button> </a>
 </div>
</div>

 <h2> <b> Full Width Slider </b> </h2>
     <div style="position:relative;top:0;left:0;width:100%;height:100%;overflow:hidden;">
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1366px;height:768px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1366px;height:768px;overflow:hidden;">
                @foreach($images as $img)
                    <div>
                        <img data-u="image" src="{{ $img->image }}" />
                        <div data-ts="flat" data-p="150" style="position:absolute;top:184px;left:283px;width:800px;height:400px;overflow:hidden;">
                            <div data-u="caption" data-t="1" style="position:absolute;top:214px;left:164px;width:461px;height:28px;font-size:23px;font-weight:500;color:#ffffff;line-height:1;letter-spacing:0.05em;text-align:center;">
                                <div>{!! $img->description !!}</div>
                            </div>
                            <div data-u="caption" data-t="2" style="position:absolute;top:97px;left:71px;width:658px;height:92px;font-size:73px;font-weight:900;color:#ffffff;line-height:1.1;letter-spacing:0.05em;text-align:center;">
                                <div>{{$img->heading}}</div>
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
<div class="row">
    <div class="col-md-6">
        <div class="button-section" style="margin-top: 50px;">
            <h1> <b>Choose Images for Your Slider </b> </h1>
            <form action="sliderform/slider2" method="post">
                @csrf
                <input type="hidden" value="slider2" name="slider">
                <input type="submit" value="choose slider " class="headerpagebutton">
            </form>
        </div>
    </div>
</div>


@endsection('content')