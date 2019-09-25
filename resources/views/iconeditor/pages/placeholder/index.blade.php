@extends('iconeditor.layouts.master')


@section('imageholdr')

    <div class="box-image-preview" ng-cloak>
        <div class="img-container">
            <img ng-src="@{{ urlimage }}" class="img-responsive">
        </div>
        <textarea type="text" class="form-control" ng-cloak rows="2">@{{ url }}</textarea>

        <button class="btn-download" ng-click="downloadImage()"><i class="fa fa-download"></i> Download Image</button>

    </div>

@endsection

@section('content')

    <div ng-app="ImgholdrApp" ng-controller="ImgholdrController">
        <div class="main-container">

            <div class="media-container">
                <div class="image-preview">
                    @yield('imageholdr')
                </div>

                <div class="control-container" ng-cloak>
                    @include($view_path . 'pages.placeholder.basicusage')
                </div>

            </div>

            <div class="icons-container" ng-cloak>

                @include($view_path . 'pages.placeholder.image')
            </div>

        </div>

    </div>
    <input type="hidden" name="json_fonts" id="json_fonts" value="{{ json_encode($fonts) }}">

@endsection

@section('js')
    <script>
        window.Vars = {
            Url          : '{{ url('') }}',
            Fonts        : JSON.parse($('#json_fonts').val()),
        }
        window.Routes = {
            GetImage    : "{{ route('ROUTE_FRONT_PLACEHOLDER_INDEX') }}",
        }
    </script>
    <script type="text/javascript" src="{{ asset('imageeditor/js/ng-imgholdr.js') }}"></script>

@stop
