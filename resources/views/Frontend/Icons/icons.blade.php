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


    <link rel="stylesheet" href="{{asset('css/Frontend/icofont/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/Frontend/responsive.css')}}">
</head>
<body>

<div class="icons-page">
    <div class="hero">
        <header class="header">
            <a href="" class="logo">
                <img src="http://www.iconhot.com/icon/png/wood-social-networking/512/blinklist-logo-webtreatsetc.png"
                     alt="">
            </a>

            <div class="main-nav container">
                <nav>
                    <ul class="nav-list">

                        <li><a class="nav-link" href="icons.blade.php">Icons</a></li>
                        <li class="nav-item has-dropdown">
                            <a class="nav-link" href="javascript:void(0)">Photos &nbsp;<i class="icofont-thin-down"></i></a>
                            <div class="nav-dropdown">
                                <ul>
                                    <li><a href="photocreator/index.html">Photo Creator</a></li>
                                    <li><a href="../photo-index.html">Photo library</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="nav-link" href="">Vectors</a></li>
                        <li><a class="nav-link" href="">Music</a></li>
                        <li><a class="nav-link" href="../videos-page.html">Videos</a></li>

                        <li class="is-pull-right"><a class="nav-link " href="../forum-index.html">Forum</a></li>
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
            <input type="text" placeholder="Search icon" value="">
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
                <a href="../pack-page.html" class="pack">
                    <div class="icons-grid">
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/delete-sign.png">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/search.png">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/plus.png"></div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/share.png"></div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/synchronize.png">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/usa-ribbon.png">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/file.png"></div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/picture.png">
                            </div>
                        </div>
                    </div>
                    <div class="icons-footer">
                        <div class="title">Popular</div>
                    </div>
                </a>

                <a href="../pack-page.html" class="pack">
                    <div class="icons-grid">
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/delete-sign.png">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/search.png">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/plus.png"></div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/share.png"></div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/synchronize.png">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/usa-ribbon.png">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/file.png"></div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/picture.png">
                            </div>
                        </div>
                    </div>
                    <div class="icons-footer">
                        <div class="title">Popular</div>
                    </div>
                </a>

                <a href="../pack-page.html" class="pack">
                    <div class="icons-grid">
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/delete-sign.png">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/search.png">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/plus.png"></div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/share.png"></div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/synchronize.png">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/usa-ribbon.png">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/file.png"></div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/picture.png">
                            </div>
                        </div>
                    </div>
                    <div class="icons-footer">
                        <div class="title">Popular</div>
                    </div>
                </a>

                <a href="../pack-page.html" class="pack">
                    <div class="icons-grid">
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/delete-sign.png">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/search.png">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/plus.png"></div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/share.png"></div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/synchronize.png">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/usa-ribbon.png">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/file.png"></div>
                        </div>
                        <div class="icon">
                            <div class="app-icon is-doodle"><img alt="" style="height:48px;width:48px;"
                                                                 src="https://img.icons8.com/doodle/2x/picture.png">
                            </div>
                        </div>
                    </div>
                    <div class="icons-footer">
                        <div class="title">Popular</div>
                    </div>
                </a>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/4.1.0/simplebar.min.js"></script>

<script src="{{asset('js/Frontend/app.min.js')}}"></script>

</body>
</html>