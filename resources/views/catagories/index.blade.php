@extends('layouts.app')
@section('content')
    <section>
        <div class="container py-5">
            <div class="text-end">
                <a href="{{ route('categories.create') }}" class="btn btn-primary">
                    New Catagory 
                </a>
            </div>
        </div>
    </section>
@endsection