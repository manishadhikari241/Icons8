@extends('voyager::master')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
@section('content')

    <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Order Upload</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="{{route('voyager.order-upload')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf
                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Image:</label>
                                                        <input type="file" name="image" class="form-control"
                                                               id="formGroupExampleInput"
                                                               placeholder="enter image title">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Message:</label><span>(Optional)</span>
                                                        <textarea id="desc"
                                                                  name="message"
                                                                  class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="order_id" class="form-control">
                                                            <option selected>--Select order--</option>
                                                            @foreach($order as $value)
                                                                <option value="{{$value->id}}">{{$value->users->first()->name}}-{{$value->images->first()->title}}</option>
                                                                @endforeach
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i>Upload
                                        Order
                                    </button>
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

            <!-- /.col -->

@stop
