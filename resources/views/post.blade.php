@extends('layouts.main')

@section('container')	
		<h1 class="mb-5">{{ $post["title"] }}</h1>
		<a href="{{ url('/dashboard/posts') }}" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to Posts</a>
		<br>
		{!! $post->body !!}
		
@endsection