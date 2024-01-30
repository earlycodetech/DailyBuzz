@extends('layouts.app')
@section('content')
    <div class="container my-5 bg-white p-5">
        <h3>Edit post</h3>
        <div class="d-flex justify-content-end">
            <img src="{{ asset($post->cover) }}" alt="" style="width: 100px; height: 100px;"
                class="img-thumbnail shadow-sm">
        </div>
        <form action="{{ route('posts.update', ['post' => $post->id]) }}" enctype="multipart/form-data" method="POST" class="row">
            @csrf
            @method('PATCH')

            @if ($msg = Session::get('success'))
                <p class="alert alert-success"> {{ $msg }} </p>
            @endif

            <div class="col-md-6 mb-3">
                <label for="">Category</label>
                <select name="category" class="form-select">
                    @forelse ($categories as $cat)
                        <option value="{{ $cat->id }}" {{ $cat->id === $post->category_id ? 'selected' : '' }}> {{ $cat->name }} </option>
                    @empty
                        <option disabled>No Categories Available</option>
                    @endforelse
                </select>
                @error('category')
                    <p class="small fw-bold text-danger"> Error: {{ $message }} </p>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Title</label>
                <input type="text" name="title" value="{{ $post->title }}" class="form-control">
                @error('title')
                    <p class="small fw-bold text-danger"> Error: {{ $message }} </p>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Cover</label>
                <input type="file" name="cover" class="form-control">
                @error('cover')
                    <p class="small fw-bold text-danger"> Error: {{ $message }} </p>
                @enderror
            </div>
            <div class="col-12 mb-3">
                @error('content')
                    <p class="small fw-bold text-danger"> Error: {{ $message }} </p>
                @enderror
                <label for=""> Post </label>
                <textarea name="content" rows="10" class="form-control">{{ $post->content }}</textarea>
            </div>


            <div class="col-12 text-center">
                <button class="btn btn-primary"> Update Post </button>
            </div>
        </form>
    </div>
@endsection
