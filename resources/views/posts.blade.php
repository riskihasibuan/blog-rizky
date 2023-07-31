@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">All Posts</h1>

<div class="row justify-content-center mb-3">
	<div class="col-md-6">
		<form action="/posts">
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Search.." name="search">
				<button class="btn btn-danger" type="submit">Search</button>
			</div>
		</form>
	</div>
</div>

@if ($posts->count())
<div class="card mb-3">
	<div class="row">
		<img src="https://source.unsplash.com/1200x400/?{{ $posts[0]['category']['name'] }}" class="card-img-top" alt="{{ $posts[0]['category']['name'] }}">
		<div class="card-body text-center">
			<h5 class="card-title">{{ $posts[0]['title'] }}</h5>
			<p>
				<small class="text-muted">
					By. <a href="{{ url('authors/'.$posts[0]->user->username) }}" class="text-decoration-none">
						@if(isset($posts[0]->user))
						{{ $posts[0]->user->name }}
						@endif
					</a> in
					<a href="{{ url('/categories/'.$posts[0]->category->slug) }}" class="text-decoration-none">
						@if(isset($posts[0]->category))
						{{ $posts[0]->category->name }}
						@endif
					</a>
					@if(isset($posts[0]->created_at))
					{{ $posts[0]->created_at->diffForHumans() }}
					@endif
				</small>
			</p>

			<p>{{ $posts[0]["excerpt"] }}</p>
			<a href="" class=" text-decoration-none btn btn-primary">Read more</a>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		@foreach ($posts->skip(1) as $post)
		<div class="col-md-4 mb-3">
			<div class="card">
				<div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)"><a href="{{ url('/categories/'.$post->category->slug) }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
				<img src="https://source.unsplash.com/200x100?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
				<div class="card-body">
					<h5 class="card-title">{{ $post->title }}</h5>
					<p>
						<small class="text-muted">
							html
							By. <a href="{{ url('authors/'. ($post->author->username ?? '')) }}" class="text-decoration-none">
								{{ $post->author->name ?? '' }}
							</a>{{ $post->created_at->diffForHumans() }}
						</small>
					</p>
					<p class="card-text">{{ $post->excerpt }}</p>
					<a href="{{ url('/posts/'.$post->slug) }}" class=" text-decoration-none btn btn-primary">Read more</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>


@else
<p class="text-center fs-4">No post found.</p>
@endif

@endsection