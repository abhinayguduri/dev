@extends('layouts.app')

@section('menus')
@include('pages.menus')
@endsection

@section('content')
<h3 style="color: red; height: auto;">Add Sub-Menu</h3>
<div id="user-det">
        {!! Form::open(['action'=>'SubmenusController@store', 'method'=>'POST']) !!}
        <input type="hidden" name="fds" value = "smenu">
        <input type="hidden" name="content" value = "something">
        <h3 style="height: auto;">Enter Sub-Menu Name:</h3>
        {{Form::text('name','',['id'=>'ibox', 'required'=>''])}}<br><br>
        <h3 style="height: auto;">Choose Parent:</h3>
        {{Form::select('menu',$items, null,['id' => 'ibox','placeholder'=>'Choose a Menu','required'=>''])}}<br>
        {{Form::submit('Submit',['id'=>'ibut'])}}
        {!! Form::close() !!}
        {{-- <form id="form" action="" method="POST">
        <h3 style="height: auto;">Enter Sub-Menu Name:</h3>
    <input type="text" name="name" id="ibox"><br><br>
    <h3 style="height: auto;">Choose Parent:</h3>
    <select id="ibox" style="background-color: white;">
        <option value="">Choose 1</option>
         <option value="volvo">Volvo</option>
         <option value="saab">Saab</option>
         <option value="mercedes">Mercedes</option>
         <option value="audi">Audi</option>
</select><br>
    <input type="submit" name="submit" id="ibut">

    </form> --}}
</div>
@endsection