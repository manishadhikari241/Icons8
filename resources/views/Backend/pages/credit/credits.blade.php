@extends('backEnd.layout')
@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add Image Credits</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form method="POST" action="{{route('credits')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf

                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Photographer</label>
                                                <input class="form-control" name="photographer" type="text" id="name">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Models</label>
                                                <input class="form-control" name="model" type="text" id="name">
                                            </div>
                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-primary">Add Credits</button>

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
                        <h5 class="card-title">Image Credits</h5>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <!-- /.row -->
                        <table id="user" class="table table-bordered table-sm">
                            <thead>
                            <tr>
                                <th>Sn</th>
                                <th>Photographer</th>
                                <th>Models</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($credit as $key => $value)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$value->photographer}}</td>
                                    <td>{{$value->model}}</td>
                                    <td>
                                        <a href="{{route('credits-delete',$value->id)}}"
                                           onclick="return confirm('Confirm Delete?')"
                                           class="btn btn-sm btn btn-danger"><i class="fa fa-trash"></i> </a>
                                        <a href="{{route('credits-edit',$value->id)}}" data-toggle="modal"
                                           data-target="#myEditModal{{ $value->id }}"
                                           class="btn btn-sm btn btn-primary"><i
                                                    class="fa fa-edit"></i> </a>
                                    </td>
                                </tr>
                                <div id="myEditModal{{ $value->id }}" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" align="center"><b>Edit Credit</b></h4>

                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="card-body">

                                                <form method="POST" action="{{route('credits-edit')}}"
                                                      accept-charset="UTF-8" class=""
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$value->id}}">


                                                    <div class="box box-default">
                                                        <div class="box-body">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group ">
                                                                        <label for="name" class="control-label">Photographer
                                                                            *</label>
                                                                        <input class="form-control" name="photographer"
                                                                               type="text"
                                                                               id="name"
                                                                               value="{{$value->photographer}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group ">
                                                                        <label for="name" class="control-label">Model
                                                                            *</label>
                                                                        <input class="form-control" name="model"
                                                                               type="text"
                                                                               id="name" value="{{$value->model}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Update
                                                                Credits
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
