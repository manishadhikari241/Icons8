<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Imgholdr - Awesome icon and image placeholders for your project</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('imageeditor/img/logo.png') }}">

    <!-- Bootstrap v3.3.6 -->
    <link rel="stylesheet" href="{{ asset('imageeditor/css/bootstrap.min.css') }}">
    <!-- Font Awesome 4.6.3 -->
    <link rel="stylesheet" href="{{ asset('imageeditor/css/font-awesome.min.css') }}">
    <!-- Ionicons, v2.0.0 -->
    <link rel="stylesheet" href="{{ asset('imageeditor/css/ionicons.min.css') }}">
    <!-- Chosen v1.2.0 -->
    <link rel="stylesheet" href="{{ asset('imageeditor/css/chosen.min.css') }}">
    <!-- Colorpicker -->
    <link rel="stylesheet" href="{{ asset('imageeditor/css/colorpicker.min.css') }}">
    <!--Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('imageeditor/css/app.min.css') }}">
    
    <!--Custom Stylesheet -->
    @yield('css')
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

{{-- <body class="hold-transition skin-blue-light sidebar-mini"> --}}
<body>

    @include('iconeditor.partials.header')

    <!-- Your Page Content Here -->
    @yield('content')


    @include('iconeditor.partials.footer')

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery v2.2.3 -->
<script src="{{ asset('imageeditor/js/jquery.min.js') }}"></script>
<!-- Bootstrap v3.3.6 -->
<script src="{{ asset('imageeditor/js/bootstrap.min.js') }}"></script>
<!-- Underscore.js 1.8.3 -->
<script src="{{ asset('imageeditor/js/underscore.js') }}"></script>
<!-- Chosen v1.1.0 -->
<script src="{{ asset('imageeditor/js/chosen.jquery.min.js') }}"></script>

<!-- AngularJS v1.3.7 -->
<script src="{{ asset('imageeditor/js/angular.min.js') }}"></script>
<!-- AngularJS v1.3.7 -->
<script src="{{ asset('imageeditor/js/angular-sanitize.min.js') }}"></script>
<!-- angular-translate - v2.5.2 -->
<script src="{{ asset('imageeditor/js/angular-translate.min.js') }}"></script>
<!-- State-based routing for AngularJS -->
<script src="{{ asset('imageeditor/js/angular-ui-router.min.js') }}"></script>
<!-- angular-ui-bootstrap 0.12.0 -->
<script src="{{ asset('imageeditor/js/ui-bootstrap-tpls-0.12.0.min.js') }}"></script>
<!-- Angular Colorpicker -->
<script src="{{ asset('imageeditor/js/bootstrap-colorpicker-module.min.js') }}"></script>
<!-- Angular Chosen directive -->
<script src="{{ asset('imageeditor/js/angular-chosen.min.js') }}"></script>
<!-- Act as our Helpers for all our projects. -->
<script src="{{ asset('imageeditor/js/helpers.js') }}"></script>
<!-- Initializer -->
<script src="{{ asset('imageeditor/js/init.js') }}"></script>

<!-- CSRF TOKEN -->
<script>window.csrf = '{{ csrf_token() }}'</script>
<!-- Angular Common JS -->
<script src="{{ asset('imageeditor/js/ng-common.js') }}"></script>
<!--Custom JSScript -->
@yield('js')

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83155633-2', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>