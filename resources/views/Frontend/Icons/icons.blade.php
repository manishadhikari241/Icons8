<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

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

<div class="icons-page">
    <div class="hero">
        <header class="header">
            <a href="{{route('index')}}" class="logo">
                <img src="http://www.iconhot.com/icon/png/wood-social-networking/512/blinklist-logo-webtreatsetc.png"
                     alt="">
            </a>

            <div class="main-nav container">
                <nav>
                    <ul class="nav-list">

                        <li><a class="nav-link" href="{{route('icons-index')}}">Icons</a></li>
                        <li class="nav-item has-dropdown">
                            <a class="nav-link" href="javascript:void(0)">Photos &nbsp;<i class="icofont-thin-down"></i></a>
                            <div class="nav-dropdown">
                                <ul>
                                    <li><a href="{{route('pixel')}}">Photo Creator</a></li>
                                    <li><a href="{{route('photo')}}">Photo library</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="nav-link" href="{{route('vector')}}">Vectors</a></li>
                        <li><a class="nav-link" href="{{route('music')}}">Music</a></li>
                        <li><a class="nav-link" href="{{route('video')}}">Videos</a></li>

                        <li class="is-pull-right"><a class="nav-link " href="{{route('forum-index')}}">Forum</a></li>
                        <li><a class="nav-link" href="">Resources</a></li>


                    </ul>
                </nav>
                <div class="gamburg">
                    <button class="gamburg-btn"></button>
                </div>
            </div>

            <ul class="nav-actions">
                <li class="has-auth"><a href="">Login</a></li>
            </ul>

        </header>

        <div class="hero-header container">
            <div class="">
                <h1><span class="counter">91,000</span> FREE ICONS</h1>Download free icons in PNG and SVG
            </div>
        </div>

        <div class="search container">
            <div class="search-icon">
                <i class="icofont-search"></i>
            </div>
            <input type="text" id="search" placeholder="Search icon" value="">
        </div>

        <div class="platforms container">
            @foreach($iconstyle as $value)
                <a href="{{route('inner-icons',$value->slug)}}" class="platform">
                    <div class="icon-preview"><img src="{{asset('images/icons/styles/'.$value->image)}}"></div>
                    <div class="platform-title">{{$value->name}}</div>
                </a>
            @endforeach

            <div class="platform expand">
                <div class="icon-preview expand">
                    <div class="dots">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="popular-packs container">
            <div class="popular-title">Free Icon Packs</div>
            <div class="packs">
                @foreach($iconspack as $value)
                    @php
                        $category=   \App\Model\IconCategory::join('icons_category','icons_category.category_id','=','icon_categories.id')
                       ->join('icons_style','icons_style.icon_id','=','icons_category.icon_id')
                       ->join('icon_styles','icon_styles.id','=','icons_style.style_id')
                           ->where('icons_category.category_id',$value->id)
                       ->first();
                    @endphp
                    <a href="{{isset($category->slug)?route('inner-icons',isset($category->slug)? $category->slug:''):'#'}}" class="pack">
                        <div class="icons-grid">
                            @foreach($value->icons->take(8) as $packs)

                                <div class="icon">
                                    <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                         src="{{asset('images/icons/icon_upload/'.$packs->image)}}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="icons-footer">
                            <div class="title">{{$value->title}}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <div class="footer-wrap">
                <div class="footer-nav">
                    <h2 class="footer-nav-header">Design Assets</h2>
                    <ul class="footer-nav-list">
                        <li><a href="">Icons</a></li>
                        <li><a href="">Stock Photos</a></li>
                        <li><a href=""><span>Vector Illustrations</span><span
                                        class="ml-2 badge badge-success">New</span></a></li>
                        <li><a href="">Royalty-free Music</a></li>
                    </ul>
                </div>

                <div class="footer-nav">
                    <h2 class="footer-nav-header">APPS</h2>
                    <ul class="footer-nav-list">
                        <li><a href="">Lunacy</a></li>
                        <li><a href="">Pichon Icons</a></li>
                    </ul>
                </div>
                <div class="footer-nav">
                    <h2 class="footer-nav-header">ABOUT ICONS8</h2>
                    <ul class="footer-nav-list">
                        <li><a href="">In Short</a></li>
                        <li><a href="">Business Model</a></li>
                    </ul>
                </div>
                <div class="footer-nav">
                    <h2 class="footer-nav-header">COMMUNITY</h2>
                    <ul class="footer-nav-list">
                        <li><a href="">Blog</a></li>
                        <li><a href="">Forum</a></li>
                        <li><a href="">Product Hunt</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-wrap">
                <div class="footer-nav">
                    <h2 class="footer-nav-header">REQUEST</h2>
                    <ul class="footer-nav-list">
                        <li><a href="">Icon</a></li>
                        <li><a href="">Photo Shoot</a></li>
                        <li><a href="">Lunacy Feature</a></li>
                    </ul>
                </div>
                <div class="footer-nav">
                    <h2 class="footer-nav-header">FOR DEVELOPERS</h2>
                    <ul class="footer-nav-list">
                        <li><a href="">Icons API</a></li>
                        <li><a href="">Omg-Img</a></li>
                        <li><a href="">Photos API</a></li>
                        <li><a href="">Music API</a></li>
                    </ul>
                </div>
                <div class="footer-nav">
                    <h2 class="footer-nav-header">SUPPORT</h2>
                    <ul class="footer-nav-list">
                        <li><a href="">Forum</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Contact us</a></li>
                    </ul>
                </div>
                <div class="footer-nav">
                    <h2 class="footer-nav-header">LICENSES</h2>
                    <ul class="footer-nav-list">
                        <li><a href="">Free License</a></li>
                        <li><a href="">Paid License</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-block">
                    <div class="footer-copy">© 2018</div>
                </div>
                <div class="footer-terms"><a href="">Privacy Policy</a><a href="">Terms and Conditions</a></div>
            </div>
        </div>


    </footer>


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

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/4.1.0/simplebar.min.js"></script>

<script src="{{asset('js/Frontend/app.min.js')}}"></script>
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
</body>
</html>