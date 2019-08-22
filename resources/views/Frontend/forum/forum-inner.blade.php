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
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet">

</head>
<body>
<?php use Carbon\Carbon; ?>

<div class="forum_layout">
    <header class="header">
        <a href="forum-index.html" class="logo">
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
                    <input id="search-term" type="text" value="" placeholder="">
                </div>

            </div>
        </div>

        <div class="hamburger-panel">
            <div class="menu-panel">
                <div class="general-links">
                    <ul class="menu-links ">
                        <li><a class="widget-link latest-topics-link" href="/latest"
                               title="topics with recent posts"><span class="d-label">Latest</span></a></li>
                        <li><a class="widget-link top-topics-link" href="/top"
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
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #AB9364;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Uncategorized</span></span></a><b
                                class="topics-count">4</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #808281;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"
                                    title="Discussion about this site, its organization, how it works, and how we can improve it."><span
                                        class="category-name">Site Feedback</span></span></a><b
                                class="topics-count">2</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #0E76BD;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Icons</span></span></a><b class="topics-count">43</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #25AAE2;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Windows app</span></span></a><b class="topics-count">3</b>
                    </li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #AB9364;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"
                                    title="This category for the Lunacy questions, bug reports, and announcements."><span
                                        class="category-name">Lunacy</span></span></a><b class="topics-count">139</b>
                    </li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span
                                    class="badge-category-parent-bg" style="background-color: #25AAE2;"></span><span
                                    class="badge-category-bg" style="background-color: #AB9364;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Icons</span></span></a><b class="topics-count">3</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #ED207B;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">API</span></span></a><b class="topics-count">2</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span
                                    class="badge-category-parent-bg" style="background-color: #ED207B;"></span><span
                                    class="badge-category-bg" style="background-color: #F1592A;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Search</span></span></a><b class="topics-count">1</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span
                                    class="badge-category-parent-bg" style="background-color: #ED207B;"></span><span
                                    class="badge-category-bg" style="background-color: #0E76BD;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Icons</span></span></a><b class="topics-count">3</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #12A89D;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Ouch</span></span></a><b class="topics-count">4</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #AB9364;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"
                                    title="All questions related to our Fugue Music."><span
                                        class="category-name">Music</span></span></a><b class="topics-count">7</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span
                                    class="badge-category-parent-bg" style="background-color: #AB9364;"></span><span
                                    class="badge-category-bg" style="background-color: #B3B5B4;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"
                                    title="The place for people who are interested in Lunacy improvement"><span
                                        class="category-name">Lunacy - alpha version</span></span></a><b
                                class="topics-count">8</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #AB9364;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Photo</span></span></a><b class="topics-count">3</b></li>
                    <li class="category-link"><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                         style="background-color: #AB9364;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Mac app</span></span></a><b class="topics-count">4</b>
                    </li>
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
    <div class="forum-inner" data-id="{{$forum->id}}">
        <div class="wrap">
            <div id="topic-title">
                <div class="container">
                    <div class="title-wrapper">
                        <h1>
                            <a href="" class="fancy-title">
                                {{$forum->topic}}
                            </a>
                        </h1>

                        <div id="ember1122" class="topic-category ">
                            @if(\App\Model\ForumCategory::where('id',$forum->categories->parent_id)->first())
                                <a class="badge-wrapper box" href="">
                                    <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                    <span style="color: #FFFFFF;" class="badge-category clear-badge">
                               {{--<span class="category-name">{{$forum->categories->parent_id ? \App\Model\ForumCategory::where('id',1)->first()->name:''}}</span>&ensp;--}}

                                        <span class="category-name">{{\App\Model\ForumCategory::where('id',$forum->categories->parent_id)->first()->name}}</span>
                           </span>
                                </a>                            @endif
                            <a class="badge-wrapper box" href="">
                                <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                <span style="color: #FFFFFF;" class="badge-category clear-badge">
                               {{--<span class="category-name">{{$forum->categories->parent_id ? \App\Model\ForumCategory::where('id',1)->first()->name:''}}</span>&ensp;--}}

                                    <span class="category-name">{{$forum->categories->name}}</span>
                           </span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container posts">
                <div class="rows">
                    <section id="topic" class="topic-area">
                        <div class="posts-wrapper">
                            <div>
                                <div class="post-stream">
                                    <div class="topic-post clearfix topic-owner regular">
                                        <article id="post_1" data-post-id="1471" class="boxed onscreen-post">
                                            <a href="" class="tabLoc"></a>
                                            <div class="row">
                                                <div class="topic-avatar">
                                                    <a class="trigger-user-card main-avatar"
                                                       href="../forum-summary.html">
                                                        <img alt="" style="height: 45px;width: 45px"
                                                             src="{{asset('storage/'.$forum->users->first()->avatar)}}"
                                                             title="{{$forum->users->first()->name}}"
                                                             class="avatar"></a>
                                                    <div class="poster-avatar-extra"></div>
                                                </div>
                                                <div class="topic-body clearfix">
                                                    <div class="topic-meta-data">
                                                        <div class="names trigger-user-card"><span
                                                                    class="first username"><a
                                                                        href="">{{$forum->users->first()->name}}</a></span>
                                                        </div>
                                                        <div class="post-infos">
                                                            <div class="post-info post-date">
                                                                <a class="post-date" href="">
                                                                    <span title="{{$forum->created_at}}"
                                                                          class="relative-date">{{\Illuminate\Support\Carbon::parse($forum->created_at)->format('M d Y')}}</span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="regular contents">
                                                        <div class="cooked">
                                                            {!! $forum->description !!}
                                                        </div>
                                                        <section class="post-menu-area clearfix">

                                                            <nav class="post-controls">
                                                                <button class="widget-button btn-flat show-replies btn-icon-text"
                                                                        aria-label="1 Reply"
                                                                        title="{{$reply}} Reply"><span
                                                                            class="d-button-label">{{$reply}}
                                                                        Reply</span><i
                                                                            class="icofont-simple-down"></i>
                                                                </button>
                                                                <div class="actions">
                                                                    {{--<textarea id="desc"></textarea>--}}
                                                                    <button class="incrementLike">
                                                                        <span>{{count(\App\Model\TopicLike::where('topic_id',$forum->id)->get())}}</span>
                                                                    </button>
                                                                    <div class="like_topic like-button">
                                                                        <button id="like-topic"
                                                                                class="widget-button btn-flat toggle-{{\Illuminate\Support\Facades\Auth::check()?\App\Model\TopicLike::where('topic_id',$forum->id)->where('user_id',\Illuminate\Support\Facades\Auth::user()->id)->first()?'like':'':'unlike'}} like btn-icon"
                                                                                data-id="{{$forum->id}}">
                                                                            <i class="icofont-heart"></i></button>
                                                                    </div>
                                                                    {{--<button class="btn btn-primary" id="comment"--}}
                                                                    {{--type="button">--}}
                                                                    {{--Comment--}}
                                                                    {{--</button>--}}
                                                                    <button class="widget-button btn-flat share  btn-icon"
                                                                            aria-label="share a link to this post"
                                                                            title="share a link to this post"><i
                                                                                class="icofont-link"></i></button>
                                                                    <button class="widget-button btn-flat reply create"
                                                                            title="begin composing a reply to this post"
                                                                            id="create-topic">
                                                                        <i class="fas fa-reply"></i>
                                                                        <span class="d-button-label">Reply</span>
                                                                    </button>
                                                                </div>
                                                            </nav>

                                                        </section>
                                                    </div>
                                                    <section class="post-actions"></section>
                                                    <div class="post-links-container"></div>
                                                    <div class="topic-map">
                                                        <section class="map map-collapsed">

                                                            <ul class="clearfix">
                                                                <li>
                                                                    <h4>created</h4>
                                                                    <div class="topic-map-post created-at">
                                                                        <a class="trigger-user-card ">
                                                                            <img width=20 height=20 alt=""
                                                                                 src="{{asset('storage/'.$forum->users->first()->avatar)}}"
                                                                                 title="{{$forum->users->first()->name}}"
                                                                                 class="avatar small"></a>
                                                                        <span title="{{$forum->created_at}}"
                                                                              class="relative-date">{{\Illuminate\Support\Carbon::parse($forum->created_at)->format('M d Y')}}</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <h4>last reply</h4>
                                                                        <div class="topic-map-post last-reply">
                                                                            <a class="trigger-user-card ">
                                                                                <img alt="" width="20" height="20"
                                                                                     src="{{asset('storage/'.$forum->users->first()->avatar)}}"
                                                                                     title="{{$forum->users->first()->name}}"
                                                                                     class="avatar small">
                                                                            </a>
                                                                            <span title="{{isset($lastreply)?$lastreply:'no replies'}}"
                                                                                  class="relative-date">{{isset($lastreply)?\Illuminate\Support\Carbon::parse($lastreply)->diffForHumans():'0 Replies'}}</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li><span class="number">{{$reply}}</span>
                                                                    <h4>replies</h4></li>
                                                                <li class="secondary"><span class="number">66</span>
                                                                    <h4>views</h4></li>
                                                                <li class="secondary"><span
                                                                            class="number">{{isset($total_user)?$total_user:'0'}}</span>
                                                                    <h4>users</h4></li>
                                                                <li class="avatars">
                                                                    @if(isset($user_commented))
                                                                        @foreach($user_commented as $value)
                                                                            <div>
                                                                                <a class="poster trigger-user-card"
                                                                                   title="{{$value->name}}"><img alt=""
                                                                                                                 width="32"
                                                                                                                 height="32"
                                                                                                                 src="{{asset('storage/'.$value->avatar)}}"
                                                                                                                 title="{{$value->name}}"
                                                                                                                 class="avatar med"><span
                                                                                            class="post-count">{{isset($value->comments)?count($value->comments):0}}</span></a>
                                                                            </div>

                                                                        @endforeach
                                                                    @endif

                                                                </li>
                                                            </ul>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @foreach($comment as $value)
                            <div class="posts-wrapper">
                                <div>
                                    <div class="post-stream">
                                        <div class="topic-post clearfix topic-owner regular">
                                            <article id="post_1" data-post-id="1471" class="boxed onscreen-post">
                                                <a href="" class="tabLoc"></a>
                                                <div class="row">
                                                    <div class="topic-avatar">
                                                        <a class="trigger-user-card main-avatar"
                                                           href="../forum-summary.html">
                                                            <img alt="" style="height: 45px;width: 45px"
                                                                 src="{{asset('storage/'.$value->users->avatar)}}"
                                                                 title="Teengroun.Sun" class="avatar"></a>
                                                        <div class="poster-avatar-extra"></div>
                                                    </div>
                                                    <div class="topic-body clearfix">
                                                        <div class="topic-meta-data">
                                                            <div class="names trigger-user-card"><span
                                                                        class="first username"><a
                                                                            href="">{{$value->users->name}}</a></span>
                                                            </div>
                                                            <div class="post-infos">
                                                                <div class="post-info post-date">
                                                                    <a class="post-date" href="">
                                                                    <span title="Jun 18, 2019 8:07 am"
                                                                          class="relative-date">{{\Illuminate\Support\Carbon::parse($value->created_at)->format('M d Y')}}</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="regular contents">
                                                            <div class="cooked">
                                                                {!! $value->comment  !!}
                                                            </div>
                                                            <section class="post-menu-area clearfix">
                                                                <nav class="post-controls">
                                                                    <button class="widget-button btn-flat show-replies btn-icon-text"
                                                                            aria-label="1 Reply" title="1 Reply"><span
                                                                                class="d-button-label">1 Reply</span><i
                                                                                class="icofont-simple-down"></i>
                                                                    </button>
                                                                    <div class="actions">
                                                                        <div class="like-button">
                                                                            <button class="widget-button btn-flat toggle-like like btn-icon">
                                                                                <i class="icofont-heart"></i></button>
                                                                        </div>
                                                                        <button class="widget-button btn-flat share  btn-icon"
                                                                                aria-label="share a link to this post"
                                                                                title="share a link to this post"><i
                                                                                    class="icofont-link"></i></button>
                                                                    </div>
                                                                </nav>
                                                            </section>
                                                        </div>
                                                        <section class="post-actions"></section>
                                                        <div class="post-links-container"></div>

                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </section>
                </div>
            </div>
        </div>

    </div>
    <div class="container list-container">
        <div class="mt-2">
            <h6 style="font-weight: bold;margin: 1em 0 0.1em 0;">Suggested topic</h6>
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
                        <tr class="topic-list-item">
                            <td class="main-link " colspan="1">
                                <span class="link-top-line">
                                    <a href="" class="raw-link raw-topic-link">Doubts on the use of your music for a full-length documentary.</a>
                                    <span class="topic-post-badges"></span>
                                </span>
                            </td>

                            <td class="category">
                                <a class="badge-wrapper box" href="">
                                    <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                    <span style="color: #FFFFFF;" class="badge-category"
                                          title="All questions related to our Fugue Music.">
                                        <span class="category-name">Music</span>
                                    </span>
                                </a>
                            </td>

                            <td class="posters">
                                <a href="" class="">
                                    <img alt="" width="25" height="25"
                                         src="https://community.icons8.com/letter_avatar_proxy/v2/letter/m/cab0a1/25.png"
                                         class="avatar" title="mediaattack22 - Original Poster">
                                </a>
                                <a href="" class="latest">
                                    <img alt="" width="25" height="25"
                                         src="https://community.icons8.com/user_avatar/community.icons8.com/elenalo161/25/168_1.png"
                                         class="avatar latest" title="elenalo161 - Most Recent Poster">
                                </a>
                            </td>

                            <td class="num posts" title="This topic has 1 reply">
                                <a href="" class="badge-posts ">
                                    <span class="number">1</span>
                                </a>
                            </td>

                            <td class="num views ">
                                <span class="number" title="this topic has been viewed 4 times">4</span></td>

                            <td class="num age "
                                title="First post: Jul 17, 2019 9:24 am Posted: Jul 17, 2019 10:13 am">
                                <a class="post-activity" href="">
                                    <span class="relative-date">6h</span>
                                </a>
                            </td>
                        </tr>
                        <tr class="topic-list-item">
                            <td class="main-link " colspan="1">
                                <span class="link-top-line">
                                    <a href="" class="raw-link raw-topic-link">Doubts on the use of your music for a full-length documentary.</a>
                                    <span class="topic-post-badges"></span>
                                </span>
                            </td>

                            <td class="category">
                                <a class="badge-wrapper box" href="">
                                    <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                    <span style="color: #FFFFFF;" class="badge-category"
                                          title="All questions related to our Fugue Music.">
                                        <span class="category-name">Music</span>
                                    </span>
                                </a>
                            </td>

                            <td class="posters">
                                <a href="" class="">
                                    <img alt="" width="25" height="25"
                                         src="https://community.icons8.com/letter_avatar_proxy/v2/letter/m/cab0a1/25.png"
                                         class="avatar" title="mediaattack22 - Original Poster">
                                </a>
                                <a href="" class="latest">
                                    <img alt="" width="25" height="25"
                                         src="https://community.icons8.com/user_avatar/community.icons8.com/elenalo161/25/168_1.png"
                                         class="avatar latest" title="elenalo161 - Most Recent Poster">
                                </a>
                            </td>

                            <td class="num posts" title="This topic has 1 reply">
                                <a href="" class="badge-posts ">
                                    <span class="number">1</span>
                                </a>
                            </td>

                            <td class="num views ">
                                <span class="number" title="this topic has been viewed 4 times">4</span></td>

                            <td class="num age "
                                title="First post: Jul 17, 2019 9:24 am Posted: Jul 17, 2019 10:13 am">
                                <a class="post-activity" href="">
                                    <span class="relative-date">6h</span>
                                </a>
                            </td>
                        </tr>
                        <tr class="topic-list-item">
                            <td class="main-link " colspan="1">
                                <span class="link-top-line">
                                    <a href="" class="raw-link raw-topic-link">Doubts on the use of your music for a full-length documentary.</a>
                                    <span class="topic-post-badges"></span>
                                </span>
                            </td>

                            <td class="category">
                                <a class="badge-wrapper box" href="">
                                    <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                    <span style="color: #FFFFFF;" class="badge-category"
                                          title="All questions related to our Fugue Music.">
                                        <span class="category-name">Music</span>
                                    </span>
                                </a>
                            </td>

                            <td class="posters">
                                <a href="" class="">
                                    <img alt="" width="25" height="25"
                                         src="https://community.icons8.com/letter_avatar_proxy/v2/letter/m/cab0a1/25.png"
                                         class="avatar" title="mediaattack22 - Original Poster">
                                </a>
                                <a href="" class="latest">
                                    <img alt="" width="25" height="25"
                                         src="https://community.icons8.com/user_avatar/community.icons8.com/elenalo161/25/168_1.png"
                                         class="avatar latest" title="elenalo161 - Most Recent Poster">
                                </a>
                            </td>

                            <td class="num posts" title="This topic has 1 reply">
                                <a href="" class="badge-posts ">
                                    <span class="number">1</span>
                                </a>
                            </td>

                            <td class="num views ">
                                <span class="number" title="this topic has been viewed 4 times">4</span></td>

                            <td class="num age "
                                title="First post: Jul 17, 2019 9:24 am Posted: Jul 17, 2019 10:13 am">
                                <a class="post-activity" href="">
                                    <span class="relative-date">6h</span>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
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

        </div>
        <div class="toolbar-visible"><textarea id="desc"></textarea></div>
        <div class="reply_comment submit-panel">
            <div class="save-or-cancel">
                <button class="btn" id="comment">
                    <i class="fas fa-reply"></i>
                    <span class="">Reply</span>
                </button>
                <a href="" class="cancel">Cancel</a>
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
<!-- Modal -->


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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('desc');

