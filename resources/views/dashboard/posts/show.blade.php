@extends('dashboard.layouts.main')

@section('content')

<div class="container" style="margin-top:  -90px;">
	<div class="row my-3">
		<div class="col-lg-9">
			<h1 class="mb-3" >{{ $post->title }}</h1>
			<a href="{{ url('dashboard/posts') }}" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i> Back To My Posts</a>
			<a href="{{ url('dashboard/posts/'.$post->slug.'/edit') }}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
			<a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Delete</a>
			@if($post->image)
			<div style="max-height: 350px;overflow:hidden;">
				<img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
			</div>
			@else
			<img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
			@endif
			<article class="my-3 fs-5">
				{!! $post->body !!}
			</article>
		</div>
	</div>
</div>

@endsection