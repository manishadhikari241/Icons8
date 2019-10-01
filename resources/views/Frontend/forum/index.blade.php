<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet">
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

<?php use Carbon\Carbon; ?>

<div class="forum_layout">
    <header class="header">
        <a href="{{route('index')}}" class="logo">
            <img src="http://www.iconhot.com/icon/png/wood-social-networking/512/blinklist-logo-webtreatsetc.png"
                 alt="">
        </a>

        <div class="panel ">
            @if(\Illuminate\Support\Facades\Auth::check())
                <span class="header-buttons">
              <button class="widget-button btn btn-primary  sign-up-button ">

                  <span class="d-button-label">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
              </button>

            </span>

            @else
                <span class="header-buttons">
              <button class="widget-button btn btn-primary  sign-up-button " data-toggle="modal"
                      data-target="#forumregister">
                  <span class="d-button-label">Sign Up</span> |
                    <span class="d-button-label">Log In</span>
              </button>
            </span>

            @endif
            <ul role="navigation" class="icons d-header-icons ">
                <li class="header-dropdown-toggle">
                    <a href="" title="search topics, posts, users, or categories"
                       id="search-button"
                       class="icon btn-flat">
                        <i class="fa fa-search d-icon d-icon-search" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="header-dropdown-toggle">
                    <a href="" title="go to another topic list or category"
                       id="toggle-hamburger-menu" class="icon btn-flat">
                        <i class="fa fa-bars d-icon d-icon-bars" aria-hidden="true"></i>
                    </a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <li class="header-dropdown-toggle">
                        <a href="" class="icon" id="user-setting-button">
                            <div>
                                <img alt="" width="32" height="32"
                                     src="{{asset('storage/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}"
                                     title="{{\Illuminate\Support\Facades\Auth::user()->name}}" class="avatar">
                            </div>
                        </a>
                    </li>
                @endif

            </ul>
        </div>
        <div class="search-menu">
            <div class="menu-panel">

                <div class="search-input">
                    <input id="search" name="search_term" type="search" value="" placeholder="">
                </div>

            </div>
        </div>

        <div class="hamburger-panel">
            <div class="menu-panel">
                <div class="general-links">
                    <ul class="menu-links ">
                        <li class="latest_filter"><a class="widget-link latest-topics-link" href="javascript:void(0)"
                                                     title="topics with recent posts"><span
                                        class="d-label">Latest</span></a></li>
                        <li class="top_filter"><a class="widget-link top-topics-link" href="javascript:void(0)"
                               title="the most active topics in the last year, month, week or day"><span
                                        class="d-label">Top</span></a></li>
                        <li><a class="widget-link badge-link" href="/badges" title="Badges"><span
                                        class="d-label">Badges</span></a></li>
                        <li><a class="widget-link user-directory-link" href="/u" title="Users"><span class="d-label">Users</span></a>
                        </li>
                        <li><a class="widget-link groups-link" href="/groups" title="Groups"><span class="d-label">Groups</span></a>
                        </li>
                    </ul>
                    <hr>
                </div>

                <div class="heading">
                    <a href="" class="d-link categories-link">Categories</a>
                </div>
                <ul class="category-links ">
                    @foreach($categorycomp as $value)
                        <li  class="cat-filter category-link "  cat_id="{{$value->id}}">
                            <a class="badge-wrapper box" href="javascript:void(0)"><span class="badge-category-bg"
                                                                       style="background-color: #AB9364;"></span><span
                                        style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                            class="category-name">{{$value->name}}</span></span></a><b
                                    class="topics-count">{{\App\Model\ForumTopic::where('category_id',$value->id)->first()?count(\App\Model\ForumTopic::where('category_id',$value->id)->get()):''}}</b>


                        </li>
                        @include('Frontend.forum.Category.responsive_cat',['category'=>$value])


                    @endforeach
                </ul>

            </div>
        </div>
        @if(\Illuminate\Support\Facades\Auth::check())
            <div class="user-setting-panel">
                <div class="menu-panel">
                    <div class="menu-link-header">
                        <ul class="menu-links">
                            <li>
                                <a href="{{route('voyager.dashboard')}}" class="widget-link user-activity-link"
                                   title="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                                    <i class="fas fa-user"></i>&nbsp;{{\Illuminate\Support\Facades\Auth::user()->name}}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div class="logout-link">
                        <form method="post" action="{{route('logout')}}">
                            @csrf
                            <ul class="menu-links">
                                <li>
                                    <button type="submit" href="{{route('logout')}}"><a title="logout">
                                            <i class="fas fa-sign-out-alt"></i>&nbsp;logout
                                        </a></button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        @endif

    </header>

    <div class="list-controls">
        <div class="container">
            <section class="navigation-container">
                <button class="category-btn" id="categoryBtn">
                    <span>All categories</span> <i class="icofont-thin-down"></i>
                </button>
                <div class="select-kit-body">
                    <ul class="category-collection" data-simplebar="init">
                        @foreach($categorycomp as $value)
                            <li class="cat-filter select-kit-row category-row is-highlighted " cat_id="{{$value->id}}">
                                <div class="category-status">
                            <span class="badge-wrapper box">
                                <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                <span style="color: #FFFFFF;" class="badge-category ">
                                    <span class="category-name" cat_id="{{$value->id}}">{{$value->name}}</span>
                                </span>
                                    </span>
                                    <span class="topic-count">× {{\App\Model\ForumTopic::where('category_id',$value->id)->first()?count(\App\Model\ForumTopic::where('category_id',$value->id)->get()):''}}</span>
                                </div>

                                <div class="category-desc">
                                    {!! $value->description !!}
                                </div>
                            </li>
                            @include('Frontend.forum.Category.multi_cat',['category'=>$value])

                        @endforeach

                    </ul>
                </div>

                <ul id="navigation-bar" class="nav nav-pills">
                    <li title="topics with recent posts" id="" class="latest_filter"><a
                                href="javascript:void(0)">Latest</a></li>
                    <li  title="the most active topics in the last year, month, week or day" class="top_filter"><a href="javascript:void(0)">Top</a>
                    </li>

                </ul>

                <button id="create-topic" class="btn btn-default btn btn-icon-text ">
                    <i class="fa fa-plus d-icon d-icon-plus"></i>
                    <span class="d-button-label">New Topic</span>
                </button>
                <div class="clearfix"></div>
            </section>
        </div>
    </div>
    <div id="filtered" class="container list-container">
        <div class="">
            <div class="w-100">
                <div id="list-area">
                    <table class="topic-list">
                        <thead>
                        <tr>
                            <th class="default">Topic</th>
                            <th class="category ">Category</th>
                            <th class="posters">Users</th>
                            <th class="posts  num">Replies</th>
                            <th class="views  num">Views</th>
                            <th class="activity  num">Activity</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($forum as $value)
                            <tr class="topic-list-item">
                                <td class="main-link " colspan="1">
                                <span class="link-top-line">
                                    <a href="{{route('forum-inner',$value->slug)}}"
                                       class="raw-link raw-topic-link">{{$value->topic}}</a>
                                    <span class="topic-post-badges"></span>
                                </span>
                                </td>

                                <td class="category">
                                    <a class="badge-wrapper box" href="">
                                        <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                        <span style="color: #FFFFFF;" class="badge-category"
                                              title="All questions related to our {{$value->categories->parent_id ? \App\Model\ForumCategory::where('id',1)->first()->name:''}} {{$value->categories->name}}">
                                        <span class="category-name">{{$value->categories->parent_id ? \App\Model\ForumCategory::where('id',1)->first()->name:''}}</span>&ensp;
                                        <span class="category-name">{{$value->categories->name}}</span>
                                    </span>
                                    </a>
                                </td>

                                <td class="posters">
                                    @if(isset($value->users))
                                        @foreach($value->users as $user)
                                            <a href="" class="">
                                                <img alt="" style="height: 25px;width: 25px"
                                                     src="{{asset('storage/'.$user->avatar)}}"
                                                     class="avatar" title="{{$user->name}}">
                                            </a>
                                            @if(\App\Model\TopicComments::where('topic_id',$value->id)->first())
                                                @foreach(\App\Model\TopicComments::where('topic_id',$value->id)->select('user_id')->distinct()->take(5)->get() as $key=>$comment)
                                                    <a href="" class="">
                                                        <img alt="" style="height: 25px;width: 25px"
                                                             src="{{asset('storage/'.\App\User::where('id',$comment->user_id)->first()->avatar)}}"
                                                             class="avatar"
                                                             title="{{\App\User::where('id',$comment->user_id)->first()->name}}">
                                                    </a>
                                                @endforeach
                                            @endif

                                        @endforeach
                                    @endif
                                    {{--@if (isset($value->comments))--}}
                                    {{--@foreach(  $value->comments as $user)--}}
                                    {{--{{$user->email}}--}}
                                    {{--@endforeach--}}
                                    {{--@endif--}}
                                </td>

                                <td class="num posts"
                                    title="This topic has {{\App\Model\TopicComments::where('topic_id', $value->id)->get()->isnotEmpty()? count(\App\Model\TopicComments::where('topic_id', $value->id)->get()):'0'}} reply">
                                    <a href="" class="badge-posts ">
                                        <span class="number">{{\App\Model\TopicComments::where('topic_id', $value->id)->get()->isnotEmpty()? count(\App\Model\TopicComments::where('topic_id', $value->id)->get()):'0'}}</span>
                                    </a>
                                </td>

                                <td class="num views ">
                                    <span class="number"
                                          title="this topic has been viewed 4 times">{{$value->counts->first()?$value->counts->first()->count:''}}</span>
                                </td>

                                <td class="num age "
                                    title="Posted: {{$value->created_at}}">
                                    <a class="post-activity" href="">
                                        <span class="relative-date">{{\App\Model\TopicComments::where('topic_id',$value->id)->first()?\Illuminate\Support\Carbon::parse(\App\Model\TopicComments::where('topic_id',$value->id)->latest()->first()->created_at)->diffForHumans():''}}</span>
                                    </a>
                                </td>
                            </tr>

                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="reply-control" class="">
        <div class="reply-area">
            <div class="composer-fields">
                <div class="reply-to">
                    <button title="minimize the composer panel" class="toggler">
                        <i class="fa fa-chevron-down d-icon d-icon-chevron-down"></i>
                    </button>
                    <div class="clearfix"></div>
                </div>
                <div class="title-category">
                    <div class="title-input">
                        <input type="text" id="title_link" placeholder="Type title, or paste a link here">
                    </div>
                    <div class="category-input list-controls">
                        <button class="category-btn" id="reply-categoryBtn" data-id="">
                            <span>All categories</span>&nbsp;<i class="icofont-thin-down"></i>
                        </button>
                        <div class="select-kit-body">
                            <ul class="category-collection" data-simplebar="init">
                                @foreach($categorycomp as $value)
                                    <li class="select-kit-row category-row is-highlighted ">
                                        <div class="category-status">
                            <span class="badge-wrapper box">
                                <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                <span style="color: #FFFFFF;" class="badge-category ">
                                    <span id="select_category" cat_id="{{$value->id}}"
                                          class="category-name">{{$value->name}}</span>
                                </span>
                            </span>
                                            <span class="topic-count">× 4</span>
                                        </div>

                                        <div class="category-desc">
                                            {!! $value->description !!}
                                        </div>
                                    </li>
                                    @include('Frontend.forum.Category.reply_cat',['category'=>$value])

                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="toolbar-visible">
                <textarea name="detail" id="dec"></textarea>
            </div>
            <div class="submit-panel">
                <div class="save-or-cancel">
                    <button title="Or press Ctrl+Enter" id="new_topic" class="btn ">
                        <i class="fa fa-plus d-icon d-icon-plus"></i>
                        <span class="">Create Topic</span>
                    </button>
                    <a href="" class="cancel">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade app-modal" id="forumregister" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="login-form">
                <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="loginForm" class="toggleform">
                        <div class="title">Login</div>
                        <div class="description">You can use your account to log in to any of our products</div>
                        <form action="{{route('voyager.login')}}" method="post" class="is-big">
                            @csrf
                            <input name="email" placeholder="Email" class="" autocomplete="off">
                            <input type="password" name="password" placeholder="Password" class="" autocomplete="off">


                            <button type="submit" class="submit-button">Login</button>
                        </form>
                        <a href="" class="reset-password">Forgot password?</a>
                        <div class="switch-mode">Don’t have an account yet? <strong>Register</strong></div>
                    </div>
                    <div id="registerForm" class="toggleform">
                        <div class="title">Register</div>

                        <form action="{{route('register')}}" method="post" class="is-big">
                            @csrf
                            <input name="name" placeholder="Username" class="" autocomplete="off">

                            <input name="email" placeholder="Email" class="" autocomplete="off">
                            <input type="password" name="password" placeholder="Password" class="" autocomplete="off">

                            <div class="terms">
                                <input id="login-form-checkbox-terms" type="checkbox">
                                <label for="login-form-checkbox-terms" class="">Agree to our
                                    <a href="">Terms and Conditions</a>
                                </label>
                            </div>
                            <button type="submit" class="submit-button">Register</button>
                        </form>
                        <a href="" class="reset-password">Forgot password?</a>
                        <div class="switch-mode">Already have an account? <strong>Login</strong></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade app-modal" id="forumregister" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="login-form">
                <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="loginForm" class="toggleform">
                        <div class="title">Login</div>
                        <div class="description">You can use your account to log in to any of our products</div>
                        <form action="{{route('voyager.login')}}" method="post" class="is-big">
                            @csrf
                            <input name="email" placeholder="Email" class="" autocomplete="off">
                            <input type="password" name="password" placeholder="Password" class="" autocomplete="off">


                            <button type="submit" class="submit-button">Login</button>
                        </form>
                        <a href="" class="reset-password">Forgot password?</a>
                        <div class="switch-mode">Don’t have an account yet? <strong>Register</strong></div>
                    </div>
                    <div id="registerForm" class="toggleform">
                        <div class="title">Register</div>

                        <form action="{{route('register')}}" method="post" class="is-big">
                            @csrf
                            <input name="name" placeholder="Username" class="" autocomplete="off">

                            <input name="email" placeholder="Email" class="" autocomplete="off">
                            <input type="password" name="password" placeholder="Password" class="" autocomplete="off">

                            <div class="terms">
                                <input id="login-form-checkbox-terms" type="checkbox">
                                <label for="login-form-checkbox-terms" class="">Agree to our
                                    <a href="">Terms and Conditions</a>
                                </label>
                            </div>
                            <button type="submit" class="submit-button">Register</button>
                        </form>
                        <a href="" class="reset-password">Forgot password?</a>
                        <div class="switch-mode">Already have an account? <strong>Login</strong></div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/4.1.0/simplebar.min.js"></script>

