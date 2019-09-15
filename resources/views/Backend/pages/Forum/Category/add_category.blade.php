@extends('voyager::master')


@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop


@section('content')
    <div class="container-fluid">
        @include('voyager::alerts')

        <div class="row">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add New</h5>


                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <section class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" action="{{route('add-category-forum')}}"
                                          enctype="multipart/form-data">

                                    @csrf
                                    <!-- general form elements -->
                                        <div class="box">
                                            <div class="box-header with-border">

                                            </div>
                                            <!-- /.box-header -->
                                            <!-- form start -->
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Name" name="name"
                                                           type="text">

                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="control-label">Category Description
                                                        *</label>
                                                    <textarea id="desc"
                                                              name="description"
                                                              class="form-control"></textarea></div>


                                                <div class="form-group mb-none">
                                                    <select name="parent_id" id="parent" class="form-control select2">
                                                        <option value="0">Select Parent Category</option>
                                                        @foreach($categorycomp as $value)
                                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                                            @include('Backend.pages.Forum.Category.category_dropdown',['category'=>$value])
                                                        @endforeach


                                                    </select>

                                                </div>

                                            </div>
                                            <!-- /.box-body -->
                                            <div class="box-footer">
                                                <input class="btn btn-danger btn-xs pull-right" type="submit"
                                                       value="Save">
                                            </div>
                                        </div>
                                        <!-- /.box -->                </form>
                                </div>

                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </section>
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

                        <section class="content">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="box">
                                        <div class="box-header">

                                        </div>
                                        <div class="box-body">
                                            <table id="example1" class="table table-bordered table-striped datatable">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Parent</th>
                                                    <th>Description</th>
                                                    <th>Created at</th>
                                                    <th class="sorting-false">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($cat as $key=> $value)
                                                    <tr>
                                                        <td>{{$value->id}}</td>
                                                        <td>{{$value->name}}</td>
                                                        <td>{{\App\Model\ForumCategory::where('id','=',$value->parent_id)->first()?\App\Model\ForumCategory::where('id','=',$value->parent_id)->first()->name:'-'}}
                                                        </td>
                                                        <td>{!! $value->description !!}</td>
                                                        <td>
                                                            {{$value->created_at}}
                                                        </td>
                                                        <td>
                                                            <a href=""
                                                               onclick="return confirm('Are you sure??')"
                                                               class="btn btn-sm btn btn-danger"><i
                                                                        class="fa fa-trash"></i> </a>
                                                            <a href=""
                                                               class="btn btn-sm btn btn-primary"><i
                                                                        class="fa fa-edit"></i> </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th class="sorting-false">Parent</th>
                                                    <th>Created at</th>
                                                    <th class="sorting-false">Action</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </section>
                    </div>

                    <!-- ./card-body -->

                    <!-- /.card-footer -->
                </div>
            </div>
            <!-- /.col -->
        </div>
    </div>
@stop





