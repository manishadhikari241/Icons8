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
                        <h5 class="card-title">Edit Image</h5>
                        <a href="{{route('voyager.show-image')}}"><i class="fa fa-image"></i>View all photos</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form method="POST" action="{{route('voyager.image-edit')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$img->id}}">

                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="card">
                                                <div class="card-body">

                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Image Name:</label>
                                                        <input type="text" name="name" class="form-control"
                                                               id="formGroupExampleInput" value="{{$img->title}}"
                                                               placeholder="enter image title">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Uploader:</label>
                                                        <select class="form-control" name="uploader">
                                                            <option selected>-Please select user-</option>
                                                            @foreach($user as $value)
                                                                <option @if ($value->id==$img->user_id) selected
                                                                        @endif value="{{$value->id}}">{{$value->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">License:</label>
                                                        <input type="text" name="license" class="form-control"
                                                               value="{{$img->license}}"
                                                               id="formGroupExampleInput">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Image Type</label>
                                                        <select class="select form-control" name="image_type">
                                                            <option @if($img->image_type==0)selected @endif value="0"
                                                                    id="free">
                                                                Free
                                                            </option>
                                                            <option @if($img->image_type==1)selected @endif value="1"
                                                                    id="premium">
                                                                Premium
                                                            </option>
                                                        </select>

                                                    </div>

                                                    @if($img->image_type==1)
                                                    <div class="premium form-group">
                                                    <label for="formGroupExampleInput">Price:</label>
                                                    <input type="text" name="price" class="form-control" value="{{$img->cost}}"
                                                    id="formGroupExampleInput">
                                                    </div>
                                                    @endif

                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Description:</label>
                                                        <textarea id="desc"
                                                                  name="description"
                                                                  class="form-control">{{$img->description}}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Current Image:</label>
                                                        <img src="{{asset('images/photo_upload/'.$img->image)}}"
                                                             width="100px">
                                                        <input type="file" name="image" class="form-control"
                                                               id="formGroupExampleInput">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Status:</label>
                                                        <select class="form-control" name="status">
                                                            <option @if($img->status==1) selected @endif value="1">
                                                                Enabled
                                                            </option>
                                                            <option @if($img->status==0) selected @endif value="0">
                                                                Disabled
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">New:</label>
                                                        <select class="form-control" name="is_new">
                                                            <option @if($img->is_new==1)selected @endif value="1">New
                                                            </option>
                                                            <option @if($img->is_new==0)selected @endif value="0">Not
                                                                new
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Rising:</label>
                                                        <select class="form-control" name="is_rising">
                                                            <option @if($img->is_rising==1)selected @endif value="1">
                                                                Rising
                                                            </option>
                                                            <option @if($img->is_rising==0)selected @endif value="0">Not
                                                                rising
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Top:</label>
                                                        <select class="form-control" name="is_top">
                                                            <option @if($img->is_top==1)selected @endif value="1">Top
                                                            </option>
                                                            <option @if($img->is_top==0)selected @endif value="0">Not
                                                                top
                                                            </option>
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
                                                                <option @if($img->categories()->where('category_id',$value->id)->where('image_id',$img->id)->first()) selected
                                                                        @endif value="{{$value->id}}">{{$value->title}}</option>
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
                                                                <option @if($img->genders()->where('gender_id',$value->id)->where('image_id',$img->id)->first()) selected
                                                                        @endif
                                                                        value="{{$value->id}}">{{$value->name}}</option>
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
                                                                <option @if($img->ages()->where('age_id',$value->id)->where('image_id',$img->id)->first()) selected
                                                                        @endif
                                                                        value="{{$value->id}}">{{$value->name}}</option>
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
                                                                <option @if($img->races()->where('race_id',$value->id)->where('image_id',$img->id)->first()) selected
                                                                        @endif
                                                                        value="{{$value->id}}">{{$value->name}}</option>
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
                                                                <option @if($img->hairs()->where('hair_id',$value->id)->where('image_id',$img->id)->first()) selected
                                                                        @endif
                                                                        value="{{$value->id}}">{{$value->name}}</option>
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
                                                                <option @if($img->bodytypes()->where('body_id',$value->id)->where('image_id',$img->id)->first()) selected
                                                                        @endif
                                                                        value="{{$value->id}}">{{$value->name}}</option>
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
                                                                <option @if($img->specials()->where('special_id',$value->id)->where('image_id',$img->id)->first()) selected
                                                                        @endif
                                                                        value="{{$value->id}}">{{$value->name}}</option>
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
                                                                <option {{\Illuminate\Support\Facades\DB::table('image_tags')->where('image_id',$img->id)->where('tag_id',$value->id)->first() ? 'selected' : ''
                                                                        }} value="{{$value->id}}">{{$value->name}}</option>
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
                                                                <option @if($img->photos()->where('image_id',$img->id)->where('photographer_id',$value->id)->first()) selected
                                                                        @endif value="{{$value->id}}">{{$value->photographer}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                    <h6 class="box-title">Models:</h6>
                                                    <div class="form-group mb-none">
                                                        <select class="form-control" name="model[]" id="models"
                                                                multiple="multiple">
                                                            @foreach($credits as $value)
                                                                <option @if($img->models()->where('image_id',$img->id)->where('model_id',$value->id)->first()) selected
                                                                        @endif value="{{$value->id}}">{{$value->model}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i>Update Image
                                </button>
                            </div>

                            <!-- /.box-body -->

                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- ./card-body -->
                <!-- /.card-footer -->
            </div>
        </div>

        <!-- /.col -->
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
                        '                                                            value="{{$img->cost}}"   id="formGroupExampleInput">\n' +
                        '                                                    </div>')
                }
                if (premium == 0) {
                    $(this).parent().parent().find('.premium').remove()
                }
            });
        });
    </script>
@endpush