<script src="{{asset('js/Frontend/app.min.js')}}"></script>
<script src="{{asset('js/toastr.min.js')}}"></script>


<script>
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}");
    @endif
    @if(Session::has('error'))
    toastr.error("{{Session::get('error')}}");
    @endif
    @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}");
    @endif
    @if ($errors->any())
    @foreach($errors->all() as $error)
    toastr.warning("{{ $error }}");
    @endforeach
    @endif
</script>
<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('dec');

</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function () {


        $('#reply-control .category-input .category-collection li').on('click', function () {
            var categoryname = $(this).find('.category-name').text();
            let categoryid = $(this).find('.category-name').attr('cat_id');
            $('#reply-categoryBtn span').text(categoryname);
            let attribute = $('#reply-categoryBtn').attr("data-id", categoryid);
            // console.log(attribute);
            $(this).parents('.select-kit-body').hide();
        });

        $('#new_topic').on('click', function () {
            let category = $('#reply-categoryBtn').attr('data-id');
            console.log(category);
            let title = $('#title_link').val();
            let detail = CKEDITOR.instances['dec'].getData();

            $.ajaxSetup({
                headers: {"X-CSRF-TOKEN": jQuery(`meta[name="csrf-token"]`).attr("content")}
            });
            $.ajax({
                type: "POST",
                url: "{{route('new-topic')}}",
                data: {
                    category: category,
                    title: title,
                    detail: detail
                },
                success: function (data) {
                    jQuery.each(data.errors, function (key, value) {

                        toastr.warning(value);
                    });
                    if (data.status == 'success') {
                        swal(data.status, data.message, data.status);
                    }
                    if (data.status == 'error') {
                        swal(data.status, data.message, data.status);
                    }
                }
            });

        });
    });
