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
                        <h5 class="card-title">Edit VIdeo</h5>
                        <a href="{{route('show-video')}}"><i class="fa fa-backward"></i>Back</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="{{route('edit-video')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$video->id}}">

                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="form-group mb-none">
                                            <label for="name" class="control-label">Video Title*</label>
                                            <input class="form-control" name="name" type="text" id="name"
                                                   value="{{$video->name}}">
                                        </div>


                                        <div class="form-group mb-none">
                                            <label for="name" class="control-label">Current Image:</label>
                                            <img src="{{asset('images/video/'.$video->image)}}" width="80px">
                                            <hr>
                                            <label for="name" class="control-label">Thumbnail</label>
                                            <input class="form-control" name="image" type="file" id="name">
                                        </div>
                                    </div>

                                    <div class="form-group mb-none">
                                        <label for="name" class="control-label">Current Video:</label>
                                        <video width="320" height="240" controls>
                                            <source src="{{asset('/video/'.$video->video)}}" type="video/mp4">
                                        </video>
                                        <hr>
                                        <label for="name" class="control-label">Video</label>
                                        <input class="form-control" name="video" type="file" id="name">
                                    </div>
                                </div>


                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="box-header with-border">
                                        <h6 class="box-title">Video Artist:</h6>
                                    </div>
                                    <div class="form-group mb-none">
                                        <select class="form-control" name="artist">
                                            <option selected>-Please select music artist-</option>
                                            @foreach($artist as $value)
                                                <option @if($value->name==$video->artists->name)  selected
                                                        @endif value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>


                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="box-header with-border">
                                        <h6 class="box-title">Video Tags:</h6>
                                    </div>
                                    <div class="form-group mb-none">
                                        <select class="form-control" name="tag[]" id="tags"
                                                multiple="multiple">
                                            @foreach($tag as $value)
                                                <option @if($video->tags()->where('tag_id',$value->id)->where('video_id',$video->id)->first())  selected
                                                        @endif value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>


                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="box-header with-border">
                                        <h6 class="box-title">Video Theme:</h6>
                                    </div>
                                    <div class="form-group mb-none">
                                        <select class="form-control" name="themes[]" id="trends"
                                                multiple="multiple">
                                            @foreach($theme as $value)
                                                <option @if($video->themes()->where('theme_id',$value->id)->where('video_id',$video->id)->first()) selected
                                                        @endif value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="box-header with-border">
                                        <h6 class="box-title">Video Genre:</h6>
                                    </div>
                                    <div class="form-group mb-none">
                                        <select class="form-control" name="genres[]" id="categories"
                                                multiple="multiple">
                                            @foreach($genre as $value)
                                                <option @if($video->genres()->where('genre_id',$value->id)->where('video_id',$video->id)->first())selected @endif
                                                value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>


                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="box-header with-border">
                                        <h6 class="box-title">Video Mood:</h6>
                                    </div>
                                    <div class="form-group mb-none">
                                        <select class="form-control" name="moods[]" id="styles"
                                                multiple="multiple">
                                            @foreach($mood as $value)
                                                <option @if($video->moods()->where('mood_id',$value->id)->where('video_id',$video->id)->first())selected @endif
                                                value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Update Video</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- /.col -->


@endsection
