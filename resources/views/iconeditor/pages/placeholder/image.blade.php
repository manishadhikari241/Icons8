
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#font_fa" data-toggle="tab">Font Awesome 4.6.3</a></li>
        <li><a href="#font_inicons" data-toggle="tab">Ionicons 2.0.1</a></li>
        <li><a href="#font_glyphicons" data-toggle="tab">Glyphicons</a></li>
        <li class="pull-right">
            <div class="checkbox checkbox-text">
                <label>
                    <input type="checkbox" ng-model="transparentbg" ng-click="image()"> Transparent Background
                </label>
            </div>
        </li>
    </ul>
    <div class="selected-container" ng-show="iconselected">
        <div class="selected-icon">
            <strong>SELECTED:</strong>
            <i class="fa" ng-class="iconselected"></i>
            @{{ iconselected }}

            <button ng-click="iconClick(null)" class="btn btn-xs btn-danger btn-close-icon">
                <i class="fa fa-close"></i> Cancel
            </button>
        </div>
    </div>

    <div class="tab-content">
        {{--<div class="tab-pane active" id="font_fa" ng-cloak>--}}
            {{--<div class="icons-list">--}}
                {{--@foreach($fontawesomes as $fontawesome)--}}
                    {{--<div class="text-center icon-list" ng-click="iconClick('{{ $fontawesome }}')">--}}
                        {{--<i class="fa {{ $fontawesome }}"></i>--}}
                        {{--<div class="icon-label">{{ str_replace('fa-', '', $fontawesome) }}</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
                {{--<div class="clearfix"></div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="tab-pane active" id="font_inicons" ng-cloak>--}}
            {{--<div class="icons-list">--}}
                {{--@foreach($ionics as $ionic)--}}
                    {{--<div class="text-center icon-list" ng-click="iconClick('{{ $ionic }}')">--}}
                        {{--<i class="ion {{ $ionic }}"></i>--}}
                        {{--<div class="icon-label">{{ str_replace('ion-', '', $ionic) }}</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
                {{--<div class="clearfix"></div>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="tab-pane active" id="font_glyphicons" ng-cloak>
            <div class="icons-list">

                @foreach($glyphicons as $glyphicon)
                    {{$glyphicon}}
                    <div class="text-center icon-list" ng-click="iconClick('{{ $glyphicon }}')">
                        <i class="glyphicon {{ $glyphicon }}"></i>
                        <div class="icon-label">{{ str_replace('glyphicon-', '', $glyphicon) }}</div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="tab-pane active" id="font_fa" ng-cloak>
            <div class="icons-list">
                {{--@foreach($icon as $value)--}}
                    <div class="text-center icon-list" ng-click="iconClick('{{ json_encode( asset('/storage/WebContent/icons/icon_upload/'.$icon->image))}}')">
                        {{--<i class="fa {{ $fontawesome }}"></i>--}}
                        {{--<div class="icon-label">{{ str_replace('fa-', '', $fontawesome) }}</div>--}}
                    </div>
                {{--@endforeach--}}
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
        <!-- /.tab-content -->
</div>