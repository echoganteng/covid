<!DOCTYPE html>
<html>

<head>
    @include('depan.bagian.meta')
    <title>KPU Kabupaten Situbondo</title>
    @include('depan.bagian.css_favicon1')
</head>
<body>
<link itemprop="thumbnailUrl" href="{{asset($halaman->gambar)}}"> <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject"> <link itemprop="url" href="{{asset($halaman->gambar)}}"> </span>
@include('depan.bagian.header')
@include('depan.bagian.isi_blog_detail')
@include('depan.bagian.footer')
<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery-1.11.0.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/own-menu.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery.isotope.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/owl.carousel.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery.colio.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/main.js')}}"></script>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
@yield('js')
</body>
</html>