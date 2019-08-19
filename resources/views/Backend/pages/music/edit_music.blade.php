@extends('backEnd.layout')
@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Edit Music</h5>
                        <a href="{{route('show-music')}}"><i class="fa fa-backward"></i>Back</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="{{route('edit-music')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$music->id}}">

                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="form-group mb-none">
                                            <label for="name" class="control-label">Music Title*</label>
                                            <input class="form-control" name="name" type="text" id="name"
                                                   value="{{$music->name}}">
                                        </div>


                                        <div class="form-group mb-none">
                                            <label for="name" class="control-label">Current Image:</label>
                                            <img src="{{asset('images/music/'.$music->image)}}" width="80px">
                                            <hr>
                                            <label for="name" class="control-label">Thumbnail</label>
                                            <input class="form-control" name="image" type="file" id="name">
                                        </div>
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
                                                    <option @if($value->name==$music->artists->name)  selected @endif value="{{$value->id}}">{{$value->name}}</option>
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
                                                    <option @if($music->tags()->where('tag_id',$value->id)->where('music_id',$music->id)->first())  selected @endif value="{{$value->id}}">{{$value->name}}</option>
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
                                                    <option @if($music->themes()->where('theme_id',$value->id)->where('music_id',$music->id)) selected @endif value="{{$value->id}}">{{$value->name}}</option>
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
                                                    <option @if($music->genres()->where('genre_id',$value->id)->where('music_id',$music->id)) @endif selected value="{{$value->id}}">{{$value->name}}</option>
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
                                                    <option @if($music->moods()->where('mood_id',$value->id)->where('music_id',$music->id)) @endif selected value="{{$value->id}}">{{$value->name}}</option>
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
