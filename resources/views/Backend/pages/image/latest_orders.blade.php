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
                        <h5 class="card-title">Image Orders</h5>
                        <a href="{{route('show-image')}}"><i class="fa fa-backward"></i>Back</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image
                                        <br>
                                        <small>(Click to view image)</small>
                                        </th>
                                        <th>User</th>
                                        <th>Cost</th>
                                        <th>Status
                                            <br>
                                            <small>(Click to change order status)</small>
                                        </th>
                                        <th>
                                            Assign Order
                                        </th>
                                        <th>Order Date</th>
                                        <th class="sorting-false">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order as $key=>$value)
                                        <tr>
                                            <td class="order_id" data-id="{{$value->id}}">{{++$key}}</td>

                                            <td class="display" data-id="{{$value->id}}">
                                                @foreach($value->images as $img)
                                                    <img src="{{asset('images/photo_upload/'.$img->image)}}"
                                                         width="60px">
                                                @endforeach

                                            </td>
                                            <td>
                                                @foreach($value->users as $user)
                                                    {{$user->name}}
                                                @endforeach
                                            </td>
                                            <td>
                                               @foreach($value->images as $val)
                                                   {{$val->cost}}$
                                                   @endforeach
                                            </td>
                                            <td>

                                                <form method="post" action="{{route('order-status')}}">
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
                                                <select class="select">
                                                    <option value="0">Select user</option>
                                                    @foreach($users as $item)
                                                    <option @if(\App\Model\OrderAssign::where('user_id',$item->id)->where('order_id',$value->id)->first()) selected @endif value="{{$item->id}}">
                                                            {{$item->name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                {{\Illuminate\Support\Carbon::parse($value->created_at)->format('M d y')}}
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-danger confirm"
                                                   href="{{route('delete-order',$value->id)}}"
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

    <div class="modal fade bd-example-modal-xl" id="exampleModalLong" tabindex="-1" role="dialog"
         aria-labelledby="myExtraLargeModalLabel"
         aria-hidden="true" data-dismiss="modal">


    </div>
@stop


@push('javascript')

    <script>
        $(document).ready(function () {
            $('.select').on('change', function () {
                var id = $(this).find(":selected").val();
                var order_id = $(this).parent().parent().find('.order_id').attr('data-id');
                console.log(order_id);
                if (confirm('Confirm assign?')) {
                    $.ajax({
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        url: "{{route('order-assign')}}",
                        type: "POST",
                        data: {
                            user_id: id,
                            order_id: order_id
                        },
                        success: function (response) {
                            toastr.success(response.message);
                        }
                    });
                }
            });

            $('.display').click(function (e) {
                var $modal = $('#exampleModalLong');
                e.preventDefault();
                var id = $(this).attr('data-id');
                var tempEditUrl = "{{route('image-modal',':id')}}";
                tempEditUrl = tempEditUrl.replace(':id', id);
                $modal.load(tempEditUrl, function (response) {
                    $modal.modal({show: true});
                });
            });
        });
    </script>


@endpush
