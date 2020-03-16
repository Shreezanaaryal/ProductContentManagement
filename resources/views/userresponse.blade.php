@extends('layouts.layout')
@section('content')
<link rel="stylesheet" type="text/css" href="cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<script type="text/javascript" src="cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


<table id="example" class="display" style="width:100%;margin-top:50px;" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Product id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($userresponse as $usrresponse)
            <tr>
                <td>{{$usrresponse->id}}</td>
                <td>{{$usrresponse->first_name}}</td>
                <td>{{ $usrresponse->last_name }}</td>
                <td>{{$usrresponse->email}}</td>
                <td>{{$usrresponse->phone_no}}</td>
                <td>{{$usrresponse->message}}</td>

                <td><a href="{{route('deleteresponse',$usrresponse->id )}}" type="button" name="" value="Delete" class="btn btn-primary">DELETE</a></td>
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
          <tr>
            <th>Product id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Message</th>
                <th>Action</th>
                

            </tr>
        </tfoot>
    </table>
 <script type="text/javascript">
    $(document).ready( function () {
    $('#example').DataTable();
    });
</script>

  

@endsection