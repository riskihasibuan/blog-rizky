@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="margin-top:  -90px;">
  <h1 class="h2">My Posts</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-9">
  <a href="{{url('dashboard/posts/create')}}" class="btn btn-primary mb-3">create new post</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->category->name }}</td>
        <td>
          <a href="{{ url('dashboard/posts/'.$post->slug) }}" class="badge bg-info"><span class="fa fa-eye"></span></a>
          <a href="" class="badge bg-warning"><span class="fa fa-pencil-alt"></span></a>
          <a href="" class="badge bg-danger"><span class="fa fa-trash"></span></a>
        </td>
        </td>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection