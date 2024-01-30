@extends('layouts.app')
@section('content')
    <div class="container my-5 bg-white p-5">

        <div class="text-end mb-5">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">New Post</a>
        </div>
        <div class="row">
            @forelse ($articles as $post)
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card border-0 shadow h-100">
                        <img src="{{ asset($post->cover) }}" alt="" class="card-img-top" style="height: 200px;">
                        <div class="card-body d-flex flex-column">
                            <p class="h5 fw-bold">
                                {{ $post->title }}
                            </p>
                            <p class="fw-bold mt-auto"> Category: {{ $post->category->name }} </p>

                            <div class="d-flex gap-3 align-items-center mt-auto">
                                <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary w-100">
                                    Edit
                                </a>

                                <form action="" method="post" class="w-100">
                                    <button class="btn btn-danger w-100">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            @empty
                <div class="card">
                    <div class="card-body text-center">
                        <p class="h1">
                            🔎
                        </p>
                        <p>No Result Found</p>
                    </div>
                </div>
            @endforelse


            <div class="my-2">
                {!! $articles->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
@endsection