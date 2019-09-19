@extends('voyager::master')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Edit Icon Trend</h5>
                <a href="{{route('icon-trend')}}"><i class="fa fa-backward"></i>Back</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form method="POST" action="{{route('edit-icon-trend')}}"
                      accept-charset="UTF-8" class=""
                      enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$trend->id}}">

                    <div class="box box-default">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group ">
                                        <label for="name" class="control-label">Trend Category*</label>
                                        <input class="form-control" name="name" type="text" id="name" value="{{$trend->category}}">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group ">
                                        <label for="name" class="control-label">Current Image:</label>
                                        <img src="{{asset('storage/WebContent/icons/trends/'.$trend->image)}}" width="80px"><hr>
                                        <input class="form-control" name="image" type="file" id="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group ">
                                        <label for="name" class="control-label">Category Description *</label>
                                        <textarea id="desc"
                                                  name="description"
                                                  class="form-control">{{$trend->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update trend</button>

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


@stop