@extends('layouts.master')

@section('content')
<p>{{ $author->first_name . ' ' . $author->last_name }}</p>

<h4>Posts</h4>
<ul>
	@foreach ($author->posts as $post)
		<li>{{ $post->title}}</li>
	@endforeach
</ul>

@stop
