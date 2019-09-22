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
                        <h5 class="card-title">All Videos</h5>
                        <a href="{{route('video-upload')}}"><i class="fa fa-backward"></i>Back</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Thumbnail</th>
                                        <th>Video</th>
                                        <th>Video Title</th>
                                        <th>Theme</th>
                                        <th>Tags</th>
                                        <th>Mood</th>
                                        <th>Genre</th>
                                        <th>Artist</th>
                                        <th class="sorting-false">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($video as $key=>$value)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td><img src="{{asset('images/video/'.$value->image)}}" width="60px">
                                            </td>
                                            <td width="5px">
                                                <video width="320" height="240" controls>
                                                    <source src="{{asset('/video/'.$value->video)}}" type="video/mp4">
                                                </video>
                                            </td>
                                            <td>{{$value->name}}</td>
                                            <td>
                                                @foreach($value->themes as $key)
                                                    {{$key->name}},
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($value->tags as $item)
                                                    {{$item->name}},
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($value->moods as $try)
                                                    {{$try->name}},
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($value->genres as $val)
                                                    {{$val->name}},
                                                @endforeach
                                            </td>
                                            <td>
                                                {{$value->artists->name}}
                                            </td>

                                            <td>
                                                <a class="btn btn-outline-danger confirm"
                                                   href="{{route('delete-video',$value->id)}}"
                                                   onclick="return confirm('Confirm Delete?')"><i
                                                            class="fa fa fa-trash"></i></a>
                                                <a class="btn btn-outline-primary confirm"
                                                   href="{{route('edit-video',$value->id)}}"
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