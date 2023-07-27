@extends('layouts.main')

@section('container')
<h1 class="mb-5">All Posts</h1>

@if ($posts->count())
<div class="card mb-3">
	<img src="https://source.unsplash.com/1200x400/?{{ $posts[0]['category']['name'] }}" class="card-img-top" alt="{{ $posts[0]['category']['name'] }}">
	<div class="card-body text center">
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

	</div>
</div>
@else
<p class="text-center fs-4">No post found.</p>
@endif
<div class="container">
	<div class="row">
		@foreach ($posts->skip(1) as $post)

		<div class="col-md-4 mb-3">
			<div class="card">
				<img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
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
					<p>{{ $post->excerpt }}</p>

					<a href="{{ url('/posts/'.$post->slug) }}" class=" text-decoration-none btn btn-primary">Read more</a>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>


@endsection