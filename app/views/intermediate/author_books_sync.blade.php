@extends('layouts.master')

@section('content')
<p>{{ $author->first_name . ' ' . $author->last_name }}</p>

<h4>Books</h4>
<ul>
	@foreach ($author->books as $book)
		<li>{{ $book->id}} - {{ $book->title}}</li>
	@endforeach
</ul>


@stop