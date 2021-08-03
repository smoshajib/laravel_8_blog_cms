@extends('layouts.admin_master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Category - edit</div>

                    <div class="card-body">
                       
                        <form action="{{route('categories.update',$category->id)}}" method="post">
                            @csrf
                            @method('PUT')
                        <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                            <label>Thumbnail</label>
                            <input class="form-control" name="thumbnail" placeholder="Thumbnail " value="{{$category->thumbnail}}">
                            @if ($errors->has('thumbnail'))
                                <span class="help-block">{!! $errors->first('thumbnail') !!}</span>@endif
                        </div>


                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" placeholder="Name" value="{{$category->name}}">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="is_published"> 
                                <option disabled selected>Select Status</option>
                                <option value="1" {{ $category->is_published == 1 ? 'selected' : '' }}>Published</option>
                                <option value="0" {{ $category->is_published == 0 ? 'selected' : '' }}>Draft</option>
                            </select>
                      
                        </div>

                        <button class="btn btn-sm btn-warning">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
