<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Icons website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplebar/4.1.0/simplebar.min.css">


    <link rel="stylesheet" href="{{asset('css/Frontend/icofont/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/Frontend/responsive.css')}}">
    <style>
        .algolia-autocomplete {
            display: flex !important;
            width: 100% !important;
        }

        .aa-input {
            display: block;

        }

        .aa-input-container {
            display: inline-block;
            position: relative;
        }

        .aa-input-search {
            width: 300px;
            padding: 12px 28px 12px 12px;
            border: 1px solid #e4e4e4;
            box-sizing: border-box;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .aa-input-search::-webkit-search-decoration, .aa-input-search::-webkit-search-cancel-button,
        .aa-input-search::-webkit-search-results-button, .aa-input-search::-webkit-search-results-decoration {
            display: none;
        }

        .aa-input-icon {
            height: 16px;
            width: 16px;
            position: absolute;
            top: 50%;
            right: 16px;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            fill: #e4e4e4;
            pointer-events: none;
        }

        .aa-dropdown-menu {
            background-color: #fff;
            border: 1px solid rgba(168, 168, 168, 0.6);
            width: 100%;
            margin-top: 10px;
            box-sizing: border-box;
        }

        .aa-dropdown-menu .search-cat {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            color: #000;
            float: left;
            display: inline;
            width: 70%;
        }

        .aa-dropdown-menu .search-cat .searchTerm {
            font-weight: 700;
            color: #000;
            padding-right: 10px;
        }

        .aa-dropdown-menu .search-cat .in {
            padding-right: 10px;
        }

        .aa-dropdown-menu .search-cat .searchCategory {
            /*padding-left:10px;*/
        }

        .aa-dropdown-menu .total {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            width: 30%;
            float: right;
            display: inline;
            font-size: 14px;
            color: gray;
            text-align: right;
        }

        .aa-dropdown-menu span {
            display: inline;
        }

        .aa-dropdown-menu .total .count {
            color: #000;
            padding: 20px;
        }

        .aa-dropdown-menu .product-image {
            padding-right: 10px;
            width: 60px;
            display: table-cell;

        }

        .aa-dropdown-menu .product-image img {
            width: 80px;
            max-width: 80px;
            max-height: 62px;
        }

        .aa-dropdown-menu .product-details {
            padding-top: 10px;
            display: table-cell;
            width: 99%;
            vertical-align: top;
        }

        .aa-dropdown-menu .product-details .product-title {
            display: block;
            color: gray;
            direction: ltr;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .aa-dropdown-menu .product-details .product-title .description {
            padding-left: 10px;
        }

        .aa-dropdown-menu .product-details .product-title > span:first-child {
            float: left;
            padding-right: 5px;
        }

        .aa-dropdown-menu .product-details .product-price {
            color: #da061c;
        }

        .aa-suggestion {
            padding: 6px 12px;
            cursor: pointer;
        }

        .aa-suggestions-category {
            border-bottom: 1px solid rgba(228, 228, 228, 0.6);
            border-top: 1px solid rgba(228, 228, 228, 0.6);
            padding: 6px 12px;
        }

        .aa-dropdown-menu > div {
            display: inline-block;
            width: 100%;
            vertical-align: top;
        }

        .aa-empty {
            padding: 6px 12px;
        }

        .aa-hint {
            width: 100%;
            height: 100%;
        }
    </style>

</head>
<body>


<div>
    <div class="app-icons-menu">
        <div class="app-menu-toggle nav-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="logo-wrap">
            <a href="/icons" class="logo app-menu-logo">
                <img src="http://www.iconhot.com/icon/png/wood-social-networking/512/blinklist-logo-webtreatsetc.png"
                     alt="">

            </a>


        </div>
        <div class="app-search-top ">
            <div class="app-search">
                <div class="app-search-input">
                    <div class="auto-complete">
                        <div class="app-search-icon">
                            <i class="icofont-search"></i>
                        </div>
                        <input aria-label="Search" id="search" placeholder="Search icons" class="auto-complete-input">

                    </div>
                </div>
            </div>
        </div>
        <div class="app-menu-profile">
            <div class="app-menu-language">
                <div class="app-popup">
                    <div class="app-popup-toggle">
                        <div class="lang-label">en</div>
                        <div class="app-popup-arrow"></div>
                    </div>

                </div>
            </div>
            <div class="app-menu-auth">

                <div class="login">Login</div>
                <div class="login-modal">

                </div>
            </div>
        </div>
        <button class="search-mobile-trigger">
                <span class="search-mobile-show">
                    <i class="icofont-search"></i>
                </span>
        </button>
    </div>
    <div class="app">
        <div class="app-left-sidebar">
            <div class="app-left-sidebar-content">
                <div class="app-expand-wrap">
                    <div class="app-expand is-open">
                        <div class="toggle"><i class="icofont-thin-down"></i></div>
                        <div class="title">Styles<span class="count">{{count($iconstyle)}}</span></div>
                        <div class="content" style="">
                            <div class="platform-filter app-left-sidebar-platforms">
                                <div>
                                    <div data-simplebar="init" class="list">
                                        <div class="simplebar-scroll-content"
                                             style="padding-right: 17px;margin-bottom: -34px;">
                                            <div class="simplebar-content"
                                                 style="padding-bottom: 17px; margin-right: -17px;">
                                                @foreach($iconstyle as $value)
                                                    @if($value->subCategory->isnotEmpty())
                                                        <div class="app-expand is-sub-expand">
                                                            <div class="toggle"><i class="icofont-thin-down"></i></div>
                                                            <div class="title"><a
                                                                        href="{{route('inner-icons',$value->slug)}}"> {{$value->name}}</a>
                                                            </div>
                                                            <div class="content">
                                                                <div class="list sub-list">
                                                                    @include('Frontend.Icons.styles_category_extented',['styles'=>$value])
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <a href="{{route('inner-icons',$value->slug)}}"
                                                           class="list-item">{{$value->name}}</a>

                                                    @endif

                                                @endforeach


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-expand is-open">
                        <div class="toggle"><i class="icofont-thin-down"></i></div>
                        <div class="title">Trends<span class="count">{{count($trends)}}</span></div>
                        <div class="content" style="">
                            <div class="platform-filter app-left-sidebar-platforms">
                                <div>
                                    <div data-simplebar="init" class="list">
                                        <div class="simplebar-scroll-content"
                                             style="padding-right: 17px; margin-bottom: -34px;">
                                            <div class="simplebar-content"
                                                 style="padding-bottom: 17px; margin-right: -17px;">
                                                <trendfilter></trendfilter>
                                                @foreach($trends as $value)
                                                    <a href="javascript:void(0)"
                                                       data-id="{{$value->id}}"
                                                       class="trend_filter list-item">{{$value->category}}</a>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="actions">
                    <div class="collections">
                        <div class="header"><span class="collections-title">Collections</span><span
                                    class="view-all">View All</span></div>
                        <div class="recent-collection">
                            <div class="collection is-active">
                                <div class="preview">
                                    <div class="titles">Favorites</div>
                                    <div class="info is-no-inline"><span>0</span> icons</div>

                                    @if(\Gloudemans\Shoppingcart\Facades\Cart::content()->isnotEmpty())
                                        @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $value)
                                            <img class="download" alt="Mongrol icon" style="height: 32px; width: 32px;"
                                                 src="{{asset('storage/WebContent/icons/icon_upload/'.\App\Model\IconUpload::where('id',$value->id)->first()->image)}}">
                                        @endforeach
                                    @endif
                                    <div class="wrap-icon">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div id="trend_replace" class="app-page">
            <div class="simplebar-content">
                <div class="app-page-section custom-padding">
                    <div class="app-header">
                        <div class="box-header">
                            <div class="title-wrap">
                                <h1 class="app-title no-wrap">{{$style}}</h1></div>
                            <div class="app-page-subtitle is-small is-left">
                                <p>Our iOS icon pack follows the <a
                                            href="https://developer.apple.com/ios/human-interface-guidelines/icons-and-images/custom-icons/">guidelines</a>
                                    from Apple. These icons are <a
                                            href="https://icons8.com/articles/make-pixel-perfect-icons/">pixel-perfect</a>
                                    at 50×50 pixels and the style is outline with the base stroke being 2px. All the
                                    icons have a filled version. This pack works for iOS applications with vertical
                                    lists like iOS Mail App.</p>
                                <p>This is by far our most popular icon pack. The Icons8 team created all the icons
                                    in-house, and our senior icon designer, Alex, started it immediately after the
                                    iOS 7
                                    release and keeps drawing and supervising it to this day.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icon-new-page">
                    <div class="app-page-section custom-padding">
                        <div class="preview-grid" id="category_click_icons">
                            @foreach($categories as $value)
                                @if(\App\Model\IconCategory::where('id',$value->id)->first())
                                    <a href="{{route('pack-page',$value->slug)}}" data-id="{{$value->id}}"
                                       class="category_click preview-grid-item">
                                        <div class="badge is-right">Free SVG</div>
                                        <div class="preview-icons-grid">
                                            @foreach(\App\Model\IconCategory::where('id',$value->id)->first()->icons->take(8) as $icons)

                                                <div class="preview-icons-item">
                                                    <div class="app-icon is-ios7"><img data-id="{{$value->id}}" alt=""
                                                                                       style="height: 50px; width: 50px;"
                                                                                       src="{{asset('storage/Webcontent/icons/icon_upload/'.$icons->image)}}">
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                        <div class="preview-grid-title">{{$value->title}}</div>
                                    </a>
                                @endif
                            @endforeach
                            <div class="preview-grid-item is-empty"></div>
                            <div class="preview-grid-item is-empty"></div>
                            <div class="preview-grid-item is-empty"></div>
                            <div class="preview-grid-item is-empty"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-right-sidebar ">
            <div class="close-collection">
                <i class="icofont-close-line-circled"></i>
            </div>
            <div class="collection-sidebar">
                <div class="app-right-sidebar-content">
                    <div class="collection-workspace">
                        <div class="download-collection">
                            <div class="actions button-group">
                                <div class="button is-thin">Download</div>
                            </div>
                        </div>
                        <div class="icons-container">
                            <div class="icons">


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<!-- wow js -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/4.1.0/simplebar.min.js"></script>

<script src="{{asset('js/Frontend/app.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $('.category_click').click(function () {
            let category_id = $(this).attr('data-id');

            $.ajax({

                url: "{{route('category-click-icons')}}",
                type: "GET",
                data: {
                    category_id: category_id
                },
                success: function (data) {
                    $('#category_click_icons').replaceWith($('#category_click_icons').html(data));
                }

            });
        });
        $('.trend_filter').on('click', function () {
            let id = $(this).attr('data-id');
            $.ajax({
                url: "{{route('trend-filter')}}",
                type: "GET",
                data: {
                    trend_id: id,
                },
                success: function (data) {
                    $('#trend_replace').replaceWith($('#trend_replace').html(data));

                }
            });
        });
    });

