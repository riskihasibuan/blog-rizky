@extends('layouts.main')

@section('container')
	<h1 class="mb-5">All Posts</h1>

@if ($posts->count())
	<div class="card mb-3">
		<img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
		<div class="card-body text-center">
			<h3 class="card-title"><a href="{{ url('/posts/'.$posts[0]['id']) }}" class="text-decoration-none text-dark"> {{ $posts[0]->title }}</a></h3>
		<p>
			<small class="text-muted">
			By. <a href="{{ url('authors/'.$posts[0]->user->username) }}"
			class=" text-decoration-none">{{ $posts[0]->user->name }}</a> in <a href="{{ url('/
			categories/'.$posts[0]->category->slug) }}" class="text-decoration-none">{{ $posts[0]
			->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
			</small>
		</p>
			<p>{{ $posts[0]["excerpt"] }}</p>

			<a href="{{ url('/posts/'.$posts[0]['id']) }}" class=" text-decoration-none btn btn-primary">Read more</a>

		</div>
	</div>
@else
		<p class="text-center fs-4">No post found.</p>
@endif
<div class="container">
	<div class="row">
		@foreach ($posts->skip(1) as $post)

		<div class="col-md-4">
			<div class="card" >
  				<img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
  				<div class="card-body">
    				<h5 class="card-title">{{ $post->title }}</h5>
					<p>
						<small class="text-muted">
							By. <a href="{{ url('authors/'.$posts[0]->user->username) }}"
							class=" text-decoration-none">{{ $posts->author->name }}</a> {{ $posts[0]
							->created_at->diffForHumans() }}
						</small>
					</p>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>


@foreach ($posts->skip(1) as $post)
	<article class="mb-5 border-bottom pb-3">
		<h2><a href="{{ url('/posts/'.$post->slug) }}" class="text-decoration-none">{{ $post["title"] }}</a></h2>

		<p>By. <a href="{{ url('authors/'.$post->user->username) }}" class=" text-decoration-none">{{ $post->user->name }}</a> in <a href="{{ url('/categories/'.$post->category->slug) }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
		<p>{{ $post["excerpt"] }}</p>

		<a href="{{ url('/posts/'.$post['id']) }}" class=" text-decoration-none">Read more..</a>

	</article>
@endforeach

@endsection