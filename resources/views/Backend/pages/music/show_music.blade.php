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
                        <h5 class="card-title">All Musics</h5>
                        <a href="{{route('music-upload')}}"><i class="fa fa-backward"></i>Back</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example-1" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Thumbnail</th>
                                        <th>Music</th>
                                        <th>Music Title</th>
                                        <th>Theme</th>
                                        <th>Tags</th>
                                        <th>Mood</th>
                                        <th>Genre</th>
                                        <th>Artist</th>
                                        <th class="sorting-false">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($music as $key=>$value)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td><img src="{{asset('images/music/'.$value->image)}}" width="60px">
                                            </td>
                                            <td width="5px">
                                                <audio controls>
                                                    <source src="{{asset('/music/'.$value->audio)}}" autoplay>
                                                </audio>
                                            </td>
                                            <td>{{$value->name}}</td>
                                            <td>
                                                @foreach($value->themes as $key)
                                                    {{$key->name}},
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($value->tags as $item)
                                                    {{$item->name}},
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($value->moods as $try)
                                                    {{$try->name}},
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($value->genres as $val)
                                                    {{$val->name}},
                                                @endforeach
                                            </td>
                                            <td>
                                                {{$value->artists->name}}
                                            </td>

                                            <td>
                                                <a class="btn btn-outline-danger confirm"
                                                   href="{{route('delete-music',$value->id)}}"
                                                   onclick="return confirm('Confirm Delete?')"><i
                                                            class="fa fa fa-trash"></i></a>
                                                <a class="btn btn-outline-primary confirm"
                                                   href="{{route('edit-music',$value->id)}}"
                                                ><i class="fa fa fa-edit"></i></a>
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