</script>
<script>
    $(document).ready(function () {


        $('.latest_filter').on('click', function () {
            $(this).toggleClass('active');
            $('.top_filter').removeClass('active');

            $.ajaxSetup({
                headers: {"X-CSRF-TOKEN": jQuery(`meta[name="csrf-token"]`).attr("content")}
            });
            $.ajax({
                type: "GET",
                url: "{{route('latest-filter')}}",

                success: function (result) {
                    $('#filtered').replaceWith($('#filtered').html(result));

                }

            });
        });
        $('.top_filter').on('click', function () {
            $(this).toggleClass('active');
            $('.latest_filter').removeClass('active');

            $.ajaxSetup({
                headers: {"X-CSRF-TOKEN": jQuery(`meta[name="csrf-token"]`).attr("content")}
            });
            $.ajax({
                type: "GET",
                url: "{{route('topic-filter')}}",

                success: function (result) {
                    $('#filtered').replaceWith($('#filtered').html(result));

                }

            });
        });
        $('.cat-filter').on('click', function () {

            let categoryName = $(this).find('.category-name').text();
            var button = $('#categoryBtn span').text(categoryName);
            $(this).parents('.select-kit-body').hide();
            console.log(categoryName);

            let category_id = $(this).attr('cat_id');

            $.ajaxSetup({
                headers: {"X-CSRF-TOKEN": jQuery(`meta[name="csrf-token"]`).attr("content")}
            });
            $.ajax({
                type: "GET",
                url: "{{route('category-filter')}}",
                data: {
                    category_id: category_id
                },
                success: function (result) {
                    $('#filtered').replaceWith($('#filtered').html(result));

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
                            url: "{{ route('forum-autosuggest') }}",
                            data: {query: $("#search").val(), category: $('#cat').val()},
                            dataType: "json",
                            type: "GET",
                            success: function (data) {
                                // console.log(data);
                                response($.map(data, function (obj) {
                                    return {
                                        // obj
                                        name: obj.topic,
                                        category: obj.name,
                                        slug: obj.slug,
                                        description: obj.description
                                    };
                                }));
                            }
                        });

                    },
                    displayKey: 'forum',

                    templates: {
                        header: '<div class="aa-suggestions-category"><span class="title text-center"><i class="fa fa-shopping-bag"></i>Topics</span></div>',
                        suggestion: function (suggestion) {
                            console.log(suggestion)
                            return '<div>' + '<a href="{{ url('/') }}/forum-inner/' + suggestion.slug + '">' + '' +

                                '<span class="product-details">' +
                                '<span class="product-title">' +
                                '<span><strong>' + suggestion.name + '</strong></span>' + '<button class="btn btn-danger btn btn-sm">' + suggestion.category + '</button>' +
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
<script>
    $(window).on('beforeunload', function () {
        @if(\Illuminate\Support\Facades\Session::has('category_id'))
        {{\Illuminate\Support\Facades\Session::forget('category_id')}}
        @endif
    });
</script>
</body>
</html>