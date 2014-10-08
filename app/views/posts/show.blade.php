@extends('layouts.master')
@section('content')

<h2>Title {{{ $post->title }}}</h2>
<p> Body{{{ $post->content }}}</p>

@stop