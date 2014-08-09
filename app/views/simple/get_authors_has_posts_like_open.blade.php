@extends('layouts.master')

@section('content')
@foreach ($authors as $author)

	<p>{{ $author->first_name . ' ' . $author->last_name }}</p>

	<h4>Posts</h4>
	<ul>
		<?php $i = 0; ?>
		@foreach ($author->posts as $post)
			<?php $i++; ?>
			<li>{{$i}} - {{ $post->title}}</li>
		@endforeach
	</ul>

@endforeach