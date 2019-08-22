<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Icons website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplebar/4.1.0/simplebar.min.css">


    <link rel="stylesheet" href="{{url('css/Frontend/icofont/icofont.min.css')}}">
    <link rel="stylesheet" href="{{url('css/Frontend/style.css')}}">
    <link rel="stylesheet" href="{{url('css/Frontend/responsive.css')}}">
</head>
<body>


<div class="photo_layout">
    <header class="header">
        <a href="" class="logo">
            <img src="http://www.iconhot.com/icon/png/wood-social-networking/512/blinklist-logo-webtreatsetc.png" alt="">
        </a>

        <ul class="nav-actions">
            <li class="has-auth"><a href="">Login</a></li>
        </ul>

    </header>

    <div class="photo-categories-page">
        <div class="categories">

            <div class="categories-wrap">
                <div class="categories-list" style="padding-bottom: 17px;">
                    @foreach($cat as $value)
                    <div class="categories-item"><a href="/category/animals"
                                                    class="categories-link is-active">Animals</a>
                    </div>

                    <div class="categories-item"><a href="/category/technology" class="categories-link">{{$value->title}}</a></div>
                        @endforeach

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
                            <button class="summary"><span class="arrow"></span><span>gender</span></button>
                            <div class="details-content">
                                <div class="filter-list">
                                    <div class="filter-item"><a href="/t/boy" class="filter-link">boy</a></div>
                                    <div class="filter-item"><a href="/t/girl" class="filter-link">girl</a></div>
                                    <div class="filter-item"><a href="/t/man" class="filter-link">man</a></div>
                                    <div class="filter-item"><a href="/t/transgender"
                                                                class="filter-link">transgender</a>
                                    </div>
                                    <div class="filter-item"><a href="/t/woman" class="filter-link">woman</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="details filter">
                            <button class="summary"><span class="arrow"></span><span>age</span></button>
                            <div class="details-content" style="display: none;">
                                <div class="filter-list">
                                    <div class="filter-item"><a href="/t/adult" class="filter-link">adult</a></div>
                                    <div class="filter-item"><a href="/t/baby" class="filter-link">baby</a></div>
                                    <div class="filter-item"><a href="/t/child" class="filter-link">child</a></div>
                                    <div class="filter-item"><a href="/t/elderly" class="filter-link">elderly</a></div>
                                    <div class="filter-item"><a href="/t/kid" class="filter-link">kid</a></div>
                                    <div class="filter-item"><a href="/t/mature" class="filter-link">mature</a></div>
                                    <div class="filter-item"><a href="/t/middle-aged"
                                                                class="filter-link">middle-aged</a>
                                    </div>
                                    <div class="filter-item"><a href="/t/old" class="filter-link">old</a></div>
                                    <div class="filter-item"><a href="/t/senior" class="filter-link">senior</a></div>
                                    <div class="filter-item"><a href="/t/teenager" class="filter-link">teenager</a>
                                    </div>
                                    <div class="filter-item"><a href="/t/toddler" class="filter-link">toddler</a></div>
                                    <div class="filter-item"><a href="/t/young" class="filter-link">young</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="details filter">
                            <button class="summary"><span class="arrow"></span><span>race</span></button>
                            <div class="details-content" style="display: none;">
                                <div class="filter-list">
                                    <div class="filter-item"><a href="/t/african-american" class="filter-link">african-american</a>
                                    </div>
                                    <div class="filter-item"><a href="/t/afro" class="filter-link">afro</a></div>
                                    <div class="filter-item"><a href="/t/asian" class="filter-link">asian</a></div>
                                    <div class="filter-item"><a href="/t/black" class="filter-link">black</a></div>
                                    <div class="filter-item"><a href="/t/caucasian" class="filter-link">caucasian</a>
                                    </div>
                                    <div class="filter-item"><a href="/t/hispanic" class="filter-link">hispanic</a>
                                    </div>
                                    <div class="filter-item"><a href="/t/latino" class="filter-link">latino</a></div>
                                    <div class="filter-item"><a href="/t/mixed-race" class="filter-link">mixed-race</a>
                                    </div>
                                    <div class="filter-item"><a href="/t/multiracial"
                                                                class="filter-link">multiracial</a>
                                    </div>
                                    <div class="filter-item"><a href="/t/white" class="filter-link">white</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="details filter">
                            <button class="summary"><span class="arrow"></span><span>hair</span></button>
                            <div class="details-content" style="display: none;">
                                <div class="filter-list">
                                    <div class="filter-item"><a href="/t/afro-haired"
                                                                class="filter-link">afro-haired</a>
                                    </div>
                                    <div class="filter-item"><a href="/t/bald" class="filter-link">bald</a></div>
                                    <div class="filter-item"><a href="/t/black-haired"
                                                                class="filter-link">black-haired</a>
                                    </div>
                                    <div class="filter-item"><a href="/t/blond" class="filter-link">blond</a></div>
                                    <div class="filter-item"><a href="/t/brown-haired"
                                                                class="filter-link">brown-haired</a>
                                    </div>
                                    <div class="filter-item"><a href="/t/brunet" class="filter-link">brunet</a></div>
                                    <div class="filter-item"><a href="/t/brunette" class="filter-link">brunette</a>
                                    </div>
                                    <div class="filter-item"><a href="/t/curly" class="filter-link">curly</a></div>
                                    <div class="filter-item"><a href="/t/grey-haired"
                                                                class="filter-link">grey-haired</a>
                                    </div>
                                    <div class="filter-item"><a href="/t/silver-haired"
                                                                class="filter-link">silver-haired</a></div>
                                    <div class="filter-item"><a href="/t/wavy-haired"
                                                                class="filter-link">wavy-haired</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="details filter">
                            <button class="summary"><span class="arrow"></span><span>body type</span></button>
                            <div class="details-content" style="display: none;">
                                <div class="filter-list">
                                    <div class="filter-item"><a href="/t/athletic" class="filter-link">athletic</a>
                                    </div>
                                    <div class="filter-item"><a href="/t/fit" class="filter-link">fit</a></div>
                                    <div class="filter-item"><a href="/t/plump" class="filter-link">plump</a></div>
                                    <div class="filter-item"><a href="/t/skinny" class="filter-link">skinny</a></div>
                                    <div class="filter-item"><a href="/t/slim" class="filter-link">slim</a></div>
                                    <div class="filter-item"><a href="/t/thin" class="filter-link">thin</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="details filter">
                            <button class="summary"><span class="arrow"></span><span>special features</span></button>
                            <div class="details-content" style="display: none;">
                                <div class="filter-list">
                                    <div class="filter-item"><a href="/t/beard" class="filter-link">beard</a></div>
                                    <div class="filter-item"><a href="/t/freckles" class="filter-link">freckles</a>
                                    </div>
                                    <div class="filter-item"><a href="/t/tattoo" class="filter-link">tattoo</a></div>
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
                                <img src="https://photo-cdn.icons8.com/assets/previews/595/44402aa1-efa2-4b07-8382-8bba1edf9a55thumb-1x.jpg"
                                     alt="The art of teaching ballet">
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
                                    <img
                                            src="https://photo-cdn.icons8.com/assets/previews/595/44402aa1-efa2-4b07-8382-8bba1edf9a551x.jpg"
                                            alt="The art of teaching ballet"
                                            srcset="https://photo-cdn.icons8.com/assets/previews/595/44402aa1-efa2-4b07-8382-8bba1edf9a551x.jpg 1x, https://photo-cdn.icons8.com/assets/previews/595/44402aa1-efa2-4b07-8382-8bba1edf9a552x.jpg 2x">
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
                <div class="footer-nav" >
                    <h2 class="footer-nav-header" >Design Assets</h2>
                    <ul class="footer-nav-list" >
                        <li><a href="">Icons</a></li>
                        <li><a href="">Stock Photos</a></li>
                        <li><a href=""><span >Vector Illustrations</span><span class="ml-2 badge badge-success" >New</span></a></li>
                        <li><a href="">Royalty-free Music</a></li>
                    </ul>
                </div>

                <div class="footer-nav" >
                    <h2 class="footer-nav-header" >APPS</h2>
                    <ul class="footer-nav-list" >
                        <li><a href="">Lunacy</a></li>
                        <li><a href="">Pichon Icons</a></li>
                    </ul>
                </div>
                <div class="footer-nav" >
                    <h2 class="footer-nav-header" >ABOUT ICONS8</h2>
                    <ul class="footer-nav-list" >
                        <li><a href="">In Short</a></li>
                        <li><a href="">Business Model</a></li>
                    </ul>
                </div>
                <div class="footer-nav" >
                    <h2 class="footer-nav-header" >COMMUNITY</h2>
                    <ul class="footer-nav-list" >
                        <li><a href="">Blog</a></li>
                        <li><a href="">Forum</a></li>
                        <li><a href="">Product Hunt</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-wrap">
                <div class="footer-nav" >
                    <h2 class="footer-nav-header" >REQUEST</h2>
                    <ul class="footer-nav-list" >
                        <li><a href="">Icon</a></li>
                        <li><a href="">Photo Shoot</a></li>
                        <li><a href="">Lunacy Feature</a></li>
                    </ul>
                </div>
                <div class="footer-nav" >
                    <h2 class="footer-nav-header" >FOR DEVELOPERS</h2>
                    <ul class="footer-nav-list" >
                        <li><a href="">Icons API</a></li>
                        <li><a href="">Omg-Img</a></li>
                        <li><a href="">Photos API</a></li>
                        <li><a href="">Music API</a></li>
                    </ul>
                </div>
                <div class="footer-nav" >
                    <h2 class="footer-nav-header" >SUPPORT</h2>
                    <ul class="footer-nav-list" >
                        <li><a href="">Forum</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Contact us</a></li>
                    </ul>
                </div>
                <div class="footer-nav" >
                    <h2 class="footer-nav-header" >LICENSES</h2>
                    <ul class="footer-nav-list" >
                        <li><a href="">Free License</a></li>
                        <li><a href="">Paid License</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom" >
                <div class="footer-block" >
                    <div class="footer-copy" >© 2018 </div>
                </div>
                <div class="footer-terms" ><a href="" >Privacy Policy</a><a href="" >Terms and Conditions</a></div>
            </div>
        </div>


    </footer>




</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- wow js -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/4.1.0/simplebar.min.js"></script>

<script src="{{asset('js/Frontend/app.min.js')}}"></script>

</body>
</html>