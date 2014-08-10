@extends('layouts.master')

@section('content')
<p>{{ $author->first_name . ' ' . $author->last_name }}</p>

<p>{{ $author->full_name }}</p>
@stop