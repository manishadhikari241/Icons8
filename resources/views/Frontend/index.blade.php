<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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


<header class="header">
    <a href="" class="logo">
        <img src="http://www.iconhot.com/icon/png/wood-social-networking/512/blinklist-logo-webtreatsetc.png" alt="">
    </a>

    <div class="main-nav container">
        <nav>
            <ul class="nav-list">

                <li><a class="nav-link" href="{{route('icons-index')}}">Icons</a></li>
                <li class="nav-item has-dropdown">
                    <a class="nav-link" href="javascript:void(0)">Photos &nbsp;<i class="icofont-thin-down"></i></a>
                    <div class="nav-dropdown">
                        <ul>
                            <li><a href="photocreator/index.html">Photo Creator</a></li>
                            <li><a href="{{route('photo')}}">Photo library</a></li>
                        </ul>
                    </div>
                </li>
                <li><a class="nav-link" href="">Vectors</a></li>
                <li><a class="nav-link" href="{{route('music')}}">Music</a></li>
                <li><a class="nav-link" href="videos-page.html">Videos</a></li>

                <li class="is-pull-right"><a class="nav-link " href="{{route('forum')}}">Forum</a></li>
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
                        <form class="is-big">
                            <input name="email" placeholder="Email" class="" autocomplete="off">
                            <input type="password" name="password" placeholder="Password" class="" autocomplete="off">


                            <button type="submit" class="submit-button">Login</button>
                        </form>
                        <a href="" class="reset-password">Forgot password?</a>
                        <div class="switch-mode">Don’t have an account yet? <strong>Register</strong></div>
                    </div>
                    <div id="registerForm" class="toggleform">
                        <div class="title">Register</div>
                        <div class="description">You can use your Icons8 account to log in to any of our products</div>
                        <form class="is-big">
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


<section class="search-banner">
    <div class="container">
        <h1>
            FREE DESIGN RESOURCES <br>
            AND SOFTWARE
        </h1>
        <form data-wow="scale-up" data-wow-delay="1000" class="search has-animate" style="transition-delay: 1000ms;">
            <div class="search-wrap">
                <div class="search-group">
                    <div class="search-field">
                        <input type="text" placeholder="Search icons" id="search" autocomplete="off" value=""
                               class="search-control">
                    </div>
                    <div class="search-select">
                        <div class="app-popup app-select ">
                            <div class="app-popup-toggle">
                                <div class="app-select-content">Icons</div>
                                <div class="app-popup-arrow">
                                    <svg width="100%" height="100%">
                                        <use xlink:href="#caretDown"></use>
                                    </svg>
                                </div>
                                <i class="icofont-thin-down"></i>
                            </div>
                            <div class="app-popup-content ">
                                <div class="app-select-options" data-simplebar="init">
                                    <div class="list">
                                        <div class="list-item is-active">Icons</div>
                                        <div class="list-item">Photos</div>
                                        <div class="list-item">Music</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="search-button">Search</button>
            </div>
        </form>
    </div>
</section>


