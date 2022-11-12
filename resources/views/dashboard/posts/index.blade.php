@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 text-align">My, Posts</h1>
  </div>

@if (session()->has('success'))
    <div class="alert alert-success  col-lg-8" role="alert">
        {{ session('success') }}
    </div>
@endif

  <div class="table-responsive col-lg-8">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new posts</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
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
              <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i class="uil uil-eye"></i></a>
              <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><i class="uil uil-edit"></i></a>
              <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')"><i class="uil uil-trash-alt"></i></button>
            </form>

        </td>

        </tr>

        @endforeach

      </tbody>
    </table>
  </div>
@endsection

