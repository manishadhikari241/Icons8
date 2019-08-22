@extends('voyager::master')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Edit Category</h5>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form method="POST" action="{{route('voyager.category-edit')}}"
                      accept-charset="UTF-8" class=""
                      enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$find->id}}">

                    <div class="box box-default">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group ">
                                        <label for="name" class="control-label">Category Name *</label>
                                        <input class="form-control" name="name" type="text" id="name" value="{{$find->title}}">
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <div class="form-group ">
                                        <label for="status" class="control-label">Status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option @if($find->status==1) selected @endif value="1">Enabled</option>
                                            <option @if($find->status==0) selected @endif value="0">Disabled</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group ">
                                        <label for="name" class="control-label">Category Description *</label>
                                        <textarea id="desc"
                                                  name="description"
                                                  class="form-control">{{$find->description}}</textarea></div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Category</button>

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

@endsection