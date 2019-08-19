@extends('backEnd.layout')
@section('content')
    <example-component></example-component>
<category></category>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add New</h5>

                        <div class="card-tools">

                            <button type="button" class="btn btn-tool" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-widget="remove">
                                <i class="fa fa-times"></i>
                            </button>

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                    </div>

                    <!-- ./card-body -->

                    <!-- /.card-footer -->
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">All Topics</h5>

                        <div class="card-tools">

                            <button type="button" class="btn btn-tool" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-widget="remove">
                                <i class="fa fa-times"></i>
                            </button>

                        </div>
                    </div>
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
                                                    <th>Topic</th>
                                                    <th>Category</th>
                                                    <th>Status</th>
                                                    <th>Created at</th>
                                                    <th class="sorting-false">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($forum as $key=> $value)
                                                    <tr>
                                                        <td>{{++$key}}</td>
                                                        <td>{{$value->topic}}</td>
                                                        <td>{{$value->Categories->name}}</td>
                                                        <td>@if($value->status =='0')<label class="red">
                                                                Pending
                                                            </label>@endif
                                                        </td>
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
                                                    <th>Topic</th>
                                                    <th>Category</th>
                                                    <th>Status</th>
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

                    <!-- /.card-header -->

                    <!-- ./card-body -->

                    <!-- /.card-footer -->
                </div>
            </div>
            <!-- /.col -->
        </div>
    </div>

@endsection
