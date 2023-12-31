@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Category : {{ $categories }}</h1>

@foreach ($posts as $post)
<article class="mb-5">
	<h2>
		<a href="{{ url('/posts/'.$post['id']) }}">{{ $post["title"] }}</a>
	</h2>
	<p>{{ $post["excerpt"] }}</p>
</article>
@endforeach

@endsection