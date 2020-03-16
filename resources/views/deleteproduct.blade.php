@extends('layouts.layout')
@section('content')
<link rel="stylesheet" type="text/css" href="cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" src="cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<table id="example" class="display" style="width:100%;margin-top:50px;">
        <thead>
            <tr>
                <th>Product id</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Category</th>
                <th>Product Price</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
        	@foreach($deleteproduct as $delproduct)
            <tr>
                <td>{{$delproduct->id}}</td>
                <td>{{$delproduct->product_name}}</td>
                <td>{!! $delproduct->product_description !!}</td>
                <td>{{$delproduct->product_category}}</td>
                <td>{{$delproduct->product_price}}</td>

                <td><a href="{{route('delete',$delproduct->id )}}" type="button" name="" value="Delete" class="btn btn-primary">DELETE</a></td>
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
          <tr>
               <th>Product id</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Category</th>
                <th>Product Price</th>
                <th>Action</th>

            </tr>
        </tfoot>
    </table>

 <script type="text/javascript">$(document).ready( function () {
    $('#example').DataTable();
	});
</script>
  

@endsection