<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Icons website</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
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

    <link rel="stylesheet" type="text/css" href="{{asset('css/Frontend/jquery.mCustomScrollbar.css')}}" media="all"/><!-- playlist scroll -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/Frontend/playlist.css')}}"/>

    <link rel="stylesheet" href="{{url('css/Frontend/icofont/icofont.min.css')}}">
    <link rel="stylesheet" href="{{url('css/Frontend/style.css')}}">
    <link rel="stylesheet" href="{{url('css/Frontend/responsive.css')}}">
</head>
<body>

<div class="app-music">
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
            <li class="has-auth"><a href="" data-toggle="modal" data-target="#loginModal">Login</a></li>
        </ul>

    </header>
    <div class="modal fade app-modal" id="loginModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
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
                            <form class="is-big" action="{{route('voyager.login')}}" method="post">
                                @csrf
                                <input name="email" placeholder="Email" class="" autocomplete="off">
                                <input type="password" name="password" placeholder="Password" class=""
                                       autocomplete="off">


                                <button type="submit" class="submit-button">Login</button>
                            </form>
                            <a href="" class="reset-password">Forgot password?</a>
                            <div class="switch-mode">Don’t have an account yet? <strong>Register</strong></div>
                        </div>
                        <div id="registerForm" class="toggleform">
                            <div class="title">Register</div>
                            <div class="description">You can use your Icons8 account to log in to any of our products
                            </div>
                            <form class="is-big" method="post" action="{{route('register')}}">
                                @csrf
                                <input name="email" placeholder="Email" class="" autocomplete="off">
                                <input type="password" name="password" placeholder="Password" class=""
                                       autocomplete="off">

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
    <div class="jumbotrons">
        <div class="jumbotrons-container">
            <div class="jumbotrons-head">
                <div class="jumbotrons-preview">
                    <img src="{{asset('images/sliders/'.$slide->last()->music_slider)}}"
                         alt="Music for your videos. Free." class="jumbotrons-preview-image">
                </div>
                <h1 class="jumbotrons-title">Music for<br>your videos.<br>Free.</h1>
            </div>
            <div class="jumbotrons-body">
                <p class="jumbotrons-description">
                    Much, much more picky than other marketplaces. Much, much cheaper than
                    Hans Zimmer, In fact, it's <a href="">free for a link</a>.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="music-row">
            <aside class="music-col music-sidebar">
                <div class="app-tracks-nav">
                    <div class="tracks-nav-row tracks-nav-search">
                        <div class="tracks-nav-col">
                            <div class="icons-search">
                                <i class="icofont-search"></i>
                            </div>
                            <form>
                                <label>
                                    <button id="search_btn" type="submit" class="uk-search-icon-flip" uk-search-icon
                                            style="top:0;"></button>
                                    <input name="search" id="search" type="search" class="tracks-nav-search-input">
                                </label>
                            </form>

                        </div>
                    </div>
                    <div class="tracks-nav-row tracks-nav-category" data-simplebar="init">
                        <div class="tracks-nav-col filter-category">
                            <div class="filter-category-head">
                                <button type="button" class="filter-category-field">
                                    <span class="filter-category-field-arrow"></span>
                                    <span class="filter-category-field-label">Themes</span>
                                </button>
                            </div>
                            <div class="filter-category-body">
                                <div class="filter-category-scrollbar" data-simplebar="init">
                                    <div class="filter-category-list">
                                        <form action="">
                                            @foreach($theme as $key)
                                                <div class="filter-category-item">
                                                    <input type="radio" class="theme_filter" id="{{$key->name}}"
                                                           value="{{$key->id}}" name="radio-group">
                                                    <label for="{{$key->name}}">{{$key->name}}</label>
                                                </div>
                                            @endforeach
                                        </form>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tracks-nav-col filter-category">
                            <div class="filter-category-head">
                                <button type="button" class="filter-category-field">
                                    <span class="filter-category-field-arrow"></span>
                                    <span class="filter-category-field-label">Genre</span>
                                </button>
                            </div>
                            <div class="filter-category-body">
                                <div class="filter-category-scrollbar" data-simplebar="init">
                                    <div class="filter-category-list">
                                        <form action="">
                                            @foreach($genre as $key)
                                                <div class="filter-category-item">
                                                    <input type="radio" class="genre_filter" id="{{$key->name}}"
                                                           value="{{$key->id}}" name="radio-group">
                                                    <label for="{{$key->name}}">{{$key->name}}</label>
                                                </div>
                                            @endforeach
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tracks-nav-col filter-category">
                            <div class="filter-category-head">
                                <button type="button" class="filter-category-field">
                                    <span class="filter-category-field-arrow"></span>
                                    <span class="filter-category-field-label">Moods</span>
                                </button>
                            </div>
                            <div class="filter-category-body">
                                <div class="filter-category-scrollbar" data-simplebar="init">
                                    <div class="filter-category-list">
                                        <form action="">
                                            @foreach($mood as $key)
                                                <div class="filter-category-item">
                                                    <input type="radio" id="{{$key->name}}" value="{{$key->id}}"
                                                           class="mood_filter" name="radio-group">
                                                    <label for="{{$key->name}}">{{$key->name}}</label>
                                                </div>
                                            @endforeach
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <section class="music-col">
                <div>
                    <div class="app-tracks" id="filter_id">
                        @if(!isset($main_search) && !isset($empty_search))

                        @foreach($theme as $key)
                            <div class="app-tracks-list">
                                <div class="track-list-title">{{$key->name}}</div>
                                <div class="track-list-row track-list-items ">
                                    @foreach($key->musics as $value)
                                        <div class="tracks-list-col">
                                            <div class="app-tracks-item">

                                                <div class="tracks-item-row">
                                                    <div class="tracks-item-col tracks-item-cover">
                                                        <img src="{{asset('images/music/'.$value->image)}}"
                                                             alt="Delirix - Welcome To The Jungle"
                                                             class="tracks-item-cover-img">
                                                    </div>
                                                    <div class="tracks-item-col tracks-item-wrap">
                                                        <div class="tracks-item-info">
                                                            <div class="tracks-item-info-name">

                                                                <span class="btn-inner">{{$value->name}}</span>

                                                            </div>
                                                            <div class="tracks-item-info-author">
                                                                <a href=""
                                                                   class="tracks-item-info-link">{{$value->artists->name}}</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="tracks-item-col tracks-item-download">
                                                        <a href="{{route('music-download',$value->id)}}" class="tracks-item-download-btn">
                                                    <span class="icon-download">
                                                        <svg width="100%" height="100%"><use
                                                                    xlink:href="#arrowDownload"></use></svg>
                                                    </span>
                                                        </a>
                                                    </div>

                                                    <div class="tracks-item-col tracks-item-tags">
                                                        @if($value->tags != null)
                                                            @foreach($value->tags->slice(0,2) as $tag)
                                                                <a href=""
                                                                   class="tracks-item-tags-btn">{{$tag->name}}</a>
                                                            @endforeach
                                                        @endif
                                                        <div class="app-popup">
                                                            <div class="app-popup-toggle">
                                                                <button type="button" class="tracks-item-tags-btn">
                                                                    more
                                                                </button>
                                                            </div>
                                                            <div class="app-popup-content is-bottom-right">
                                                                <div class="app-popup-tag-content">
                                                                    @foreach($value->tags->splice(2) as $item)
                                                                        <a href=""
                                                                           class="tracks-item-tags-btn">{{$item->name}}</a>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                        @endif
                        @if(isset($main_search) && !isset($empty_search))
                                @foreach($main_search as $value)
                                    <div class="app-tracks-list">
                                        <div class="track-list-title">{{$value->name}}</div>
                                        <div class="track-list-row track-list-items ">
                                            <div class="tracks-list-col">
                                                <div class="app-tracks-item">

                                                    <div class="tracks-item-row">
                                                        <div class="tracks-item-col tracks-item-cover">
                                                            <img src="{{asset('images/music/'.$value->image)}}"
                                                                 alt="Delirix - Welcome To The Jungle"
                                                                 class="tracks-item-cover-img">
                                                        </div>
                                                        <div class="tracks-item-col tracks-item-wrap">
                                                            <div class="tracks-item-info">
                                                                <div class="tracks-item-info-name">

                                                                    <span class="btn-inner">{{$value->name}}</span>

                                                                </div>
                                                                <div class="tracks-item-info-author">
                                                                    <a href=""
                                                                       class="tracks-item-info-link">{{$value->artists->name}}</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="tracks-item-col tracks-item-download">
                                                            <button type="button" class="tracks-item-download-btn">
                                                    <span class="icon-download">
                                                        <svg width="100%" height="100%"><use
                                                                    xlink:href="#arrowDownload"></use></svg>
                                                    </span>
                                                            </button>
                                                        </div>
                                                        <div class="tracks-item-col tracks-item-tags">
                                                            @if($value->tags != null)
                                                                @foreach($value->tags->slice(0,2) as $tag)
                                                                    <a href=""
                                                                       class="tracks-item-tags-btn">{{$tag->name}}</a>
                                                                @endforeach
                                                            @endif
                                                            <div class="app-popup">
                                                                <div class="app-popup-toggle">
                                                                    <button type="button" class="tracks-item-tags-btn">
                                                                        more
                                                                    </button>
                                                                </div>
                                                                <div class="app-popup-content is-bottom-right">
                                                                    <div class="app-popup-tag-content">
                                                                        @foreach($value->tags->splice(2) as $item)
                                                                            <a href=""
                                                                               class="tracks-item-tags-btn">{{$item->name}}</a>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            @if(isset($empty_search))
                                <div class="app-tracks-list">
                                    <div class="track-list-title">SEARCH</div>
                                    <div class="track-list-row track-list-items ">
                                        <div class="tracks-list-col">
                                            <div class="app-tracks-item">

                                                <p>Oops... Seems that we don't have Action category yet.
                                                    If you think that category is important, please let us know
                                                </p>
                                                <a href="{{route('music')}}" class="btn btn-outline-danger">Back to all categories</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endif
                    </div>
                </div>

            </section>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/4.1.0/simplebar.min.js"></script>

<script src="{{asset('js/Frontend/app.min.js')}}"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/new.js"></script><!-- main plugin js -->

<script>
    $(document).ready(function () {
        $('form').bind('submit', function (e) {
            e.preventDefault();
            var search = $('#search').val();
            console.log(search);

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "{{route('search-result')}}",
                type: 'POST',
                data: {
                    search: search
                },
                success: function (result) {
                    $('#filter_id').replaceWith($('#filter_id')).html(result);
                }
            });
        });
        $("input[type='radio']").click(function () {
            var themeId = $("input.theme_filter[type='radio']:checked").val();
            var genreId = $("input.genre_filter[type='radio']:checked").val();
            var moodId = $("input.mood_filter[type='radio']:checked").val();
            console.log(moodId);

            $.ajax({
                url: document.URL,
                type: 'get',
                data: {
                    theme: themeId,
                    genre: genreId,
                    mood: moodId
                },
                success: function (result) {
                    $('#filter_id').replaceWith($('#filter_id')).html(result);
                }

            });

        });

    });
</script>

</body>
</html>