@extends('layouts.master')

@section('content')

<h4>Books</h4>
<ul>
	@foreach ($books as $book)
		<li>{{ $book->id}} - {{ $book->title}}</li>
	@endforeach
</ul>


@stop