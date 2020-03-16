@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    
    <div class="container">
        
        
            <h3 class="text-muted">You can change the positions of the pictures.</h3>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="dragdrop-target">
                    <img src="nature.jpg" class="img-responsive dragdrop" data-id="1">
                </div>
            </div>
            <div class="col-md-3">
                <div class="dragdrop-target">
                    <img src="nature2.jpg" class="img-responsive dragdrop" data-id="2">
                </div>
            </div>
            <div class="col-md-3">
                <div class="dragdrop-target">
                    <img src="nature3.jpg" class="img-responsive dragdrop" data-id="3">
                </div>
            </div>
            <div class="col-md-3">
                <div class="dragdrop-target">
                    <img src="nature4.jpg" class="img-responsive dragdrop" data-id="4">
                </div>
            </div>
        </div>
    </div>
    
    <!-- github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    
</body>
</html>











@endsection('content')