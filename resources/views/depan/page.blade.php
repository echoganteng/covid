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
  <!-- SUB BANNER -->
  <section class="sub-bnr bnr-2" style="background: url({{asset($almt->gambar_2)}}) no-repeat;" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Home</a></li>
          <li class="active">{{$halaman->nama}}</li>
        </ol>
      </div>
    </div>
  </section>
@include('depan.bagian.isi_halaman')
@include('depan.bagian.footer')
<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery-1.11.0.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/own-menu.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery.isotope.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/owl.carousel.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery.colio.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/main.js')}}"></script>
<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery.flexslider-min.js')}}"></script>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>

<!--end::Tambahan Scripts -->
<script src="{{asset('/tema/kominfo_rsud_besuki/js/tes.js')}}"></script>
@stack('scripts')

</body>
</html>