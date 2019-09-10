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
                        <h5 class="card-title">Upload Image</h5>
                        <a href="{{route('show-image')}}"><i class="fa fa-image"></i>View all photos</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form method="POST" action="{{route('image-upload')}}"
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
                                                        <label for="formGroupExampleInput">Image Name:</label>
                                                        <input type="text" name="name" class="form-control"
                                                               id="formGroupExampleInput"
                                                               placeholder="enter image title">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Uploader:</label>
                                                        <select class="form-control" name="uploader">
                                                            <option selected>-Please select user-</option>
                                                            @foreach($user as $value)
                                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">License:</label>
                                                        <input type="text" name="license" class="form-control"
                                                               id="formGroupExampleInput">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Image Type</label>
                                                        <select class="select form-control" name="image_type">
                                                            <option selected="selected" value="">Select image type
                                                            </option>
                                                            <option id="free" value="0">Free</option>
                                                            <option id="premium" value="1">Premium</option>
                                                        </select>
                                                    </div>
                                                    {{--<div class="form-group">--}}
                                                        {{--<label for="formGroupExampleInput">Price:</label>--}}
                                                        {{--<input type="text" name="license" class="form-control"--}}
                                                               {{--id="formGroupExampleInput">--}}
                                                    {{--</div>--}}
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Description:</label>
                                                        <textarea id="desc"
                                                                  name="description"
                                                                  class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Image:</label>
                                                        <input type="file" name="image" class="form-control"
                                                               id="formGroupExampleInput">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Status:</label>
                                                        <select class="form-control" name="status">
                                                            <option value="1">Enabled</option>
                                                            <option value="0">Disabled</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">New:</label>
                                                        <select class="form-control" name="is_new">
                                                            <option value="1">New</option>
                                                            <option value="0">Not new</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Rising:</label>
                                                        <select class="form-control" name="is_rising">
                                                            <option value="1">Rising</option>
                                                            <option value="0">Not rising</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Top:</label>
                                                        <select class="form-control" name="is_top">
                                                            <option value="1">Top</option>
                                                            <option value="0">Not top</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="box box-default">

                                                <div class="box-header with-border">
                                                    <h6 class="box-title">Category:</h6>
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <div class="form-group mb-none">
                                                        <select class="form-control" name="category[]" id="cat"
                                                                multiple="multiple">
                                                            @foreach($cat as $value)
                                                                <option value="{{$value->id}}">{{$value->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="box-header with-border">
                                                    <h6 class="box-title">Gender:</h6>
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <div class="form-group mb-none">
                                                        <select class="form-control" name="gender[]" id="gen"
                                                                multiple="multiple">
                                                            @foreach($gender as $value)
                                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="box-header with-border">
                                                    <h6 class="box-title">Age:</h6>
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <div class="form-group mb-none">
                                                        <select class="form-control" name="age[]" id="age"
                                                                multiple="multiple">
                                                            @foreach($age as $value)
                                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="box-header with-border">
                                                    <h6 class="box-title">Race:</h6>
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <div class="form-group mb-none">
                                                        <select class="form-control" name="race[]" id="race"
                                                                multiple="multiple">
                                                            @foreach($race as $value)
                                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="box-header with-border">
                                                    <h6 class="box-title">Hair:</h6>
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <div class="form-group mb-none">
                                                        <select class="form-control" name="hair[]" multiple="multiple"
                                                                id="hair">
                                                            @foreach($hair as $value)
                                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="box-header with-border">
                                                    <h6 class="box-title">Body type:</h6>
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <div class="form-group mb-none">
                                                        <select class="form-control" name="body_type[]"
                                                                multiple="multiple" id="body">
                                                            @foreach($body as $value)
                                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="box-header with-border">
                                                    <h6 class="box-title">Special Features:</h6>
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <div class="form-group mb-none">
                                                        <select class="form-control" name="special_feature[]"
                                                                id="special" multiple="multiple">
                                                            @foreach($special as $value)
                                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="box-header with-border">
                                                    <h6 class="box-title">Tags:</h6>
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <div class="form-group mb-none">
                                                        <select class="form-control" name="tags[]" id="tags"
                                                                multiple="multiple">
                                                            @foreach($tag as $value)
                                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="box-header with-border">
                                                    <h6 class="box-title">Credits:</h6>
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <h6 class="box-title">Photographer:</h6>
                                                    <div class="form-group mb-none">
                                                        <select class="form-control" name="photographer[]" id="credits"
                                                                multiple="multiple">
                                                            @foreach($credits as $value)
                                                                <option value="{{$value->id}}">{{$value->photographer}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                    <h6 class="box-title">Models:</h6>
                                                    <div class="form-group mb-none">
                                                        <select class="form-control" name="model[]" id="models"
                                                                multiple="multiple">
                                                            @foreach($credits as $value)
                                                                <option value="{{$value->id}}">{{$value->model}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i>Upload
                                        Image
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
        </div>
    </div>

@stop
@push('javascript')
    <script>
        $(document).ready(function () {
            $('.select').on('change', function () {
                var premium = $(this).val();
                if (premium == 1) {
                    $(this).parent().append(' <div class="premium form-group">\n' +
                        '                                                        <label for="formGroupExampleInput">Price:</label>\n' +
                        '                                                        <input type="text" name="price" class="form-control"\n' +
                        '                                                               id="formGroupExampleInput">\n' +
                        '                                                    </div>')
                }
                else {
                  $(this).parent().find('.premium').remove()
                }
            });
        });
    </script>
@endpush