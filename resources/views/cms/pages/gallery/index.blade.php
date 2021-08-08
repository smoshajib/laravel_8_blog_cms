@extends('cms.layouts.admin_master')

@section('content')
    <div class="container">
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

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Gallery - list
                        <a href="{{ route('galleries.create') }}" class="btn btn-sm btn-primary float-right">Add
                            New</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">Image</th>
                                <th scope="col">Url</th>
                                <th scope="col" width="100">Copy Url</th>
                                <th scope="col" width="200">Created By</th>
                                <th scope="col" width="129">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($galleries as $gallery)
                                <tr>
                                    <td>{{ $gallery->id }}</td>
                                    <td><img width="50" src="{{ url('storage/galleries/'.$gallery->image_url)}}" alt=""></td>
                                    <td><p  style="width:500px" id="{{ $gallery->id }}">{{ asset('storage/app/public/galleries/' . $gallery->image_url) }}</p></td>
                                    <td width="100"><button class="btn btn-sm btn-primary" onclick="copyToClipboard('#{{ $gallery->id }}')">Copy Url</button></td>
                                    <td>{{ Auth::user()->name }}</td>
                                    <td>
                                        {{-- <a href="{{ route('galleries.edit', $gallery->id) }}"
                                           class="btn btn-sm btn-primary">Edit</a> --}}
                                           <a href="{{ route('galleries.destroy',$gallery->id) }}" onclick="event.preventDefault();document.getElementById('galleries-delete').submit();" class="btn btn-sm btn-danger">Delete</a>
                                           <form action="{{ route('galleries.destroy', $gallery->id) }}" id="galleries-delete" method="post">@csrf  @method('DELETE')</form>
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

    <script>
        function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
        }
    </script>
@endsection