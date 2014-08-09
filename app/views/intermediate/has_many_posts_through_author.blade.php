@extends('layouts.master')

@section('content')

<h4>Posts for Country: {{ $country->country}}</h4>
<ul>
	@foreach ($country->posts as $post)
		<li>{{ $post->id}} - {{ $post->title}}</li>
	@endforeach
</ul>


@stop