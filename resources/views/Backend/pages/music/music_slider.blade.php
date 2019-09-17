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
                        <h5 class="card-title">Add Slider</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form method="POST" action="{{route('music-slider')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf

                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="formGroupExampleInput">Music Slider:</label>
                                                <input type="file" name="image" class="form-control"
                                                       id="formGroupExampleInput">
                                            </div>
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">Description:</label>
                                                <textarea id="desc"
                                                          name="description"
                                                          class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Add Slider</button>

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

        <div class="col-md-6">


        <div class="card">
        <div class="card-header">
        <h5 class="card-title">All Sliders</h5>

        </div>
        <!-- /.card-header -->
        <div class="card-body">

        <!-- /.row -->
            <table id="example1" class="table table-bordered table-sm">
                <thead>
                <tr>
                    <th>Sn</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($slide as $key => $value)
                    <tr>
                        <td>{{++$key}}</td>
                        <td><img src="{{asset('images/sliders/'.$value->music_slider)}}" width="150px"></td>
                        <td>{!! $value->music_description !!}</td>
                        <td>
                            <a href="{{route('slide-delete',$value->id)}}"
                               onclick="return confirm('Confirm Delete?')"
                               class="btn btn-sm btn btn-danger"><i class="fa fa-trash"></i> </a>
                            <a href="{{route('slide-edit',$value->id)}}"
                               class="btn btn-sm btn btn-primary"><i
                                        class="fa fa-edit"></i> </a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>

        <!-- ./card-body -->

        <!-- /.card-footer -->
        </div>
        </div>
        <!-- /.col -->
        </div>
    </div>

@endsection
