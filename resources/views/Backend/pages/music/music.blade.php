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
                        <h5 class="card-title">Music Upload</h5>
                        <a href="{{route('show-music')}}"><i class="fa fa-music"></i>View Musics</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="{{route('music-upload')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf

                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="form-group mb-none">
                                            <label for="name" class="control-label">Music Title*</label>
                                            <input class="form-control" name="name" type="text" id="name">
                                        </div>


                                        <div class="form-group mb-none">
                                            <label for="name" class="control-label">Thumbnail</label>
                                            <input class="form-control" name="image" type="file" id="name">
                                        </div>
                                    </div>

                                    <div class="form-group mb-none">
                                        <label for="name" class="control-label">Audio</label>
                                        <input class="form-control" name="audio" type="file" id="name">
                                    </div>

                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="box-header with-border">
                                            <h6 class="box-title">Music Artist:</h6>
                                        </div>
                                        <div class="form-group mb-none">
                                            <select class="form-control" name="artist">
                                                <option selected>-Please select music artist-</option>
                                            @foreach($artist as $value)
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>


                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="box-header with-border">
                                            <h6 class="box-title">Music Tags:</h6>
                                        </div>
                                        <div class="form-group mb-none">
                                            <select class="form-control" name="tag[]" id="tags"
                                                    multiple="multiple">
                                                @foreach($tag as $value)
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>


                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="box-header with-border">
                                            <h6 class="box-title">Music Theme:</h6>
                                        </div>
                                        <div class="form-group mb-none">
                                            <select class="form-control" name="themes[]" id="trends"
                                                    multiple="multiple">
                                                @foreach($theme as $value)
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="box-header with-border">
                                            <h6 class="box-title">Music Genre:</h6>
                                        </div>
                                        <div class="form-group mb-none">
                                            <select class="form-control" name="genres[]" id="categories"
                                                    multiple="multiple">
                                                @foreach($genre as $value)
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>


                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="box-header with-border">
                                            <h6 class="box-title">Music Mood:</h6>
                                        </div>
                                        <div class="form-group mb-none">
                                            <select class="form-control" name="moods[]" id="styles"
                                                    multiple="multiple">
                                                @foreach($mood as $value)
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Upload Music</button>

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
