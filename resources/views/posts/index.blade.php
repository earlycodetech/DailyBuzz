@extends('layouts.app')
@section('content')
    <div class="container my-5 bg-white p-5">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow">
                    <img src="{{ asset('images/video-bg.png') }}" alt="" class="card-img-top" style="height: 200px;">
                    <div class="card-body">
                        <p class="h5 fw-bold">
                            The title of the post
                        </p>

                        <div class="d-flex gap-3 align-items-center">
                            <a href="" class="btn btn-primary w-100">
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
        </div>
    </div>
@endsection