</script>
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

<script>
    $(document).ready(function () {

        $('.reply_comment').find('#comment').on('click', function () {
            let topic_id = $('.forum-inner').attr('data-id');
            let comment = CKEDITOR.instances['desc'].getData();

            $.ajaxSetup({
                headers: {"X-CSRF-TOKEN": jQuery(`meta[name="csrf-token"]`).attr("content")}
            });
            $.ajax({
                type: "POST",
                url: "{{route('topic-comment')}}",
                data: {
                    topic_id: topic_id,
                    comment: comment
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

        $('#like-topic').click(function () {
            let topic_id = $('#like-topic').attr('data-id');
            $.ajax({
                headers: {"X-CSRF-TOKEN": jQuery(`meta[name="csrf-token"]`).attr("content")},
                type: "POST",
                url: "{{route('like-topic')}}",
                data: {
                    topic_id: topic_id,
                },
                success: function (data) {
                    if (data.status == 'error') {
                        toastr.warning(data.message);
                    }
                    if (data.status == 'success') {
                        // swal(data.status, data.message, data.status);
                        $('.incrementLike span').html(data.topic_id);

                        $("#like-topic").switchClass("toggle-unlike", "toggle-like like");


                    }
                    if (data.status == 'Unliked') {
                        $('.incrementLike span').html(data.topic_id);
                        $("#like-topic").switchClass("widget-button btn-flat toggle-like like btn-icon", "widget-button btn-flat toggle-unlike like btn-icon");


                    }
                }
            });
        });
    });
</script>
</body>
</html>


