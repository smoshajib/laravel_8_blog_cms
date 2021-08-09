@extends('cms.layouts.admin_master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Page - edit</div>

                    <div class="card-body">

                        <form  action="{{route('pages.update',$page->slug)}}" method="post">
                            @csrf
                            @method('PUT')
                        <div class="box-body">


                            <div class="form-group @if($errors->has('title')) has-error @endif">
                                <label>Title</label>
                                <input class="form-control" name="title" value="{{$page->title}}">
                                @if ($errors->has('title'))
                                    <span class="help-block">{!! $errors->first('title') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('sub_title')) has-error @endif">
                                <label>Sub Title</label>
                                <input class="form-control" name="sub_title" value="{{$page->sub_title}}">
                                @if ($errors->has('sub_title'))
                                    <span class="help-block">{!! $errors->first('sub_title') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('details')) has-error @endif">
                                <label>Details</label>
                                <textarea class="form-control" name="details">{{$page->details}}</textarea>
                                @if ($errors->has('details'))
                                    <span class="help-block">{!! $errors->first('details') !!}</span>@endif
                            </div>
                            <div class="form-group">
                                <label>Page Template</label>
                                <select class="form-control" name="template">
                                    <option disabled>Select Template</option>
                                    @foreach($templates as $template)
                                        <option value="{{$template}}" @if($template == $page->template) selected @endif>{{$template}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="is_published">
                                    <option disabled selected>Select Status</option>
                                    <option value="1" {{ $page->is_published == 1 ? 'selected' : '' }}>Published</option>
                                    <option value="0" {{ $page->is_published == 0 ? 'selected' : '' }}>Draft</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group @if($errors->has('featured_image')) has-error @endif">
                            <label>Featured Image</label>
                            <input type="file" class="form-control" name="featured_image" >

                            @if ($errors->has('featured_image'))
                                <span class="help-block">{!! $errors->first('featured_image') !!}</span>@endif
                        </div>
                        <div class="box-footer">
                            <button class="btn btn-sm btn-info">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script>
        $(document).ready(function () {
            CKEDITOR.replace('details');
        });
    </script>
@endsection
