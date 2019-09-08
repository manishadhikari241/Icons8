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
                        <h5 class="card-title">Assigned Orders</h5>
                        <a href="{{route('voyager.show-image')}}"><i class="fa fa-backward"></i>Back</a>
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
                                        <th>User</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th class="sorting-false">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order as $key=>$value)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>
                                                    <img src="{{asset('images/photo_upload/'.\App\Model\Order::where('id',$value->order_id)->first()->images->first()->image)}}"
                                                         width="150px">
                                            </td>
                                            <td>
                                               {{\App\User::where('id',$value->user_id)->first()->name}}
                                            </td>
                                            <td>
                                                <form method="post" action="{{route('voyager.assign-status')}}">
                                                    <input type="hidden" name="id" value="{{$value->id}}">
                                                    @csrf
                                               <select name="status">
                                                   <option selected>Select order status</option>
                                                   <option name="pending" @if($value->status==0) selected @endif value="0">Pending</option>
                                                   <option name="progress" @if($value->status==1) selected @endif value="1">In progress</option>
                                                   <option name="completed" @if($value->status==2)  selected @endif value="2">Completed</option>
                                               </select>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </td>
                                            <td>
                                                {{\Illuminate\Support\Carbon::parse($value->created_at)->format('M d y')}}
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-danger confirm"
                                                   href="{{route('voyager.assign-delete',$value->id)}}"
                                                   onclick="return confirm('Confirm Delete?')"><i
                                                            class="fa fa fa-trash"></i></a>
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