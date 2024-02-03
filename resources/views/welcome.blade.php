@extends('layouts.app')
@section('content')
    <section>
        <div class="container-fluid hero">
            <div class="d-flex justify-content-center align-items-center bg-info" style="background-image: url({{ asset('images/video-bg.png') }});">
                <h1> Welcome to Daily Buzz </h1>
            </div>
        </div>
    </section>


    <section>
        <div class="container my-5">
            <div class="row">
            @forelse ($posts as $item)
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow">
                    <img src="{{ asset($item->cover) }}" class="card-img-top object-fit-cover" style="height: 200px;" alt="">

                    <div class="card-body">
                        <p class="h4 fw-semibold">
                            {{ $item->title }}
                        </p>
                        <p class="fw-semibold">
                            {{ $item->created_at->format('jS M. Y') }}
                        </p>
                        <a href="{{ route('read.post', ['slug' => $item->slug]) }}" class="btn btn-info rounded-pill w-100">
                            Read Post
                        </a>
                    </div>
                </div>
            </div>
            @empty
                <p class="p-5 text-center fs-5">
                    Comming Soon...
                </p>
            @endforelse
            </div>


            <div class="p-2">
                {!! $posts->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </section>
@endsection
