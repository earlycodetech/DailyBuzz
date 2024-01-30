@extends('layouts.app')
@section('content')
    <div class="container my-5 bg-white p-5">
        <h3>Create a new post</h3>
        <form action="{{ route('posts.store') }}" enctype="multipart/form-data" method="POST" class="row">
            @csrf
            @if ($msg = Session::get('success'))
                <p class="alert alert-success"> {{ $msg }} </p>
            @endif

            <div class="col-md-6 mb-3">
                <label for="">Category</label>
                <select name="category" class="form-select">
                    @forelse ($categories as $cat)
                        <option value="{{ $cat->id }}"> {{ $cat->name }} </option>
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
                <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                @error('title')
                    <p class="small fw-bold text-danger"> Error: {{ $message }} </p>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Cover</label>
                <input type="file" name="cover"  class="form-control">
                @error('cover')
                    <p class="small fw-bold text-danger"> Error: {{ $message }} </p>
                @enderror
            </div>
            <div class="col-12 mb-3">
                @error('content')
                    <p class="small fw-bold text-danger"> Error: {{ $message }} </p>
                @enderror
                <label for=""> Post </label>
                <textarea name="content" rows="10" class="form-control">{{ old('content') }}</textarea>
            </div>

            <div class="col-12 my-3">
                <button class="btn btn-primary">
                    Create Post
                </button>
            </div>
        </form>
    </div>
@endsection
