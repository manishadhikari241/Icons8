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
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet">


    <link rel="stylesheet" href="{{url('css/Frontend/icofont/icofont.min.css')}}">
    <link rel="stylesheet" href="{{url('css/Frontend/style.css')}}">
    <link rel="stylesheet" href="{{url('css/Frontend/responsive.css')}}">
</head>
<body>


<div class="photo_layout">
    <header class="header">
        <a href="" class="logo">
            <img src="http://www.iconhot.com/icon/png/wood-social-networking/512/blinklist-logo-webtreatsetc.png"
                 alt="">
        </a>

        @if(\Illuminate\Support\Facades\Auth::check())

            <ul class="nav-actions">
                <li class="has-auth"><a
                            href="{{route('voyager.dashboard')}}">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                    <div class="logout-link">
                        <form method="post" action="{{route('logout')}}">
                            @csrf
                            <ul class="menu-links">
                                <li>
                                    <button type="submit"><a title="logout">logout
                                        </a></button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </li>
            </ul>
        @else
            <ul class="nav-actions">
                <li class="has-auth"><a href="" data-toggle="modal" data-target="#loginModal">Login</a></li>
            </ul>
        @endif
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
                                <input name="name" placeholder="Username" class="" autocomplete="off">

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

    <div class="photo-categories-page">
        <div class="categories">

            <div class="categories-wrap">
                <div class="categories-list" style="padding-bottom: 17px;">
                    @foreach($cat as $value)
                        <div class="bar categories-item"><a  data-id="{{$value->id}}" class="categories-link is-active">{{$value->title}}</a>
                        <input type="checkbox" id="cat" class="cart" name="id" value="{{$value->id}}"></div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="content-wrap">
            <div class="sidebar">
                <div class="app-filter">
                    <div class="filter-sort">
                        <div class="sort sort-switch">
                            <button id="new_id" class="sort-btn">new</button>
                            <button id="rising" class="sort-btn is-active">rising</button>
                            <button id="top" class="sort-btn">top</button>
                        </div>
                    </div>
                    <div class="filter-details" data-simplebar="init">
                        <div class="details filter is-expand">
                            <button class="summary"><span class="arrow"></span><span>Gender</span></button>
                            <div class="details-content">
                                <div class="filter-list">
                                    @foreach($gender as $value)
                                        <div class="filter-category-item">
                                            <input type="radio" class="gender_filter" id="{{$value->name}}"
                                                   value="{{$value->id}}" name="gender_radio">
                                            <label for="{{$value->name}}">{{$value->name}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="details filter">
                            <button class="summary"><span class="arrow"></span><span>Age</span></button>
                            <div class="details-content">
                                <div class="filter-list">
                                    @foreach($age as $value)
                                        <div class="filter-category-item">
                                            <input type="radio" class="age_filter" id="{{$value->name}}"
                                                   value="{{$value->id}}" name="age_radio">
                                            <label for="{{$value->name}}">{{$value->name}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="details filter">
                            <button class="summary"><span class="arrow"></span><span>Race</span></button>
                            <div class="details-content">
                                <div class="filter-list">
                                    @foreach($race as $value)
                                        <div class="filter-category-item">
                                            <input type="radio" class="race_filter" id="{{$value->name}}"
                                                   value="{{$value->id}}" name="race_radio">
                                            <label for="{{$value->name}}">{{$value->name}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="details filter">
                            <button class="summary"><span class="arrow"></span><span>Hair</span></button>
                            <div class="details-content">
                                <div class="filter-list">
                                    @foreach($hair as $value)
                                        <div class="filter-category-item">
                                            <input type="radio" class="hair_filter" id="{{$value->name}}"
                                                   value="{{$value->id}}" name="hair_radio">
                                            <label for="{{$value->name}}">{{$value->name}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="details filter">
                            <button class="summary"><span class="arrow"></span><span>Body type</span></button>
                            <div class="details-content">
                                <div class="filter-list">
                                    @foreach($body as $value)
                                        <div class="filter-category-item">
                                            <input type="radio" class="body_filter" id="{{$value->name}}"
                                                   value="{{$value->id}}" name="body_radio">
                                            <label for="{{$value->name}}">{{$value->name}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="details filter">
                            <button class="summary"><span class="arrow"></span><span>special features</span></button>
                            <div class="details-content">
                                <div class="filter-list">
                                    @foreach($spec as $value)
                                        <div class="filter-category-item">
                                            <input type="radio" class="special_filter" id="{{$value->name}}"
                                                   value="{{$value->id}}" name="special_radio">
                                            <label for="{{$value->name}}">{{$value->name}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="masonry" id="filter_id">
                    @foreach($img->split(5) as $item)
                        <div class="column">
                            @foreach($item as $value)
                                <div class="display card"
                                     data-id="{{$value->id}}">
                                    <a href="" class="card-link"></a>
                                    <div class="card-image">
                                        <img src="{{asset('images/photo_upload/'.$value->image)}}"
                                             alt="{!! $value->description  !!}">
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
                                    <div class="card-caption">{{$value->title}} </div>
                                </div>
                            @endforeach
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-xl" id="exampleModalLong" tabindex="-1" role="dialog"
         aria-labelledby="myExtraLargeModalLabel"
         aria-hidden="true" data-dismiss="modal">


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
    var $modal = $('#exampleModalLong');
    $(document).ready(function () {
        $('.display').click(function (e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            var tempEditUrl = "{{route('modal',':id')}}";
            tempEditUrl = tempEditUrl.replace(':id', id);
            $modal.load(tempEditUrl, function (response) {
                $modal.modal({show: true});
            });
        });

        $('.sort').find('#new_id').click(function () {
            var new_id = $('#new_id').val();

            $.ajax({
                url: document.url,
                type: 'get',
                data: {
                    new: new_id,
                },
                success: function (response) {

                    $('#filter_id').replaceWith($('#filter_id').html(response));
                }
            });
        });
        $('.sort').find('#rising').click(function () {
            var rising_id = $('#rising').val();
            $.ajax({
                url: document.url,
                type: 'get',
                data: {
                    rising: rising_id,
                },
                success: function (response) {

                    $('#filter_id').replaceWith($('#filter_id').html(response));
                }
            });
        });
        $('.sort').find('#top').click(function () {
            var top_id = $('#top').val();
            $.ajax({
                url: document.url,
                type: 'get',
                data: {
                    top: top_id
                },


                success: function (response) {

                    $('#filter_id').replaceWith($('#filter_id').html(response));
                }
            });
        });
        $("input[type='checkbox']").click(function (){
           var cat=$("input.cart[type='checkbox']:checked").val();
           console.log(cat);
           $.ajax({
               url:document.URL,
               type:'get',
               data:{
                   category_id:cat
               },
               success: function (result) {
                   $('#filter_id').replaceWith($('#filter_id')).html(result);
               }
           });
        });

        $("input[type='radio']").click(function () {
            var gender = $("input.gender_filter[type='radio']:checked").val();
            var age = $("input.age_filter[type='radio']:checked").val();
            var race = $("input.race_filter[type='radio']:checked").val();
            var hair = $("input.hair_filter[type='radio']:checked").val();
            var body = $("input.body_filter[type='radio']:checked").val();
            var special = $("input.special_filter[type='radio']:checked").val();
            console.log(body);

            $.ajax({
                url: document.URL,
                type: 'get',
                data: {
                    genderId: gender,
                    ageId: age,
                    raceId: race,
                    hairId: hair,
                    bodyId: body,
                    specialId: special,
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
