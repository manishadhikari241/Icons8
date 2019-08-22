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
                        <h5 class="card-title">All Topics</h5>

                    </div>
                    <div class="card-body">

                        <section class="content">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="box">
                                        <div class="box-header">

                                        </div>
                                        <div class="box-body">
                                            <table id="example1" class="table table-striped table-bordered"
                                                   style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Topic</th>
                                                    <th>Category</th>
                                                    <th>Status<br>
                                                        <small>(Click to approve)</small>
                                                    </th>
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
                                                        <td>
                                                            <form method="post"
                                                                  action="{{route('voyager.topic-status')}}">
                                                                <input type="hidden" name="status"
                                                                       value="{{$value->id}}">
                                                                {{csrf_field()}}
                                                                @if(($value->status)==0)
                                                                    <button class="btn btn-danger btn btn-sm" name="inactive"><i
                                                                                class="fa fa-times"></i>
                                                                    </button>
                                                                @else
                                                                    <button class="btn btn-success btn btn-sm" name="active"><i
                                                                                class="fa fa-check"></i>
                                                                    </button>
                                                                @endif
                                                            </form>
                                                        </td>
                                                        <td>
                                                            {{$value->created_at}}
                                                        </td>
                                                        <td>
                                                            <a target="__blank" class="btn btn-dark" href="{{route('voyager.show-topic',$value->slug)}}"><i
                                                                        class="fa fa-eye"></i></a>
                                                            <a href="{{route('voyager.delete-topic',$value->id)}}"
                                                               onclick="return confirm('Are you sure??')"
                                                               class="btn btn-lg btn btn-danger"><i
                                                                        class="fa fa-trash"></i> </a>

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
@stop


