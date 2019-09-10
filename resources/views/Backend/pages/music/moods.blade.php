@extends('voyager::master')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
@section('content')

<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add music mood</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form method="POST" action="{{route('mood')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf

                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Mood*</label>
                                                <input class="form-control" name="name" type="text" id="name">
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Mood</button>
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

            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Music Mood Lists</h5>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <!-- /.row -->
                        <table id="user" class="table table-bordered table-sm">
                            <thead>
                            <tr>
                                <th>Sn</th>
                                <th>Mood</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($mood as $key => $value)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>
                                        <a href="{{route('delete-music-mood',$value->id)}}"
                                           onclick="return confirm('Confirm Delete?')"
                                           class="btn btn-sm btn btn-danger"><i class="fa fa-trash"></i> </a>
                                        <a href="{{route('edit-music-mood',$value->id)}}" data-toggle="modal"
                                           data-target="#myEditModal{{ $value->id }}"
                                           class="btn btn-sm btn btn-primary"><i
                                                    class="fa fa-edit"></i> </a>
                                    </td>
                                </tr>
                                <div id="myEditModal{{ $value->id }}" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" align="center"><b>Edit Music Mood</b></h4>

                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="card-body">

                                                <form method="POST" action="{{route('edit-music-mood')}}"
                                                      accept-charset="UTF-8" class=""
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$value->id}}">


                                                    <div class="box box-default">
                                                        <div class="box-body">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group ">
                                                                        <label for="name" class="control-label">Mood
                                                                            *</label>
                                                                        <input class="form-control" name="name"
                                                                               type="text"
                                                                               id="name" value="{{$value->name}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Update
                                                                music mood
                                                            </button>
                                                        </div>


                                                    </div>


                                                </form>
                                                <!-- /.box-body -->
                                            </div>

                                        </div>
                                    </div>
                                </div>

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
