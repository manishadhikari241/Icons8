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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

    <link rel="stylesheet" href="{{url('css/Frontend/icofont/icofont.min.css')}}">
    <link rel="stylesheet" href="{{url('css/Frontend/style.css')}}">
    <link rel="stylesheet" href="{{url('css/Frontend/responsive.css')}}">
</head>
<body>


<div class="video_layout">
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

    <div class="interactive-sliders">
        <div class="photobanner-slider owl-carousel">
            <div class="item">
                <img src="https://siteimages.agora-gallery.com/galleryPhotos/2016/mezzanine2.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="photo-categories-page">
        <div class="categories">

            <div class="categories-wrap">
                <div class="categories-list" style="padding-bottom: 17px;">
                    <div class="categories-item"><a href="/category/animals"
                                                    class="categories-link is-active">Animals</a>
                    </div>
                    <div class="categories-item"><a href="/category/art" class="categories-link">Art</a></div>
                    <div class="categories-item"><a href="/category/artificial-intelligence" class="categories-link">Artificial
                            Intelligence</a></div>
                    <div class="categories-item"><a href="/category/backgrounds" class="categories-link">Backgrounds</a>
                    </div>
                    <div class="categories-item"><a href="/category/beauty" class="categories-link">Beauty</a></div>
                    <div class="categories-item"><a href="/category/bizarre" class="categories-link">Bizarre</a></div>
                    <div class="categories-item"><a href="/category/coffee-break" class="categories-link">Coffee
                            Break</a>
                    </div>
                    <div class="categories-item"><a href="/category/collages" class="categories-link">Collage</a></div>
                    <div class="categories-item"><a href="/category/couple" class="categories-link">Couple</a></div>
                    <div class="categories-item"><a href="/category/cryptocurrencies" class="categories-link">Cryptocurrencies</a>
                    </div>
                    <div class="categories-item"><a href="/category/education" class="categories-link">Education</a>
                    </div>
                    <div class="categories-item"><a href="/category/emotions" class="categories-link">Emotions</a></div>
                    <div class="categories-item"><a href="/category/fashion" class="categories-link">Fashion</a></div>
                    <div class="categories-item"><a href="/category/flat-lay" class="categories-link">Flat Lay</a></div>
                    <div class="categories-item"><a href="/category/flowers" class="categories-link">Flowers</a></div>
                    <div class="categories-item"><a href="/category/food" class="categories-link">Food</a></div>
                    <div class="categories-item"><a href="/category/healthcare" class="categories-link">Healthcare</a>
                    </div>
                    <div class="categories-item"><a href="/category/healthy-lifestyle" class="categories-link">Healthy
                            Lifestyle</a></div>
                    <div class="categories-item"><a href="/category/hobby" class="categories-link">Hobby</a></div>
                    <div class="categories-item"><a href="/category/holidays" class="categories-link">Holidays</a></div>
                    <div class="categories-item"><a href="/category/kids" class="categories-link">Kids</a></div>
                    <div class="categories-item"><a href="/category/leisure" class="categories-link">Leisure</a></div>
                    <div class="categories-item"><a href="/category/lifestyle" class="categories-link">Lifestyle</a>
                    </div>
                    <div class="categories-item"><a href="/category/men" class="categories-link">Men</a></div>
                    <div class="categories-item"><a href="/category/mockups" class="categories-link">Mockups</a></div>
                    <div class="categories-item"><a href="/category/model" class="categories-link">Model</a></div>
                    <div class="categories-item"><a href="/category/nature" class="categories-link">Nature</a></div>
                    <div class="categories-item"><a href="/category/objects" class="categories-link">Objects</a></div>
                    <div class="categories-item"><a href="/category/office" class="categories-link">Office</a></div>
                    <div class="categories-item"><a href="/category/patterns" class="categories-link">Patterns</a></div>
                    <div class="categories-item"><a href="/category/people" class="categories-link">People</a></div>
                    <div class="categories-item"><a href="/category/profession" class="categories-link">Profession</a>
                    </div>
                    <div class="categories-item"><a href="/category/profile-pictures" class="categories-link">Profile
                            Pictures</a></div>
                    <div class="categories-item"><a href="/category/sports" class="categories-link">Sports</a></div>
                    <div class="categories-item"><a href="/category/technology" class="categories-link">Technology</a>
                    </div>
                    <div class="categories-item"><a href="/category/travel" class="categories-link">Travel</a></div>
                    <div class="categories-item"><a href="/category/virtual-reality" class="categories-link">Virtual
                            Reality</a></div>
                    <div class="categories-item"><a href="/category/wedding" class="categories-link">Wedding</a></div>
                    <div class="categories-item"><a href="/category/women" class="categories-link">Women</a></div>
                </div>
            </div>
        </div>

        <div class="content-wrap">
            <div class="sidebar">
                <div class="app-filter">
                    <div class="filter-sort">
                        <div class="sort-switch">
                            <button class="sort-btn">new</button>
                            <button class="sort-btn is-active">rising</button>
                            <button class="sort-btn">top</button>
                        </div>
                    </div>
                    <div class="filter-details" data-simplebar="init">
                        <div class="details filter is-expand">
                            <button class="summary">
                                <span class="arrow"></span>
                                <span>gender</span>
                            </button>
                            <div class="details-content">
                                <div class="filter-list">
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio1" name="photo-radio-group" checked>
                                        <label for="photoradio1">boy</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio2" name="photo-radio-group">
                                        <label for="photoradio2">girl</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio3" name="photo-radio-group">
                                        <label for="photoradio3">men</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio4" name="photo-radio-group">
                                        <label for="photoradio4">transgender</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio5" name="photo-radio-group">
                                        <label for="photoradio5">women</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="details filter">
                            <button class="summary"><span class="arrow"></span><span>age</span></button>
                            <div class="details-content">
                                <div class="filter-list">
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio6" name="photo-radio-group">
                                        <label for="photoradio6">adult</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio7" name="photo-radio-group">
                                        <label for="photoradio7">baby</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio8" name="photo-radio-group">
                                        <label for="photoradio8">child</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio9" name="photo-radio-group">
                                        <label for="photoradio9">elderly</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio10" name="photo-radio-group">
                                        <label for="photoradio10">kid</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio11" name="photo-radio-group">
                                        <label for="photoradio11">mature</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio12" name="photo-radio-group">
                                        <label for="photoradio12">middle-aged</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio13" name="photo-radio-group">
                                        <label for="photoradio13">old</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio14" name="photo-radio-group">
                                        <label for="photoradio14">senior</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio15" name="photo-radio-group">
                                        <label for="photoradio15">teenager</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio16" name="photo-radio-group">
                                        <label for="photoradio16">toddler</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio17" name="photo-radio-group">
                                        <label for="photoradio17">young</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="details filter">
                            <button class="summary"><span class="arrow"></span><span>race</span></button>
                            <div class="details-content">
                                <div class="filter-list">
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio6" name="photo-radio-group">
                                        <label for="photoradio6">adult</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio7" name="photo-radio-group">
                                        <label for="photoradio7">baby</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio8" name="photo-radio-group">
                                        <label for="photoradio8">child</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio9" name="photo-radio-group">
                                        <label for="photoradio9">elderly</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio10" name="photo-radio-group">
                                        <label for="photoradio10">kid</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio11" name="photo-radio-group">
                                        <label for="photoradio11">mature</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio12" name="photo-radio-group">
                                        <label for="photoradio12">middle-aged</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio13" name="photo-radio-group">
                                        <label for="photoradio13">old</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio14" name="photo-radio-group">
                                        <label for="photoradio14">senior</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio15" name="photo-radio-group">
                                        <label for="photoradio15">teenager</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio16" name="photo-radio-group">
                                        <label for="photoradio16">toddler</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio17" name="photo-radio-group">
                                        <label for="photoradio17">young</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="details filter">
                            <button class="summary"><span class="arrow"></span><span>hair</span></button>
                            <div class="details-content">
                                <div class="filter-list">
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio6" name="photo-radio-group">
                                        <label for="photoradio6">adult</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio7" name="photo-radio-group">
                                        <label for="photoradio7">baby</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio8" name="photo-radio-group">
                                        <label for="photoradio8">child</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio9" name="photo-radio-group">
                                        <label for="photoradio9">elderly</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio10" name="photo-radio-group">
                                        <label for="photoradio10">kid</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio11" name="photo-radio-group">
                                        <label for="photoradio11">mature</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio12" name="photo-radio-group">
                                        <label for="photoradio12">middle-aged</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio13" name="photo-radio-group">
                                        <label for="photoradio13">old</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio14" name="photo-radio-group">
                                        <label for="photoradio14">senior</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio15" name="photo-radio-group">
                                        <label for="photoradio15">teenager</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio16" name="photo-radio-group">
                                        <label for="photoradio16">toddler</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio17" name="photo-radio-group">
                                        <label for="photoradio17">young</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="details filter">
                            <button class="summary"><span class="arrow"></span><span>body type</span></button>
                            <div class="details-content">
                                <div class="filter-list">
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio6" name="photo-radio-group">
                                        <label for="photoradio6">adult</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio7" name="photo-radio-group">
                                        <label for="photoradio7">baby</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio8" name="photo-radio-group">
                                        <label for="photoradio8">child</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio9" name="photo-radio-group">
                                        <label for="photoradio9">elderly</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio10" name="photo-radio-group">
                                        <label for="photoradio10">kid</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio11" name="photo-radio-group">
                                        <label for="photoradio11">mature</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio12" name="photo-radio-group">
                                        <label for="photoradio12">middle-aged</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio13" name="photo-radio-group">
                                        <label for="photoradio13">old</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio14" name="photo-radio-group">
                                        <label for="photoradio14">senior</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio15" name="photo-radio-group">
                                        <label for="photoradio15">teenager</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio16" name="photo-radio-group">
                                        <label for="photoradio16">toddler</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio17" name="photo-radio-group">
                                        <label for="photoradio17">young</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="details filter">
                            <button class="summary"><span class="arrow"></span><span>special features</span></button>
                            <div class="details-content">
                                <div class="filter-list">
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio6" name="photo-radio-group">
                                        <label for="photoradio6">adult</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio7" name="photo-radio-group">
                                        <label for="photoradio7">baby</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio8" name="photo-radio-group">
                                        <label for="photoradio8">child</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio9" name="photo-radio-group">
                                        <label for="photoradio9">elderly</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio10" name="photo-radio-group">
                                        <label for="photoradio10">kid</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio11" name="photo-radio-group">
                                        <label for="photoradio11">mature</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio12" name="photo-radio-group">
                                        <label for="photoradio12">middle-aged</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio13" name="photo-radio-group">
                                        <label for="photoradio13">old</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio14" name="photo-radio-group">
                                        <label for="photoradio14">senior</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio15" name="photo-radio-group">
                                        <label for="photoradio15">teenager</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio16" name="photo-radio-group">
                                        <label for="photoradio16">toddler</label>
                                    </div>
                                    <div class="filter-item">
                                        <input type="radio" id="photoradio17" name="photo-radio-group">
                                        <label for="photoradio17">young</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="masonry">
                    <div class="column">
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image">


                                <iframe width="100%" height="100%"
                                        src="https://www.youtube.com/embed/ds9rljep6-c?controls=0"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>

                                <div class="card-control">
                                    <a href="" class="card-edit">Recompose</a>
                                    <button class="card-like">
                                    <span class="card-like-icon">
                                        <svg width="100%" height="100%"><use xlink:href="#heart"></use></svg>
                                    </span>
                                        <span class="card-like-value">2</span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-caption">The art of teaching ballet</div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image">
                                <img src="https://photo-cdn.icons8.com/assets/previews/371/616455a6-3afa-47da-9e50-36f4b26fb342thumb-1x.jpg"
                                     alt="Young man crossing his fingers 'cause he's buying new car">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">1</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Young man crossing his fingers 'cause he's buying new car</div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/995/febe25a8-4551-4045-84c7-8a8081749aa9thumb-1x.jpg"
                                        alt="Surprised office employee sitting in desert and looking on female robot ">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">1</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Surprised office employee sitting in desert and looking on female
                                robot
                            </div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/220/3f456142-01f9-42d9-a610-a61497e87c39thumb-1x.jpg"
                                        alt="A nice place for reading">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">0</span></button>
                                </div>
                            </div>
                            <div class="card-caption">A nice place for reading</div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="/photos/5caa4702d1dc91014ee25224" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/877/dae3e62b-20b2-42e6-8793-9dfe5a56ad99thumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href="https://photos.icons8.com/creator/photo/5ca4bbfaf0fed7002085cc3a?recompose=true"
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">4</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="/photos/5cb6f8aa264072001db93143" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/857/5c850a8d-f4ef-476c-a0df-4e4f3067508bthumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href="https://photos.icons8.com/creator/photo/5cb6c624f0fed70016d9de2a?recompose=true"
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">0</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>

                    </div>
                    <div class="column">

                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/495/bd5ba18e-f3d1-4e4c-afa4-6bd8aa220be8thumb-1x.jpg"
                                        alt="Hard choice between sports and disco">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">4</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Hard choice between sports and disco</div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        srcset="https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-1x.jpg 1x, https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-2x.jpg 2x"
                                        src="https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-1x.jpg"

                                        alt="Grandparents're surprised wtih seeing their grandkid for the first time">
                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">5</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Grandparents're surprised wtih seeing their grandkid for the first
                                time
                            </div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/361/257a8b31-109d-4703-8648-805ded8c333dthumb-1x.jpg"
                                        alt="Female office employee sitting in the middle of lake with huge fish in the sky">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">6</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Female office employee sitting in the middle of lake with huge
                                fish in
                                the sky
                            </div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/760/a35eea45-1c6b-4618-a0c3-7f7a2be9e28cthumb-1x.jpg"
                                        alt="Escaped into cyberspace">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">4</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Escaped into cyberspace</div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/502/0fb69543-2edb-4a07-b0bd-563307ba47f3thumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">1</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/499/3d46f745-e306-4e53-8c94-9de81bd7b08athumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">2</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>

                    </div>
                    <div class="column">

                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="/photos/5c40a75cf0fed7001898d362" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/595/44402aa1-efa2-4b07-8382-8bba1edf9a55thumb-1x.jpg"
                                        alt="The art of teaching ballet">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control">
                                    <a href="" class="card-edit">Recompose</a>
                                    <button class="card-like">
                                    <span class="card-like-icon">
                                        <svg width="100%" height="100%"><use xlink:href="#heart"></use></svg>
                                    </span>
                                        <span class="card-like-value">2</span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-caption">The art of teaching ballet</div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/371/616455a6-3afa-47da-9e50-36f4b26fb342thumb-1x.jpg"
                                        alt="Young man crossing his fingers 'cause he's buying new car">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">1</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Young man crossing his fingers 'cause he's buying new car</div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/995/febe25a8-4551-4045-84c7-8a8081749aa9thumb-1x.jpg"
                                        alt="Surprised office employee sitting in desert and looking on female robot ">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">1</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Surprised office employee sitting in desert and looking on female
                                robot
                            </div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/220/3f456142-01f9-42d9-a610-a61497e87c39thumb-1x.jpg"
                                        alt="A nice place for reading">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">0</span></button>
                                </div>
                            </div>
                            <div class="card-caption">A nice place for reading</div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="/photos/5caa4702d1dc91014ee25224" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/877/dae3e62b-20b2-42e6-8793-9dfe5a56ad99thumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href="https://photos.icons8.com/creator/photo/5ca4bbfaf0fed7002085cc3a?recompose=true"
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">4</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="/photos/5cb6f8aa264072001db93143" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/857/5c850a8d-f4ef-476c-a0df-4e4f3067508bthumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href="https://photos.icons8.com/creator/photo/5cb6c624f0fed70016d9de2a?recompose=true"
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">0</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>

                    </div>
                    <div class="column">

                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/495/bd5ba18e-f3d1-4e4c-afa4-6bd8aa220be8thumb-1x.jpg"
                                        alt="Hard choice between sports and disco">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">4</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Hard choice between sports and disco</div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        srcset="https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-1x.jpg 1x, https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-2x.jpg 2x"
                                        src="https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-1x.jpg"

                                        alt="Grandparents're surprised wtih seeing their grandkid for the first time">
                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">5</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Grandparents're surprised wtih seeing their grandkid for the first
                                time
                            </div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/361/257a8b31-109d-4703-8648-805ded8c333dthumb-1x.jpg"
                                        alt="Female office employee sitting in the middle of lake with huge fish in the sky">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">6</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Female office employee sitting in the middle of lake with huge
                                fish in
                                the sky
                            </div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/760/a35eea45-1c6b-4618-a0c3-7f7a2be9e28cthumb-1x.jpg"
                                        alt="Escaped into cyberspace">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">4</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Escaped into cyberspace</div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/502/0fb69543-2edb-4a07-b0bd-563307ba47f3thumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">1</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/499/3d46f745-e306-4e53-8c94-9de81bd7b08athumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">2</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>

                    </div>
                    <div class="column">

                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/495/bd5ba18e-f3d1-4e4c-afa4-6bd8aa220be8thumb-1x.jpg"
                                        alt="Hard choice between sports and disco">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">4</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Hard choice between sports and disco</div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        srcset="https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-1x.jpg 1x, https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-2x.jpg 2x"
                                        src="https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-1x.jpg"

                                        alt="Grandparents're surprised wtih seeing their grandkid for the first time">
                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">5</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Grandparents're surprised wtih seeing their grandkid for the first
                                time
                            </div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/361/257a8b31-109d-4703-8648-805ded8c333dthumb-1x.jpg"
                                        alt="Female office employee sitting in the middle of lake with huge fish in the sky">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">6</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Female office employee sitting in the middle of lake with huge
                                fish in
                                the sky
                            </div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/760/a35eea45-1c6b-4618-a0c3-7f7a2be9e28cthumb-1x.jpg"
                                        alt="Escaped into cyberspace">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">4</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Escaped into cyberspace</div>
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/502/0fb69543-2edb-4a07-b0bd-563307ba47f3thumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">1</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/499/3d46f745-e306-4e53-8c94-9de81bd7b08athumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">2</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content photo-modal">
                <div class="photo-container">
                    <div class="photo-row">
                        <div class="photo-left">
                            <div class="photo-img" style="min-width: 280px; max-width: calc((600px - 10%) * 1.50015);">
                                <div class="image-container" style="padding-bottom: 66.66%;">


                                    <iframe width="100%" height="450"
                                            src="https://www.youtube.com/embed/ds9rljep6-c?autoplay=1" frameborder="0"
                                            allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="photo-right">
                            <div class="photo-info">
                                <div class="author"><a href="/user/5bfd44c3f0fed700165713d2" class="author-pic"
                                                       style="background-color: rgb(201, 185, 130);">P</a><a
                                            href="/user/5bfd44c3f0fed700165713d2"
                                            class="author-name">pavel.aksyonov.icons8</a></div>
                                <div class="date">Jan 17, 2019</div>
                            </div>
                            <div class="photo-controls">
                                <a href="" class="btn is-download">Download</a>
                                <div class="btn is-like">
                                <span class="btn-icon">
                                    <i class="icofont-heart"></i>
                                </span>
                                    <span>2</span>
                                </div>
                            </div>
                            <div class="photo-details">
                                <div class="details is-expand">
                                    <button class="summary"><span class="arrow"></span><span>Titles</span></button>
                                    <div class="details-content">
                                        <h1 class="photo-title">The Art Of Teaching Ballet</h1>
                                        <h2 class="photo-subtitle">Proud Of Her Pupil's Success</h2>
                                        <h2 class="photo-subtitle">Dance Teacher Looking Proudly At Her Little
                                            Apprentice</h2></div>
                                </div>
                                <div class="details">
                                    <button class="summary"><span class="arrow"></span><span>Credits</span></button>
                                    <div class="details-content" style="display: none;">
                                        <dl class="credits">
                                            <dt>Photographer:</dt>
                                            <dd><a href="/photographers/alexey-sokolov" class="details-link">Alexey
                                                    Sokolov</a>
                                                <!---->
                                            </dd>
                                        </dl>
                                        <dl class="credits">
                                            <dt>Models:</dt>
                                            <dd><a href="/models/anna" class="details-link">Anna</a><span>, </span><a
                                                        href="/models/vilena" class="details-link">Vilena</a>
                                                <!---->
                                            </dd>
                                        </dl>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="masonry">
                    <div class="column">
                        <div class="card" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/595/44402aa1-efa2-4b07-8382-8bba1edf9a55thumb-1x.jpg"
                                        alt="The art of teaching ballet">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control">
                                    <a href="" class="card-edit">Recompose</a>
                                    <button class="card-like">
                                    <span class="card-like-icon">
                                        <svg width="100%" height="100%"><use xlink:href="#heart"></use></svg>
                                    </span>
                                        <span class="card-like-value">2</span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-caption">The art of teaching ballet</div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/371/616455a6-3afa-47da-9e50-36f4b26fb342thumb-1x.jpg"
                                        alt="Young man crossing his fingers 'cause he's buying new car">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">1</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Young man crossing his fingers 'cause he's buying new car</div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/995/febe25a8-4551-4045-84c7-8a8081749aa9thumb-1x.jpg"
                                        alt="Surprised office employee sitting in desert and looking on female robot ">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">1</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Surprised office employee sitting in desert and looking on female
                                robot
                            </div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/220/3f456142-01f9-42d9-a610-a61497e87c39thumb-1x.jpg"
                                        alt="A nice place for reading">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">0</span></button>
                                </div>
                            </div>
                            <div class="card-caption">A nice place for reading</div>
                        </div>
                        <div class="card">
                            <a href="/photos/5caa4702d1dc91014ee25224" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/877/dae3e62b-20b2-42e6-8793-9dfe5a56ad99thumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href="https://photos.icons8.com/creator/photo/5ca4bbfaf0fed7002085cc3a?recompose=true"
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">4</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>
                        <div class="card">
                            <a href="/photos/5cb6f8aa264072001db93143" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/857/5c850a8d-f4ef-476c-a0df-4e4f3067508bthumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href="https://photos.icons8.com/creator/photo/5cb6c624f0fed70016d9de2a?recompose=true"
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">0</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>

                    </div>
                    <div class="column">

                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/495/bd5ba18e-f3d1-4e4c-afa4-6bd8aa220be8thumb-1x.jpg"
                                        alt="Hard choice between sports and disco">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">4</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Hard choice between sports and disco</div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        srcset="https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-1x.jpg 1x, https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-2x.jpg 2x"
                                        src="https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-1x.jpg"

                                        alt="Grandparents're surprised wtih seeing their grandkid for the first time">
                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">5</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Grandparents're surprised wtih seeing their grandkid for the first
                                time
                            </div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/361/257a8b31-109d-4703-8648-805ded8c333dthumb-1x.jpg"
                                        alt="Female office employee sitting in the middle of lake with huge fish in the sky">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">6</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Female office employee sitting in the middle of lake with huge
                                fish in
                                the sky
                            </div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/760/a35eea45-1c6b-4618-a0c3-7f7a2be9e28cthumb-1x.jpg"
                                        alt="Escaped into cyberspace">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">4</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Escaped into cyberspace</div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/502/0fb69543-2edb-4a07-b0bd-563307ba47f3thumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">1</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/499/3d46f745-e306-4e53-8c94-9de81bd7b08athumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">2</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>

                    </div>
                    <div class="column">

                        <div class="card">
                            <a href="/photos/5c40a75cf0fed7001898d362" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/595/44402aa1-efa2-4b07-8382-8bba1edf9a55thumb-1x.jpg"
                                        alt="The art of teaching ballet">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control">
                                    <a href="" class="card-edit">Recompose</a>
                                    <button class="card-like">
                                    <span class="card-like-icon">
                                        <svg width="100%" height="100%"><use xlink:href="#heart"></use></svg>
                                    </span>
                                        <span class="card-like-value">2</span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-caption">The art of teaching ballet</div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/371/616455a6-3afa-47da-9e50-36f4b26fb342thumb-1x.jpg"
                                        alt="Young man crossing his fingers 'cause he's buying new car">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">1</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Young man crossing his fingers 'cause he's buying new car</div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/995/febe25a8-4551-4045-84c7-8a8081749aa9thumb-1x.jpg"
                                        alt="Surprised office employee sitting in desert and looking on female robot ">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">1</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Surprised office employee sitting in desert and looking on female
                                robot
                            </div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/220/3f456142-01f9-42d9-a610-a61497e87c39thumb-1x.jpg"
                                        alt="A nice place for reading">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">0</span></button>
                                </div>
                            </div>
                            <div class="card-caption">A nice place for reading</div>
                        </div>
                        <div class="card">
                            <a href="/photos/5caa4702d1dc91014ee25224" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/877/dae3e62b-20b2-42e6-8793-9dfe5a56ad99thumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href="https://photos.icons8.com/creator/photo/5ca4bbfaf0fed7002085cc3a?recompose=true"
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">4</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>
                        <div class="card">
                            <a href="/photos/5cb6f8aa264072001db93143" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/857/5c850a8d-f4ef-476c-a0df-4e4f3067508bthumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href="https://photos.icons8.com/creator/photo/5cb6c624f0fed70016d9de2a?recompose=true"
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">0</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>

                    </div>
                    <div class="column">

                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/495/bd5ba18e-f3d1-4e4c-afa4-6bd8aa220be8thumb-1x.jpg"
                                        alt="Hard choice between sports and disco">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">4</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Hard choice between sports and disco</div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        srcset="https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-1x.jpg 1x, https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-2x.jpg 2x"
                                        src="https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-1x.jpg"

                                        alt="Grandparents're surprised wtih seeing their grandkid for the first time">
                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">5</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Grandparents're surprised wtih seeing their grandkid for the first
                                time
                            </div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/361/257a8b31-109d-4703-8648-805ded8c333dthumb-1x.jpg"
                                        alt="Female office employee sitting in the middle of lake with huge fish in the sky">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">6</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Female office employee sitting in the middle of lake with huge
                                fish in
                                the sky
                            </div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/760/a35eea45-1c6b-4618-a0c3-7f7a2be9e28cthumb-1x.jpg"
                                        alt="Escaped into cyberspace">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">4</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Escaped into cyberspace</div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/502/0fb69543-2edb-4a07-b0bd-563307ba47f3thumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">1</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/499/3d46f745-e306-4e53-8c94-9de81bd7b08athumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">2</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>

                    </div>
                    <div class="column">

                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/495/bd5ba18e-f3d1-4e4c-afa4-6bd8aa220be8thumb-1x.jpg"
                                        alt="Hard choice between sports and disco">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">4</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Hard choice between sports and disco</div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        srcset="https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-1x.jpg 1x, https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-2x.jpg 2x"
                                        src="https://photo-cdn.icons8.com/assets/previews/535/b62ee007-d362-4bad-bac0-b28fc6d96fbfthumb-1x.jpg"

                                        alt="Grandparents're surprised wtih seeing their grandkid for the first time">
                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">5</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Grandparents're surprised wtih seeing their grandkid for the first
                                time
                            </div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/361/257a8b31-109d-4703-8648-805ded8c333dthumb-1x.jpg"
                                        alt="Female office employee sitting in the middle of lake with huge fish in the sky">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">6</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Female office employee sitting in the middle of lake with huge
                                fish in
                                the sky
                            </div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/760/a35eea45-1c6b-4618-a0c3-7f7a2be9e28cthumb-1x.jpg"
                                        alt="Escaped into cyberspace">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">4</span></button>
                                </div>
                            </div>
                            <div class="card-caption">Escaped into cyberspace</div>
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/502/0fb69543-2edb-4a07-b0bd-563307ba47f3thumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">1</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>
                        <div class="card">
                            <a href="" class="card-link"></a>
                            <div class="card-image"><img
                                        src="https://photo-cdn.icons8.com/assets/previews/499/3d46f745-e306-4e53-8c94-9de81bd7b08athumb-1x.jpg"
                                        alt="Collage">

                                <div class="playicon-overlay"><i class="icofont-ui-play"></i></div>
                                <div class="card-control"><a
                                            href=""
                                            class="card-edit">Recompose</a>
                                    <button class="card-like"><span class="card-like-icon"></span><span
                                                class="card-like-value">2</span></button>
                                </div>
                            </div>
                            <!---->
                        </div>

                    </div>
                </div>
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

</body>
</html>