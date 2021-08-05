@extends('layouts.admin_master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Gallery - create</div>

                    <div class="card-body">
                        
                        <form  action="{{route('galleries.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group @if($errors->has('image_url')) has-error @endif">
                            <label>Image Url</label>
                            <input class="form-control" type="file" name="image_url[]" multiple="multiple">
                            
                            @if ($errors->has('image_url'))<span
                                    class="help-block">{!! $errors->first('image_url') !!}</span>@endif
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