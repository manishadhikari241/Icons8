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
                        <input aria-label="Search" placeholder="Search icons" class="auto-complete-input">

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
                        <div class="title">Styles<span class="count">28</span></div>
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
                                                 src="{{asset('images/icons/icon_upload/'.\App\Model\IconUpload::where('id',$value->id)->first()->image)}}">
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
        <div class="app-page">
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
                                    <a href="javascript:void(0)" data-id="{{$value->id}}"
                                       class="category_click preview-grid-item">
                                        <div class="badge is-right">Free SVG</div>
                                        <div class="preview-icons-grid">
                                            @foreach(\App\Model\IconCategory::where('id',$value->id)->first()->icons->take(8) as $icons)

                                                <div class="preview-icons-item">
                                                    <div class="app-icon is-ios7"><img data-id="{{$value->id}}" alt=""
                                                                                       style="height: 50px; width: 50px;"
                                                                                       src="{{asset('images/icons/icon_upload/'.$icons->image)}}">
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
    });

</script>

</body>
</html>