<section class="iconsbanner">
    <div class="container">
        <h2 data-wow="title-reveal" data-wow-delay="1200" class="wow icons-header ">Download Icon Packs</h2>
    </div>
    <div class="app-tabs">
        <div class="app-tabs-wrap is-arrows">
            <button class="is-prev">
                <i class="icofont-thin-left"></i>
            </button>
            <button class="is-next">
                <i class="icofont-thin-right"></i>
            </button>
            <div class="app-tabs-header" style="padding-bottom: 20px;">
                @foreach($icon_category as $value)
                    <a href=""><div class="app-tabs-item is-active">{{$value->title}} </div></a>
                @endforeach

            </div>

        </div>
        <div class="app-tabs-content">
            <div class="app-slider">
                <div class="images is-material">
                    <a href="" class="image" style="width: 32px;">
                        <img src="https://img.icons8.com/material/4ac144/256/facebook.png" alt="facebook">
                    </a>
                    <a href="" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/twitter.png" alt="twitter">
                    </a>
                    <a href="" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/user-male.png" alt="user-male">
                    </a>
                    <a href="" class="image" style="width: 32px;">
                        <img src="https://img.icons8.com/material/4ac144/256/camera.png" alt="camera">
                    </a>
                    <a href="https://icons8.com/icon/82843/folder-invoices" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/folder-invoices.png" alt="folder-invoices">
                    </a>
                    <a href="https://icons8.com/icon/83352/home" class="image" style="width: 32px;">
                        <img src="https://img.icons8.com/material/4ac144/256/home.png" alt="home">
                    </a>
                    <a href="https://icons8.com/icon/84908/phone" class="image" style="width: 32px;">
                        <img src="https://img.icons8.com/material/4ac144/256/phone.png" alt="phone">
                    </a>
                    <a href="https://icons8.com/icon/86508/right" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/right.png" alt="right">
                    </a>
                    <a href="https://icons8.com/icon/84916/print" class="image" style="width: 32px;">
                        <img src="https://img.icons8.com/material/4ac144/256/print.png" alt="print">
                    </a>
                    <a href="https://icons8.com/icon/82854/music" class="image is-active" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/music.png" alt="music">
                    </a>
                    <a href="https://icons8.com/icon/83456/settings" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/settings.png" alt="settings">
                    </a>
                    <a href="https://icons8.com/icon/82853/menu" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/menu.png" alt="menu">
                    </a>
                    <a href="https://icons8.com/icon/86805/map" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/map.png" alt="map">
                    </a>
                    <a href="https://icons8.com/icon/82889/info" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/info.png" alt="info">
                    </a>
                    <a href="https://icons8.com/icon/84895/money" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/money.png" alt="money">
                    </a>
                    <a href="https://icons8.com/icon/84926/shopping-cart" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/shopping-cart.png" alt="shopping-cart">
                    </a>
                    <a href="https://icons8.com/icon/82873/share" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/share.png" alt="share">
                    </a>
                    <a href="https://icons8.com/icon/84925/star" class="image" style="width: 32px;">
                        <img src="https://img.icons8.com/material/4ac144/256/star.png" alt="star">
                    </a>
                    <a href="https://icons8.com/icon/82833/email" class="image" style="width: 32px;">
                        <img src="https://img.icons8.com/material/4ac144/256/email.png" alt="email">
                    </a>
                    <a href="https://icons8.com/icon/84920/secured-letter" class="image" style="width: 32px;">
                        <img src="https://img.icons8.com/material/4ac144/256/secured-letter.png" alt="secured-letter">
                    </a>
                    <a href="https://icons8.com/icon/82872/save-as" class="image" style="width: 32px;">
                        <img src="https://img.icons8.com/material/4ac144/256/save-as.png" alt="save-as">
                    </a>
                    <a href="https://icons8.com/icon/5722/play" class="image" style="width: 32px;">
                        <img src="https://img.icons8.com/material/4ac144/256/play.png" alt="play">
                    </a>
                    <a href="https://icons8.com/icon/84851/calendar" class="image" style="width: 32px;">
                        <img src="https://img.icons8.com/material/4ac144/256/calendar.png" alt="calendar">
                    </a>
                    <a href="https://icons8.com/icon/82855/news" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/news.png" alt="news">
                    </a>
                    <a href="https://icons8.com/icon/82829/download" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/download.png" alt="download">
                    </a>
                    <a href="https://icons8.com/icon/84862/contacts" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/contacts.png" alt="contacts">
                    </a>
                    <a href="https://icons8.com/icon/82816/clock" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/clock.png" alt="clock">
                    </a>
                    <a href="https://icons8.com/icon/33028/download-from-cloud" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/download-from-cloud.png"
                             alt="download-from-cloud">
                    </a>
                    <a href="https://icons8.com/icon/82826/delete-sign" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/delete-sign.png" alt="delete-sign">
                    </a>
                    <a href="https://icons8.com/icon/82875/search" class="image" style="width: 32px; ">
                        <img src="https://img.icons8.com/material/4ac144/256/search.png" alt="search">
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="icons-grid row">
                <div data-wow="slide-left" data-wow-delay="100" class="icons-col  col-lg-3 col-md-3 col-sm-6"
                     style="transition-delay: 100ms;">
                    <div class="icons-col-title">Single Style</div>
                    <div class="icons-col-text">All icons are done by a single team, so your work will look
                        consistent.
                    </div>
                </div>
                <div data-wow="slide-left" data-wow-delay="300" class="icons-col  col-lg-3 col-md-3 col-sm-6"
                     style="transition-delay: 300ms;">
                    <div class="icons-col-title">Editable Vectors</div>
                    <div class="icons-col-text">Vector icons are not merged and have preserved shapes.</div>
                </div>
                <div data-wow="slide-left" data-wow-delay="500" class="icons-col  col-lg-3 col-md-3 col-sm-6"
                     style="transition-delay: 500ms;">
                    <div class="icons-col-title">Icon Fonts</div>
                    <div class="icons-col-text">Pick only the icons you need and build your own font.</div>
                </div>
                <div data-wow="slide-left" data-wow-delay="700" class="icons-col  col-lg-3 col-md-3 col-sm-6"
                     style="transition-delay: 700ms;">
                    <div class="icons-col-title">HTML Embedding</div>
                    <div class="icons-col-text">Get a code to paste an icon right into your HTML.</div>
                </div>
            </div>


        </div>
    </div>
</section>


<section class="banners">
    <div class="banners-wrap">
        <a href="" class="banners-item is-wide is-photo-creator"
           style="background: linear-gradient(rgb(231, 157, 167), rgb(213, 133, 144));"></a>
        <a href="" class="banners-item is-stratos"
           style="    background-image: linear-gradient(225deg,#00001c,#00004c);"></a>
        <a href="" class="banners-item is-cherry"
           style="    background-image: linear-gradient(45deg,#ff5c4c,#cd23a4 49.4%,#7e46fb);"></a>
        <a href="" class="banners-item is-wide is-photos"></a>
    </div>
</section>


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

</body>
</html>