@extends('layouts.main')

@section('container')	
		<h1 class="mb-5">{{ $post["title"] }}</h1>

		<p>By.<a>Riski Hasibuan</a> in <a href="/categories/{{ $post->category->slug }}">{{$post->category->name}}</a></p>

		{!! $post->body !!}
	
	
		<a href="{{ url('/blog') }}" class="d-block mt-3">Back to Posts</a>

@endsection