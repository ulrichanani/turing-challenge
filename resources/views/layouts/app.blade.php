<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/fav-icon.png" type="image/x-icon"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Icon css link -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/line-icon/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/elegant-icon/style.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="{{ asset('vendors/revolution/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/revolution/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/revolution/css/navigation.css') }}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bootstrap-selector/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/full-page/jquery.fullpage.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/magnify-popup/magnific-popup.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <!-- App Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/front.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div id="app">
    @include('layouts.header')

    @include('layouts.flash-messages')

    @yield('content')

    @include('layouts.footer')

    <form id="form-delete" action="" method="POST">
        @csrf
        @method('delete')
    </form>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('/js/popper.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<!-- Rev slider js -->
<script src="{{ asset('/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<!-- Extra plugin css -->
<script src="{{ asset('/vendors/counterup/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('/vendors/counterup/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/vendors/bootstrap-selector/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('/vendors/image-dropdown/jquery.dd.min.js') }}"></script>
<script src="{{ asset('/js/smoothscroll.js') }}"></script>
<script src="{{ asset('/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('/vendors/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('/vendors/full-page/jquery.fullpage.min.js') }}"></script>
<script src="{{ asset('/vendors/magnify-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('/vendors/vertical-slider/js/jQuery.verticalCarousel.js') }}"></script>
<script src="{{ asset('/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('js/full-page.js') }}"></script>
<script src="{{ asset('/js/theme.js') }}"></script>

{{--<script type="text/javascript" src=" {{ asset('js/front-vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app-vendor.js') }}"></script>--}}
<script type="text/javascript" src=" {{ asset('js/front.js') }}"></script>
{{--<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>--}}

@yield('page-js')
</body>
</html>
