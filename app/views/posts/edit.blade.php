@extends('layouts.master')

@section('content')

{{Form::model($post, array('action' => ['PostsController@update' , $post->id],'class'=> 'form-horizontal', 'method' => 'put')) }}

{{Form::label('title', 'Title') }}
{{Form::text ('title') }}

{{Form::label('content', 'Content') }}
{{Form::text ('content') }}

{{Form::submit('Click to Update') }}
{{ Form::close() }}

@stop