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
                        <h5 class="card-title">Icon Upload</h5>
                        <a href="{{route('show-icon')}}"><i class="fa fa-image"></i>View Icons</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="{{route('icon-upload')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf

                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Icon Name *</label>
                                                <input class="form-control" name="name" type="text" id="name">
                                            </div>


                                            <div class="form-group ">
                                                <label for="name" class="control-label">Icon</label>
                                                <input class="form-control" name="image" type="file" id="name">
                                            </div>
                                    </div>
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Icon Description *</label>
                                                <textarea id="desc"
                                                          name="description"
                                                          class="form-control"></textarea></div>

                                    <div class="box-header with-border">
                                        <h6 class="box-title">Icon Tags:</h6>
                                    </div>
                                    <!-- /.box-header -->
                                    {{--<div class="box-body">--}}
                                        {{--<div class="form-group mb-none">--}}
                                            {{--<select class="form-control" name="tags[]" id="tags"--}}
                                                    {{--multiple="multiple">--}}
                                                {{--@foreach($tag as $value)--}}
                                                    {{--<option value="{{$value->id}}">{{$value->name}}</option>--}}
                                                {{--@endforeach--}}
                                            {{--</select>--}}

                                        {{--</div>--}}
                                    {{--</div>--}}

                                    <div class="box-header with-border">
                                        <h6 class="box-title">Icon Trends:</h6>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="form-group mb-none">
                                            <select class="form-control" name="trends[]" id="trends"
                                                    multiple="multiple">
                                                @foreach($trend as $value)
                                                    <option value="{{$value->id}}">{{$value->category}}</option>
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
                                                    <option value="{{$value->id}}">{{$value->title}}</option>
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
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
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


@stop
