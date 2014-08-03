@extends('layouts.master')

@section('content')
<ul>
	@foreach ($authors as $author)
		<li>{{ $author->first_name . ' ' . $author->last_name}}</li>
	@endforeach
</ul>
@stop