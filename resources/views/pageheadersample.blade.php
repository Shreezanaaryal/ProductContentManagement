@extends('layouts.layout')
@section('content')

<nav class="navbar navbar-inverse">
  <img src="image/headersample1.jpg">
  </nav>
    <form action="headers/{headertype1}" method="post">
                @csrf
                <input type="hidden" value="headertype1" name="header">
                <input type="submit" value="choose Header " class="headerpagebutton">
            </form>
  <nav class="navbar navbar-inverse">
  <img src="image/headersample2.jpg">
  </nav>
  <form action="headers/{headertype2}" method="post">
                @csrf
                <input type="hidden" value="headertype2" name="header">
                <input type="submit" value="choose Header " class="headerpagebutton">
            </form>
 
  <nav class="navbar navbar-inverse">
  <img src="image/headersample3.jpg">
  </nav>
            <form action="headers/{headertype3}" method="post">
                @csrf
                <input type="hidden" value="headertype3" name="header">
                <input type="submit" value="choose Header " class="headerpagebutton">
            </form>
@endsection()