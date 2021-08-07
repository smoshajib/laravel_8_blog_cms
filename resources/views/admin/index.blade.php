@extends('layouts.admin_master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Latest Categories</div>

                    <div class="card-body">

                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">Latest Post</div>

                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">Title</th>
                                <th scope="col" width="200">Created By</th>
                            </tr>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">Latest Page</div>

                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">Title</th>
                                <th scope="col" width="200">Created By</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($pages as $page)
                                <tr>
                                    <td>{{ $page->id }}</td>
                                    <td>{{ $page->title }}</td>
                                    <td>{{ Auth::user()->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
