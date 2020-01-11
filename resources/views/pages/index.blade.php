@extends('layouts.app')

@section('menus')
@include('pages.menus')
@endsection
@section('content')
<div id="user-img">
        <img src="images/user.gif">
    </div>
    <div id="user-det">
        <h2 id="name">Abhinay Guduri</h2><br>
        <a href="mailto:guduriabhinay@gmail.com"><h3 id="email"><i id="det-icon" class="fa fa-envelope"></i> guduriabhinay@gmail.com</h3></a>
        <br>
        <a href="tel:+918978539221"><h3 id="email"><i id="det-icon" class="fa fa-phone"></i> +91 8978539221</h3></a>
        <div onclick="window.open(
'https://instagram.com/guduriabhinay/',
'_blank' // <- This is what makes it open in a new window.
);" id="insta">
            <h3><i class="fa fa-instagram" id="det-icon"></i> Follow<h3>
        </div>
    </div>
@endsection
