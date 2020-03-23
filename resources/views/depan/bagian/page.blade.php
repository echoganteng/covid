<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('depan.bagian.meta')
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper">

        <!-- HEADER AREA START -->
        @include('depan.bagian.header')
        <!-- HEADER AREA END -->

        <!-- MOBILE MENU AREA START -->
        @include('depan.bagian.mobile_menu')
        <!-- MOBILE MENU AREA END -->

        @yield('content')

        <!-- Start footer area -->
        @include('depan.bagian.footer')
        <!-- End footer area -->

        
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    @include('depan.bagian.jquery')

</body>

</html>