@extends('layouts.main')

@section('container')
<h1 class="mb-5">Halaman Blog Posts</h1>

@foreach ($posts as $post)
<article class="mb-5 border-bottom pb-3">
	<h2><a href="{{ url('/posts/'.$post->slug) }}" class="text-decoration-none">{{ $post["title"] }}</a></h2>

	<p>By. <a href="{{ url('authors/'.$post->user->username) }}" class=" text-decoration-none">{{ $post->user->name }}</a> in <a href="{{ url('/categories/'.$post->category->slug) }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
	<p>{{ $post["excerpt"] }}</p>

	<a href="{{ url('/posts/'.$post['id']) }}" class=" text-decoration-none">Read more..</a>

</article>
@endforeach

@endsection