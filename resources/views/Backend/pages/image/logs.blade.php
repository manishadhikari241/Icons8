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
                        <h1 class="card-title">Logs</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="post" action="{{route('image-log')}} ">
                                    @csrf
                                    <button onclick="return confirm('Are you Sure?')" style="margin-bottom: 10px" class="btn btn-primary delete_all">Delete All
                                        Selected
                                    </button>

                                    <table id="example1" class="table table-striped table-bordered" style="width:100%">

                                        <thead>

                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>User</th>
                                            <th>Ip Address</th>
                                            <th>Order</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($logs as $key=>$value)
                                            <tr>


                                                <td>{{++$key}} <input type="checkbox" name="delete[]" multiple="multiple" value="{{$value->id}}" class="sub_chk" ></td>
                                                <td>{{\Illuminate\Support\Carbon::parse($value->created_at)->format('d-M-Y')}},{{\Illuminate\Support\Carbon::parse($value->created_at)->diffForHumans()}}</td>
                                                <td>{{$value->description}}</td>
                                                <td>{{isset($value->users)? $value->users->name:''}}</td>
                                                <td>{{$value->ip_address}}</td>
                                                <td><img height="40px" width="40px"
                                                         src="{{asset('images/photo_upload/'.$value->orders->images->first()->image)}}">
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-xl" id="exampleModalLong" tabindex="-1" role="dialog"
         aria-labelledby="myExtraLargeModalLabel"
         aria-hidden="true" data-dismiss="modal">


    </div>
@stop


@push('javascript')



@endpush
