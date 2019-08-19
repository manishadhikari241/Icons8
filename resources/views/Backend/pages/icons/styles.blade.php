@extends('backEnd.layout')
@section('content')


    <div class="container">
        <form method="post" class="form-group" action="{{route('icon-style')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Add New</h3>
                                </div>

                                <!-- form start -->
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Category Name*</label>
                                        <input class="form-control" placeholder="Name" name="name" type="text">
                                    </div>

                                    <div class="form-group mb-none">
                                        <select name="parent_id" id="parent" class="form-control select2">
                                            <option value="0">Select Parent Category</option>
                                            @foreach($styles as $value)
                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                                @include('dashboard.pages.icons.category_dropdown',['category'=>$value])
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="form-group ">
                                        <label for="name" class="control-label">Category Description *</label>
                                        <textarea id="desc"
                                                  name="description"
                                                  class="form-control"></textarea>
                                    </div>
                                    <div class="form-group ">
                                        <label for="name" class="control-label">Image</label>
                                        <input class="form-control" name="image" type="file" id="name">
                                    </div>
                                    <div class="box-footer">
                                        <button class="btn btn-danger" type="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>


                <!-- /.box -->
        </form>


        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <div class="box-header">
                        <h3 class="box-title">All Styles</h3>
                    </div>
                    <div class="box-body">
                        <table id="example" class="table table-bordered table-striped datatable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Parent</th>
                                <th>Description</th>
                                <th>Icon</th>
                                <th class="sorting-false">Action</th>
                            </tr>
                            </thead>
                            @foreach($styles as $key=>$value)
                                <tbody>
                                <td>{{++$key}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{App\Model\IconStyle::where('id','=',$value->parent_id)->first() ? App\Model\IconStyle::where('id','=',$value->parent_id)->first()->name : '-'}}</td>
                                <td>{!! $value->description !!}</td>
                                <td><img src="{{asset('images/icons/styles/'.$value->image)}} " width="80px"></td>
                                <td>
                                    <a class="btn btn-danger confirm"
                                    href="{{route('icon-style-delete',$value->id)}}"
                                    onclick="return confirm('Delete all categories?')"><i
                                    class="fa fa fa-trash"></i></a>
                                    <a class="btn btn-outline-primary confirm"
                                    href="{{route('edit-icon-style',$value->id)}}"
                                    ><i class="fa fa fa-edit"></i></a>
                                </td>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->

                    <!-- /.box -->
                </div>
            </div>
        </div>
    </div>

@endsection
