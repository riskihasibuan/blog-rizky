@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
	<article class="mb-5">
	<h2>
		<a href="{{ url(/posts/{{ $post["slug"] }}") }}">
	</h2>
	<h5>by:{{ $post["author"] }}</h5>
	<p>{{ $post["body"] }}</p>
	</article>
@endforeach

@endsection

