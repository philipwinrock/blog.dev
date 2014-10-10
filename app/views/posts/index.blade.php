@extends('layouts.master')
@section('content')
@foreach($posts as $post)
<h3><a href="{{{action('PostsController@show', $post->id)}}}">{{{ $post->title }}}</a></h2>
<h3><a href="{{{action('PostsController@edit', $post->id)}}}">click to edit</a></h2>
	{{Form::open(['method'=>'DELETE', 'action'=>['PostsController@destroy' , $post->id]]) }}
	<button type ="submit">Delete</button>
	{{Form::close()}}
<h3>Body:{{{ $post->content }}}</h3>
@endforeach
@stop 