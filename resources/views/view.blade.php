@extends('layouts.app')
@section('content')
    <section class="container h-100 ">

        <div class="container -vh px-md-5 ">

            <h1 class="text-center fst-italic  mb-5">
                {{ $post->title }}
            </h1>
            <article class="container">
                <img src="{{ asset($post->cover) }}" alt="{{ $post->title }}" style="height: 300px; min-height: 500px;" class="w-100 object-fit-">


                <p class="py-5 d-block " style="width: 100%; max-width: 1000px; white-space: pre-wrap;">
                  {{ $post->content }}
                </p>
            </article>

            <h6 class="fw-bold my-5">{{ $post->created_at->format('jS M. Y') }}</h6>
        </div>
        {{-- <section>
            <div class="container my-5">
                <div class="row ps-5">
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

                                <div class="row">
                                    <div class="col-md-6 col-lg-4 bg-danger-subtle rounded-pill">
                                        <div class="card border-0 shadow bg-black rounded-pill">
                                            <a href="{{ url('view') }}" class="bg-danger-subtle text-center">
                                                Like
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 bg-danger-subtle rounded-pill">
                                        <div class="card border-0 shadow bg-black rounded-pill">
                                            <a href="{{ url('view') }}" class="bg-danger-subtle text-center ">
                                                comment
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 bg-danger-subtle rounded-pill">
                                        <div class="card border-0 shadow bg-danger-subtle rounded-pill">
                                            <a href="{{ url('view') }}" class="bg-danger-subtle text-center">
                                                share
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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

                                <div class="row">
                                    <div class="col-md-6 col-lg-4 bg-danger-subtle rounded-pill">
                                        <div class="card border-0 shadow bg-black rounded-pill">
                                            <a href="{{ url('view') }}" class="bg-danger-subtle text-center">
                                                Like
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 bg-danger-subtle rounded-pill">
                                        <div class="card border-0 shadow bg-black rounded-pill">
                                            <a href="{{ url('view') }}" class="bg-danger-subtle text-center ">
                                                comment
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 bg-danger-subtle rounded-pill">
                                        <div class="card border-0 shadow bg-danger-subtle rounded-pill">
                                            <a href="{{ url('view') }}" class="bg-danger-subtle text-center">
                                                share
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

                                <div class="row">
                                    <div class="col-md-6 col-lg-4 bg-danger-subtle rounded-pill">
                                        <div class="card border-0 shadow bg-black rounded-pill">
                                            <a href="{{ url('view') }}" class="bg-danger-subtle text-center">
                                                Like
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 bg-danger-subtle rounded-pill">
                                        <div class="card border-0 shadow bg-black rounded-pill">
                                            <a href="{{ url('view') }}" class="bg-danger-subtle text-center ">
                                                comment
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 bg-danger-subtle rounded-pill">
                                        <div class="card border-0 shadow bg-danger-subtle rounded-pill">
                                            <a href="{{ url('view') }}" class="bg-danger-subtle text-center">
                                                share
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        </section> --}}
    </section>
    {{-- <section class="container-fluid bg-danger-subtle ">

        <div class="container">
            <h3 class="text-center fst-italic ">TODAY'S BUZZ</h3>
            <div class="row ps-5 ">
                <div class="col-md-6  col-lg-4 md-3 p-3">
                    <div class="card  border-0 shadow">
                        <img src="{{ asset('images/video-bg.png') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5>
                                40 thrillion missing as FG investigates
                            </h5>
                            <a href="">
                                readmore
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  col-lg-4 md-3 p-3">
                    <div class="card  border-0 shadow">
                        <img src="{{ asset('images/video-bg.png') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5>
                                Inspector sanusi warns against porpular slance NO GREE FOR ANY BODY
                            </h5>
                            <a href="">
                                readmore
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  col-lg-4 md-3 p-3">
                    <div class="card  border-0 shadow">
                        <img src="{{ asset('images/video-bg.png') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5>
                                FG to compaciate victims of ASUU strike
                            </h5>
                            <a href="">
                                readmore
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  col-lg-4 md-3 p-3">
                    <div class="card  border-0 shadow">
                        <img src="{{ asset('images/video-bg.png') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5>
                                Senator wike to demolish kwubwa
                            </h5>
                            <a href="">
                                readmore
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6  col-lg-4 md-3 p-3">
                    <div class="card  border-0 shadow">
                        <img src="{{ asset('images/video-bg.png') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <H5>
                                Teachers emerges on strike for cutting of salary
                            </H5>
                        </div>
                    </div>
                </div>

                <div class="col-md-6  col-lg-4 md-3 p-3">
                    <div class="card  border-0 shadow">
                        <img src="{{ asset('images/video-bg.png') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5>
                                PDP members protests for rigging of elction
                            </h5>

                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section> --}}
@endsection
