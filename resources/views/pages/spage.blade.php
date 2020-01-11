@extends('layouts.app')

@section('menus')
@include('pages.menus')
@endsection
@section('content')
<h2 style="height:auto;">{{$scontent->name}}</h2><br><br>
<h3 style="height:auto;">{{$scontent->content}}</h3>
@endsection
