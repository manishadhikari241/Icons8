@extends('voyager::master')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop


@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{route('edit-icon-style')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$style->id}}">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">
                                <div class="card-header">
                                    <h5 class="card-title">Edit Icon Style</h5>
                                    <a href="{{route('icon-style')}}"><i class="fa fa-backward"></i>Back</a>
                                </div>

                                <!-- form start -->
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Category Name*</label>
                                        <input class="form-control" placeholder="Name" name="name" type="text"
                                               value="{{$style->name}}">
                                    </div>

                                    @if($style->parent_id != 0)
                                        <div class="form-group mb-none">
                                            <label for="name" class="control-label">Select Parent Category</label>
                                            <select name="parent_id" id="parent" class="form-control select2">
                                                @foreach($parent as $value)
                                                    <option @if($style->parent_id==$value->id)selected
                                                            @endif value="{{$value->id}}">{{$value->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endif

                                    <div class="form-group ">
                                        <label for="name" class="control-label">Category Description *</label>
                                        <textarea id="desc"
                                                  name="description"
                                                  class="form-control">{{$style->description}}</textarea>
                                    </div>
                                    <div class="form-group ">
                                        <label for="name" class="control-label">Image</label>
                                        <img src="{{asset('storage/WebContent/icons/styles/'.$style->image)}}" width="80px">
                                        <hr>
                                        <input class="form-control" name="image" type="file" id="name">
                                    </div>
                                    <div class="box-footer">
                                        <button class="btn btn-danger" type="submit">Update Icon Style</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.box -->
        </form>
    </div>
@stop