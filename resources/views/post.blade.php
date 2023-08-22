@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $post["title"] }}</h1>

<p>By.Riski Hasibuan in <a href="/categories/{{ $post->category->slug }}">{{$post->category->name}}</a></p>

{!! $post->body !!}

<a href="{{ url('/dashboard/posts') }}" class="btn btn-success"></span></a>

@section('container')
<h1 class="mb-5">{{ $post["title"] }}</h1>
<a href="{{ url('/dashboard/posts') }}" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i> Back to Posts</a>
<br>
{!! $post->body !!}

@endsection