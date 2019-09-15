@extends('voyager::master')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">All Photos</h5>
                        <a href="{{route('image-upload')}}"><i class="fa fa-backward"></i>Back</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Uploader</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Tags</th>
                                        <th>Image Type</th>
                                        <th>Status</th>
                                        <th>Image Credits</th>
                                        <th class="sorting-false">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($image as $key=>$value)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td><img src="{{asset('images/photo_upload/'.$value->image)}}" width="60px">
                                            </td>
                                            <td>{{$value->title}}</td>
                                            <td>
                                               {{$value->users->name}}
                                            </td>
                                            <td>{!! $value->description !!}</td>
                                            <td>
                                                @foreach($value->categories as $key)
                                                    {{$key->title}},
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($value->tags as $item)
                                                    {{$item->name}},
                                                @endforeach

                                            </td>
                                            <td>
                                                @if(($value->image_type)==0)
                                                    <b>Free</b>
                                                @else
                                                    <b>Premium</b>
                                                @endif
                                            </td>
                                            <td>
                                                {{--<form method="post" action="{{route('deal-status')}}">--}}
                                                {{--<input type="hidden" name="deal" value="{{$value->id}}">--}}
                                                {{--@csrf--}}
                                                @if(($value->status)==0)
                                                    <button class="btn btn-danger btn btn-sm" name="inactive"><i
                                                                class="fa fa-times"></i>
                                                    </button>
                                                @else
                                                    <button class="btn btn-success btn btn-sm" name="active"><i
                                                                class="fa fa-check"></i>
                                                    </button>
                                                @endif
                                            </td>

                                            <td><b>Photographer:</b>
                                                @foreach($value->photos as $key)
                                                    {{$key->photographer}},
                                                @endforeach<br>
                                                <b>Models:</b>
                                                @foreach($value->models as $val)
                                                    {{$val->model}}
                                                @endforeach
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-danger confirm"
                                                   href="{{route('image-delete',$value->id)}}"
                                                   onclick="return confirm('Confirm Delete?')"><i
                                                            class="fa fa fa-trash"></i></a>
                                                <a class="btn btn-outline-primary confirm"
                                                   href="{{route('image-edit',$value->id)}}"
                                                ><i class="fa fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop