<!DOCTYPE html>
<html>

<head>
    @include('depan.bagian.meta')
    <title>KPU Kabupaten Situbondo</title>
    @include('depan.bagian.css_favicon')
</head>
<body>
<link itemprop="thumbnailUrl" href="{{asset('tema/kominfo_rsud_besuki/favicon.png')}}"> <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject"> <link itemprop="url" href="{{asset('tema/kominfo_rsud_besuki/favicon.png')}}"> </span>
@include('depan.bagian.header')
@include('depan.bagian.isi_blog_list')
@include('depan.bagian.footer')
<!-- <script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery-1.11.0.min.js')}}"></script>  -->
<script src="{{asset('/tema/kominfo_rsud_besuki/js/bootstrap.min.js')}}"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset('/tema/kominfo_rsud_besuki/js/own-menu.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery.isotope.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/owl.carousel.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery.colio.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/main.js')}}"></script>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
<script src="{{asset('tema/select2-4.0.7/dist/js/select2.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.min.js"></script>
@stack('scripts')
</body>
</html>