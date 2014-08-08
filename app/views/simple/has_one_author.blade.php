@extends('layouts.master')

@section('content')
<p>Post's Author Name:</p>

<p>{{ $author->first_name}} {{ $author->last_name}}</p>

@stop