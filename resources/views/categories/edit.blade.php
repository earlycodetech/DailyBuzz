@extends('layouts.app')
@section('content')
    <section>
        <div class="container py-5">
            <form action="{{ route('categories.update', ['category' => $category->slug]) }}" class="bg-white mx-auto w-50 p-2 p-md-4 shadow" method="post">
                @csrf @method('PUT')

                
                @if ($msg =  Session::get('success'))
                    <p class="alert alert-success"> {{ $msg }}  </p>
                @endif
                <div class="my-5">
                    <h3>Edit: {{ $category->name }}</h3>
                </div>
                
                <div class="mb-3">
                    <label for="" class="form-label"> Name </label>
                    <input type="text" value="{{ $category->name }}" name="category_name" class="form-control" autofocus>
                    @error('category_name')
                        <p class="small fw-bold text-danger"> Error: {{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary">
                        Edit  Category
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection