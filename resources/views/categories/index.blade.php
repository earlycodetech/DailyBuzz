@extends('layouts.app')
@section('content')
    <section>
        <div class="container bg-white py-5">
            <div class="text-end">
                <a href="{{ route('categories.create') }}" class="btn btn-primary">
                    New Category
                </a>
            </div>


            <div class="my-5 table-responsive">
                
                @if ($msg =  Session::get('success'))
                    <p class="alert alert-success"> {{ $msg }}  </p>
                @endif
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="row"> Title </th>
                            <th scope="row"> Date Created </th>
                            <th scope="row"> Last Updated </th>
                            <th scope="row">...</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories  as  $cat)
                            <tr>
                                <td> {{ $cat->name }} </td>
                                <td> {{ $cat->created_at->format('jS M. Y h:i a') }} </td>
                                <td> {{ $cat->updated_at->diffForHumans() }} </td>
                                <td class="d-flex gap-3 align-items-center">
                                    <a href="{{ route('categories.edit', ['category' => $cat->slug]) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('categories.destroy', ['category' => $cat->slug]) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>No Record Found</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
