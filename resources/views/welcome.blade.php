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
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow">
                        <img src="{{ asset('images/video-bg.png') }}" class="card-img-top" alt="">

                        <div class="card-body">
                            <p class="h4 fw-semibold">
                                This is the title
                            </p>
                            <p class="fw-semibold">
                                Author: Jeremy Smith
                            </p>
                            <p class="fw-semibold">
                                12th Jun. 2023
                            </p>
                            <a href="" class="btn btn-info rounded-pill w-100">
                                Read Post
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
