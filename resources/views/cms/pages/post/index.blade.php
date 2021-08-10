@extends('cms.layouts.admin_master')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Data Tables</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a>Tables</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Data Tables</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ Session('message') }}
                </div>
            @endif

            @if(Session::has('delete-message'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ Session('delete-message') }}
                </div>
            @endif
        </div>
    </div>
<div class="row">
    
    <div class="col-lg-12">
    <div class="ibox ">
        <div class="ibox-title">
            <h5>All Post List</h5>
            <div class="ibox-tools">
                <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary float-right">Add
                    New</a>
                {{-- <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#" class="dropdown-item">Config option 1</a>
                    </li>
                    <li><a href="#" class="dropdown-item">Config option 2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a> --}}
            </div>
        </div>
        <div class="ibox-content">

            <div class="table-responsive">

        <table class="table table-striped table-bordered table-hover dataTables-example" >
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Created By</th>
            <th>Action</th>
            
        </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
        <tr class="gradeX">
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td class="center">{{ Auth::user()->name }}</td>
            <td class="center">
                <a href="{{ route('posts.edit', $post->slug) }}"
                    class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ route('posts.destroy',$post->slug) }}" onclick="event.preventDefault();document.getElementById('posts-delete').submit();" class="btn btn-sm btn-danger">Delete</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" id="posts-delete" method="post">@csrf  @method('DELETE')</form>
            </td>
        @endforeach
        </tr>
        
        </tbody>
      
        </table>
            </div>

        </div>
    </div>
</div>
</div>
</div>

@endsection
