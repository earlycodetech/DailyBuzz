@extends('layouts.app')
@section('content')
    <section>
        <div class="container py-5">
            <form action="{{ route('categories.store') }}" class="bg-white mx-auto w-50 p-2 p-md-4 shadow" method="post">
                @csrf

                @if ($msg =  Session::get('success'))
                    <p class="alert alert-success"> {{ $msg }}  </p>
                @endif

                <div class="mb-3">
                    <label for="" class="form-label"> Name </label>
                    <input type="text" name="category_name" class="form-control">
                    @error('category_name')
                        <p class="small fw-bold text-danger"> Error: {{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary">
                        Create Category
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection