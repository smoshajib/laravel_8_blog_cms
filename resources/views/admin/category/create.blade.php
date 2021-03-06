@extends('layouts.admin_master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Category - create</div>

                    <div class="card-body">
                        
                        <form action="{{route('categories.store')}}" method="post">
                            @csrf
                        <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                            <label>Thumbnail</label>
                            <input class="form-control" name="thumbnail" placeholder="Thumbnail ">
                            
                            @if ($errors->has('thumbnail'))
                                <span class="help-block">{!! $errors->first('thumbnail') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('name')) has-error @endif">
                            <label>Name</label>
                            <input class="form-control" name="name" placeholder="Name">
                            @if ($errors->has('name'))
                                <span class="help-block">{!! $errors->first('name') !!}</span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="is_published"> 
                                <option disabled selected>Select Status</option>
                                <option value="1">Published</option>
                                <option value="0">Draft</option>
                            </select>
                      
                        </div>

                        <button class="btn btn-sm btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
