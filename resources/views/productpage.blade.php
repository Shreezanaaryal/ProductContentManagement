@extends('layouts.layout')
@section('content')


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
 @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

        </div>
  @endif

<div class="form-style-10">
<h1>Product Details!<span>Put the Description of the Products!</span></h1>
<form action="{{url('productpagedb')}}" method="POST" enctype="multipart/form-data">
                    @csrf
    <div class="section"><span>1</span>Product Name &amp; Description</div>
    <div class="inner-wrap">
        <label>Product Name  <input type="text" name="product_name" /></label>
        <label>Product Description <textarea name="product_description" class="form-control" id="summary-ckeditor"></textarea></label>
    </div>

    <div class="section"><span>2</span>Product Category &amp; Price</div>
    <div class="inner-wrap">
    <label>Product Category
          <select name="category" onchange='checkvalue(this.value)'>
            <option value="HP">HP</option>
            <option value="LENOVO">Lenovo</option>
            <option value="ACER">Acer</option>
            <option value="MACBOOK" selected="selected">MacBook</option>
            <option value="Other">Other</option>
          </select>
          <input type="text" name="other" id="product_category" style='display:none'/>
<script type="text/javascript">
function checkvalue(val)
{
    if(val==="Other")
       document.getElementById('product_category').style.display='block';
    else
       document.getElementById('product_category').style.display='none'; 
}
</script>
         </label>
        <label>Product Price <input type="text" name="product_price" /></label>
    </div>

    <div class="section"><span>3</span>Upload Product Images</div>
        <div class="inner-wrap">
        <label>Product Image<input type="file" name="image" /></label>
    </div>
    <div class="button-section">
     <input type="submit" name="button" />
    </div>
</form>
</div>

@endsection('content')