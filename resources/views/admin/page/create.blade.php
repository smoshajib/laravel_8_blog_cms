@extends('layouts.admin_master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Page - create</div>

                    <div class="card-body">
                        
                        <form action="{{route('pages.store')}}" method="post">
                            @csrf
                        <div class="box-body">
                            <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                                <label>Thumbnail</label>
                            <input class="form-control" name="thumbnail" placeholder="Thumbnail ">
                            
                                @if ($errors->has('thumbnail'))
                                    <span class="help-block">{!! $errors->first('thumbnail') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('title')) has-error @endif">
                                <label>Title</label>
                            <input class="form-control" name="title" >
                           
                                @if ($errors->has('title'))
                                    <span class="help-block">{!! $errors->first('title') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('sub_title')) has-error @endif">
                                <label>Sub Title</label>
                                <input class="form-control" name="sub_title" >
                                
                                @if ($errors->has('sub_title'))
                                    <span class="help-block">{!! $errors->first('sub_title') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('details')) has-error @endif">
                                <label>Details</label>
                            <textarea class="form-control" name="details"></textarea>
                           
                                @if ($errors->has('details'))
                                    <span class="help-block">{!! $errors->first('details') !!}</span>@endif
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="is_published"> 
                                    <option disabled selected>Select Status</option>
                                    <option value="1">Published</option>
                                    <option value="0">Draft</option>
                                </select> 
                            </div>
                        </div>
                        <div class="box-footer">
                            <button class="btn btn-sm btn-info">Save</button>
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
