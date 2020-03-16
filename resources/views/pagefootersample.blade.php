@extends('layouts.layout')
@section('content')

<nav class="navbar navbar-inverse">
	<img src="image/footer1.jpg">
</nav>
 <form action="pagefooter/{footertype1}" method="post">
                @csrf
                <input type="hidden" value="footertype1" name="footer">
                <input type="submit" value="Use It " class="headerpagebutton">
            </form>
<nav class="navbar navbar-inverse">
	<img src="image/footer2.jpg">
</nav>
 <form action="pagefooter/{footertype2}" method="post">
                @csrf
                <input type="hidden" value="footertype2" name="footer">
                <input type="submit" value="Use It " class="headerpagebutton">
            </form>

@endsection()