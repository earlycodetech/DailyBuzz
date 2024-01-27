@extends('layouts.app')
@section('content')
    <div class="container my-5 bg-white p-5">
        <h3>Edit post</h3>
        <div class="d-flex justify-content-end">
            <img src="{{ asset('images/video-bg.png') }}" alt="" style="width: 100px; height: 100px;" class="img-thumbnail shadow-sm">
        </div>
        <div class="row">
            
            <div class="col-md-6 mb-3">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Cover</label>
                <input type="file" name="cover" class="form-control">
            </div>
            <div class="col-12 mb-3">
                <label for=""> Post </label>
                <textarea name=""" rows="10" class="form-control"></textarea>
            </div>

            <div class="col-12 my-3">
                <button class="btn btn-primary">
                    Create Post
                </button>
            </div>
        </div>
    </div>
@endsection