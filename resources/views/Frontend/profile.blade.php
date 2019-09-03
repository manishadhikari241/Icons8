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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    
    <link rel="stylesheet" href="css/icofont/icofont.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>



    <header class="header">
    <a href="" class="logo">
        <img src="http://www.iconhot.com/icon/png/wood-social-networking/512/blinklist-logo-webtreatsetc.png" alt="">
    </a>

    <div class="main-nav container">
        <nav >
            <ul class="nav-list">
                
                <li><a class="nav-link" href="Icons/icons.blade.php" >Icons</a></li>
                <li class="nav-item has-dropdown">
                    <a class="nav-link" href="javascript:void(0)" >Photos &nbsp;<i class="icofont-thin-down"></i></a>
                    <div class="nav-dropdown">
                        <ul>
                            <li ><a href="photocreator/index.html" >Photo Creator</a></li>
                            <li ><a href="photo-index.html" >Photo library</a></li>
                        </ul>
                    </div>
                </li>
                <li><a class="nav-link" href="vector-index.html" >Vectors</a></li>
                <li><a class="nav-link" href="music-index.html" >Music</a></li>
                <li><a class="nav-link" href="videospage.html" >Videos</a></li>

                <li class="is-pull-right"><a class="nav-link " href="forum-index.html" >Forum</a></li>
                
                

            </ul>
        </nav>
        <div class="gamburg" >
            <button class="gamburg-btn" ></button>
        </div>
    </div>

    <ul class="nav-actions">
        <li class="has-auth"><a href="" data-toggle="modal" data-target="#loginModal">Login</a></li>
        <li class="has-auth-popup">
            <div class="auth-app-popup">
                <a href="" class="auth-app-popup--toggle">Account</a>
                <div class="auth-app-popup-content">
                    <ul>
                        <li ><a href="profile.html" >Profile</a></li>
                        <li ><a href="" >Logout</a></li>
                    </ul>
                </div>
            </div>

        </li>
    </ul>

</header>

<div class="modal fade app-modal" id="loginModal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="login-form" >
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
<div class="profile-page">
    <section class="profile">
        <div class="account container">
            <h3>Account</h3>
            <div class="email">
                <span class="user-icon">S</span>susantshrestha@hotmail.com
            </div>
        </div>
        <div class="settings container">
            <div class="column">
                <div class="row">
                    <div class="setting-header">Your subscription is
                        <span class="danger">&nbsp;Inactive</span></div>
                </div>

            </div>

            <div class="column">
                <div class="row">
                    <div class="setting-header">My settings</div>
                    <div class="setting-action">
                        <a href="" data-toggle="modal" data-target="#changepasswordModal">
                            Change Email or Password
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </section>
</div>
<div class="modal fade app-modal" id="changepasswordModal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="login-form" >
                <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="toggleform">
                        <div class="title">Change Credentials</div>
                        <div class="description">Here you can change your email or password</div>
                        <form class="is-big">
                            <input name="email" placeholder="Email" class="" autocomplete="off">
                            <input type="password" name="password" placeholder="Password" class="" autocomplete="off">
                            <button type="submit" class="submit-button">Change</button>
                        </form>
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







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- wow js -->

<!-- Owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/4.1.0/simplebar.min.js"></script>

<script src="js/app.min.js"></script>

</body>
</html>