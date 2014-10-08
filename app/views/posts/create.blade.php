@extends('layouts.master')

@section('content')

{{Form::open(array('action' => 'PostsController@store' , 'class'=> 'form-horizontal')) }}


	<label for='title'>Title:</label>
	<input type="text" name="title" value="{{{ Input::old('title') }}}">
    <label for="content">Content:</label>
    <input type="text" name="content" value="{{{ Input::old('content') }}}">
	<p>
    <input type="submit" value="Upload">
	</p>
   
	
	{{ Form::close() }}
	@stop
