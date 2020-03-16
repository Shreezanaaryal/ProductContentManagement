@extends('layouts.layout')
@section('content')
<main class="page">

	<h4 style="margin-left:-200px; ">Upload your Organization logo</h4><br>

	<!-- input file -->
  <form action="{{url('/headers')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="box">
      <input type="file" id="file-input" name="orglogo" onClick="javascript:test();">
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

 </main>
 <div class="row">
  <div class="col-md-6 col-sm-12 col-xs-12">
    <div class="form-group">
      <label>Organization name <small>( संस्थाको नाम )</small> :    </label>
      <textarea class="form-control" id="summary-ckeditor" name="Organization_Name"></textarea>
    </div>
  </div>
  <div class="col-md-6 col-sm-12 col-xs-12">
    <div class="container-fluid">
      <div class="form-group">
        <label>Facebook Link <small>( Copy & paste your Facebook profile URL )</small> :    </label>
        <input class="form-control" type="text" name="Facebooklink" id="Facebooklink">
        @if ($errors->has('Facebooklink'))
        <span class="text-danger">{{ $errors->first('Facebooklink') }}</span>
        @endif
      </div>

      <div class="form-group">
        <label>Instagram Link <small>( Copy & paste your instagram profile URL )</small> :    </label>
        <input class="form-control" type="text" name="instalink" id="insta">
        @if ($errors->has('instalink'))
        <span class="text-danger">{{ $errors->first('insatlink') }}</span>
        @endif
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
      </form>
    </div>
  </div>
</div>


@endsection()
