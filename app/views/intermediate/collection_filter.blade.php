@extends('layouts.master')

@section('content')

<h4>Books</h4>
<ul>
	@foreach ($books as $book)
		<li>{{ $book->id}} - {{ $book->title}} Random number: {{ $book->random}} </li>
	@endforeach
</ul>


@stop