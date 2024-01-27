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
                        <tr>
                            <td>Good </td>
                            <td>27th Jun. 2023 </td>
                            <td>3 mins ago</td>
                            <td class="d-flex gap-3 align-items-center">
                                <a href="" class="btn btn-sm btn-primary">Edit</a>
                                <form action="">
                                    <button class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection