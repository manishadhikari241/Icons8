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
                        <h5 class="card-title">All Icons</h5>
                        <a href="{{route('icon-upload')}}"><i class="fa fa-backward"></i>Back</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Icon</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                            <th>Trends</th>
                                        <th>Styles</th>
                                        <th class="sorting-false">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($icon as $key=>$value)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td><img src="{{asset('images/icons/icon_upload/'.$value->image)}}" width="60px">
                                            </td>
                                            <td>{{$value->name}}</td>
                                            <td>{!! $value->description !!}</td>
                                            <td>
                                                @foreach($value->categories as $key)
                                                    {{$key->title}},
                                                @endforeach
                                            </td>

                                            <td>
                                               @foreach($value->trends as $try)
                                                   {{$try->category}},
                                                   @endforeach
                                            </td>
                                            <td>
                                                @foreach($value->styles as $val)
                                                    {{$val->name}},
                                                @endforeach
                                            </td>

                                            <td>
                                                <a class="btn btn-outline-danger confirm"
                                                   href="{{route('icon-upload-delete',$value->id)}}"
                                                   onclick="return confirm('Confirm Delete?')"><i
                                                            class="fa fa fa-trash"></i></a>
                                                <a class="btn btn-outline-primary confirm"
                                                   href="{{route('edit-icon-upload',$value->id)}}"
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