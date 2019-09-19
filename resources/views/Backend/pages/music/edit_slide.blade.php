@extends('voyager::master')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Edit Slider</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form method="POST" action="{{route('slide-edit')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$slide->id}}">
                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">Current Image:</label>
                                                <img src="{{asset('images/sliders/'.$slide->music_slider)}}" width="100px">
                                                <hr>
                                                <label for="formGroupExampleInput">Image Slider:</label>
                                                <input type="file" name="image" class="form-control"
                                                       id="formGroupExampleInput">
                                            </div>
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">Description:</label>
                                                <textarea id="desc"
                                                          name="description"
                                                          class="form-control">{{$slide->music_description}}</textarea>
                                            </div>

                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Slider</button>

                                </div>

                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </form>
                    </div>
                    <!-- ./card-body -->
                    <!-- /.card-footer -->
                </div>
            </div>

        </div>
    </div>
@stop