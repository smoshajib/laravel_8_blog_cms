@extends('cms.layouts.admin_master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session('message')}}
                    </div>
                @endif

                @if(Session::has('delete-message'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session('delete-message')}}
                    </div>
                @endif
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Page - list
                        <a href="{{ route('pages.create') }}" class="btn btn-sm btn-primary float-right">Add
                            New</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="20">#</th>
                                <th scope="col">Title</th>
                                <th scope="col" width="200">Created By</th>
                                <th scope="col" width="129">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pages as $page)
                                <tr>
                                    <th scope="row">{{ $page->id }}</th>
                                    <td>{{ $page->title }}</td>
                                    <td>{{ Auth::user()->name }}</td>
                                    <td>
                                        <a href="{{ route('pages.edit', $page->slug) }}"
                                           class="btn btn-sm btn-primary">Edit</a>
                                           <a href="{{ route('pages.destroy',$page->slug) }}" onclick="event.preventDefault();document.getElementById('page-delete').submit();" class="btn btn-sm btn-danger">Delete</a>
                                           <form action="{{ route('pages.destroy', $page->id) }}" id="page-delete" method="post">@csrf  @method('DELETE')</form>
                                    </td>
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
