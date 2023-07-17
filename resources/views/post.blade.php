@extends('layouts.main')

@section('container')	
		<h1>{{ $post["title"] }}</h1>

		{!! $post->body !!}
	
	
<a href="{{ url('/blog') }}">Back to Posts</a>

@endsection