@extends('voyager::master')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop


@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Completed Orders</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example-1" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                        <th class="sorting-false">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($upload as $key=>$value)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>
                                                <img src="{{asset('images/order_upload/'.$value->image)}}"
                                                     width="150px">
                                            </td>
                                            <td>
                                                {!! $value->message !!}}
                                            </td>
                                            <td>
                                                {{\Illuminate\Support\Carbon::parse($value->created_at)->format('M d y')}}
                                            </td>
                                            <td>
                                                <a href="{{route('order-download',$value->id)}}" class="btn-primary">Download</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop