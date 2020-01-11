@extends('layouts.app')

@section('menus')
@include('pages.menus')
@endsection

@section('content')
<h3 style="color: red; height: auto;">Add Menu</h3>
<div id="user-det">
    {!! Form::open(['action'=>'MenusController@store', 'method'=>'POST']) !!}
        <h3 style="height: auto;">Enter Menu Name:</h3>
        {{Form::text('name','',['id'=>'ibox', 'required'=>''])}}<br>
        {{Form::submit('Submit',['id'=>'ibut'])}}
    {!! Form::close() !!}
    
</div>
@endsection