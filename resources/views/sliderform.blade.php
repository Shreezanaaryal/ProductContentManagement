@extends('layouts.layout')
@section('content')

<div class="container">
    <h2 class="text-center">Upload Images for Slider</h2>
    <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6 pb-5">
    <div class="panel panel-primary">

        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

        </div>

        <img src="{{ Session::get('images') }}">

        @endif
        @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>


        @endif



                    <!--Form with header-->
        <form action="{{url('sliderformdb')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card border-primary rounded-0">
                <div class="card-header p-0">
                    <div class="bg-info text-white text-center py-2">
                        <h3><i class="fa fa-envelope"></i> Upload Image</h3>
                            <p class="m-0">Also write Description</p>
                    </div>
                </div>
            <div class="card-body p-3">
                         <!--Body-->
            <div class="form-group">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><h4> Heading </h4></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="heading">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"> <h4> Description </h4></div>
                                        </div>
                                       <textarea class="form-control" id="summary-ckeditor" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"> <h4> Upload Images</h4></div>
                                        </div>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="submit" class="btn btn-success">
                                </div>
                            </div>

            </div>
        </form>
    </div>
    </div>
</div>



           <!--Form with header-->
       
        @if(!empty(Session::get('imgs')))

        @foreach (Session::get('imgs') as $img)
             <img src= '{{ $img->image }}' height="250px" width="250" />


        @endforeach
        @endif

</div>

@endsection('content')