</script>
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script>
    $(document).ready(function () {
        $(function () {
            autocomplete('#search', {}, [
                {
                    source: function (request, response) {
                        $.ajax({
                            url: "{{ route('icons-search') }}",
                            data: {query: $("#search").val(), category: $('#cat').val()},
                            dataType: "json",
                            type: "GET",
                            success: function (data) {
                                // console.log(data);
                                response($.map(data, function (obj) {
                                    console.log(obj);
                                    return {
                                        // obj
                                        name: obj.title,
                                        slug: obj.slug,
                                        description: obj.description
                                    };
                                }));
                            }
                        });

                    },
                    displayKey: 'icons',

                    templates: {
                        header: '<div class="aa-suggestions-category"><span class="title text-center"><i class="fa fa-shopping-bag"></i>Icons</span></div>',
                        suggestion: function (suggestion) {
                            console.log(suggestion)
                            return '<div>' + '<a href="{{ url('/') }}/inner-icons/' + suggestion.slug + '">' + '' +

                                '<span class="product-details">' +
                                '<span class="product-title">' +
                                '<span><strong>' + suggestion.name + '</strong></span>' +
                                '</span>' +
                                '<span class="badge-category"> ' + (suggestion.description.substring(200, 0)) + ' </span>' +
                                '</span>' +
                                '</a>' +
                                '</div>'
                                ;
                        }
                    }
                }

            ]);


        });
    });


</script>
{{--<script src="{{asset('js/app.js')}}"></script>--}}
</body>
</html>
