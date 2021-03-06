@extends('layouts.admin_master')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Post - edit</div>

                    <div class="card-body">
                        
                          <form  action="{{route('posts.update',$post->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                                <label>Thumbnail</label>
                                <input class="form-control" name="thumbnail" value="{{$post->thumbnail}}">
                                @if ($errors->has('thumbnail'))
                                <span class="help-block">{!! $errors->first('thumbnail') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('title')) has-error @endif">
                                <label>Title</label>
                                <input class="form-control" name="title" value="{{$post->title}}">
                            @if ($errors->has('title'))
                                <span class="help-block">{!! $errors->first('title') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('sub_title')) has-error @endif">
                            <label>Sub Title</label>
                            <input class="form-control" name="sub_title" value="{{$post->sub_title}}">
                            @if ($errors->has('sub_title'))
                                <span class="help-block">{!! $errors->first('sub_title') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('details')) has-error @endif">
                            <label>Details</label>
                            <textarea class="form-control" name="details">{{$post->details}}</textarea>
                            @if ($errors->has('details'))
                                <span class="help-block">{!! $errors->first('details') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('category_id')) has-error @endif">
                            <label>Category Name</label>
                            <select class="form-control" name="category_id[]" multiple="multiple" id="category_id"> 
                                <option disabled>Select Status</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category_id'))
                                <span class="help-block">{!! $errors->first('category_id') !!}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="is_published"> 
                                <option disabled selected>Select Status</option>
                                <option value="1" {{ $post->is_published == 1 ? 'selected' : '' }}>Published</option>
                                <option value="0" {{ $post->is_published == 0 ? 'selected' : '' }}>Draft</option>
                            </select>  
                        </div>

                        <button class="btn btn-sm btn-info">Update</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function () {
            CKEDITOR.replace('details');

            $('#category_id').select2({
                placeholder: "Select categories"
            }).val({!! json_encode($post->categories()->allRelatedIds()) !!}).trigger('change');
        });
    </script>
@endsection
