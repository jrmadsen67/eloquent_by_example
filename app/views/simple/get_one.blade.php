@extends('layouts.master')

@section('content')
<p>{{ $post->title}}</p>
<p>{{ $post->body}}</p>
<p>{{ $post->status}}</p>
@stop
