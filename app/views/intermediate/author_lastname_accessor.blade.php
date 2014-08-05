@extends('layouts.master')

@section('content')
<ul>
	@foreach ($authors as $author)
		<li>{{ $author->last_name . ', ' . $author->first_name}}</li>
	@endforeach
</ul>
@stop