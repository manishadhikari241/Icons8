@extends('voyager::master')


@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Edit Icon Upload</h5>
                        <a href="{{route('voyager.show-icon')}}"><i class="fa fa-image"></i>View Icons</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="{{route('voyager.edit-icon-upload')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$icon->id}}">

                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="form-group ">
                                            <label for="name" class="control-label">Icon Name *</label>
                                            <input class="form-control" name="name" type="text" id="name" value="{{$icon->name}}">
                                        </div>


                                        <div class="form-group ">
                                            <label for="name" class="control-label">Current Icon:</label>
                                            <img src="{{asset('images/icons/icon_upload/'.$icon->image)}}" width="80px">
                                            <input class="form-control" name="image" type="file" id="name">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="name" class="control-label">Icon Description *</label>
                                        <textarea id="desc"
                                                  name="description"
                                                  class="form-control">{{$icon->description}}</textarea></div>

                                    <div class="box-header with-border">
                                        <h6 class="box-title">Icon Tags:</h6>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="form-group mb-none">
                                            <select class="form-control" name="tags[]" id="tags"
                                                    multiple="multiple">
                                                @foreach($tag as $value)
                                                    <option @if($icon->tags()->where('icon_id',$icon->id)->where('tag_id',$value->id)->first()) selected @endif value="{{$value->id}}">{{$value->name}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <div class="box-header with-border">
                                        <h6 class="box-title">Icon Trends:</h6>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="form-group mb-none">
                                            <select class="form-control" name="trends[]" id="trends"
                                                    multiple="multiple">
                                                @foreach($trend as $value)
                                                    <option @if($icon->trends()->where('icon_id',$icon->id)->where('trend_id',$value->id)->first()) selected @endif value="{{$value->id}}">{{$value->category}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <div class="box-header with-border">
                                        <h6 class="box-title">Icon Category:</h6>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="form-group mb-none">
                                            <select class="form-control" name="categories[]" id="categories"
                                                    multiple="multiple">
                                                @foreach($cat as $value)
                                                    <option @if($icon->categories()->where('icon_id',$icon->id)->where('category_id',$value->id)->first()) selected @endif value="{{$value->id}}">{{$value->title}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <div class="box-header with-border">
                                        <h6 class="box-title">Icon Styles:</h6>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="form-group mb-none">
                                            <select class="form-control" name="styles[]" id="styles"
                                                    multiple="multiple">
                                                @foreach($style as $value)
                                                    <option @if($icon->styles()->where('icon_id',$icon->id)->where('style_id',$value->id)->first()) selected @endif  value="{{$value->id}}">{{$value->name}}</option>
                                                    @include('Backend.pages.icons.category_dropdown',['category'=>$value])
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Upload Icon</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div>

    <!-- /.col -->


@endsection
