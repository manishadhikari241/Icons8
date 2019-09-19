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
                        <h5 class="card-title">Icon Category</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form method="POST" action="{{route('category')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf

                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Category Name *</label>
                                                <input class="form-control" name="name" type="text" id="name">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Image</label>
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
                                                          class="form-control"></textarea></div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Category</button>

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
                        <h5 class="card-title">All Categories</h5>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <!-- /.row -->
                        <table id="user" class="table table-bordered table-sm">
                            <thead>
                            <tr>
                                <th>Sn</th>
                                <th><i class="fa fa-image"></i></th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($cat as $key => $value)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td><img src="{{asset('storage/WebContent/icons/category/'.$value->image)}}"
                                             width="80px"></td>
                                    <td>{{$value->title}}</td>
                                    <td>{!! $value->description !!}</td>
                                    <td>
                                        <a href="{{route('icon-category-delete',$value->id)}}"
                                           onclick="return confirm('Confirm Delete?')"
                                           class="btn btn-sm btn btn-danger"><i class="fa fa-trash"></i> </a>
                                        <a href="{{route('edit-icon-category',$value->id)}}"
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
