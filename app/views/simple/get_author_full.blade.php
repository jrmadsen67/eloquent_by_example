@extends('layouts.master')

@section('content')
<p>{{ $author->first_name . ' ' . $author->last_name }}</p>

<h4>Posts</h4>
<ul>
	@foreach ($author->posts as $post)
		<li>{{ $post->title}}</li>
	@endforeach
</ul>


<h4>Posts - Published</h4>
<p>(Not really a good way to set up your blades)</p>
<ul>
	@foreach ($author->posts()->whereStatus('published')->get() as $post)
		<li>{{ $post->title}}</li>
	@endforeach
</ul>

@stop
