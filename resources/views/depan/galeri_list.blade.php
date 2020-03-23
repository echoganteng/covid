<!DOCTYPE html>
<html>

<head>
    @include('depan.bagian.meta')
    <title>KPU Kabupaten Situbondo | GALERI</title>
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
        <li>Galeri</li>
      </ol>
    </div>
  </div>
</section>

<div id="content"> 
  
  <!-- BLOG -->
  <section class="blog blog-pages blog-single padding-top-70 padding-bottom-70">
    <div class="container">
      <div class="row">
        <div class="col-md-8"> 
        	<div class="gallery">
        	@foreach($list as $photo)		
			<a data-fancybox="group" data-caption="{{$photo->judul}}" href="{{asset('galeri/'.$photo->gambar)}}">
			    <img src="{{asset('galeri/thumbnail/'.$photo->gambar)}}" >
			</a>		
			@endforeach 
			</div>
        	<nav>{{ $list->links() }}</nav>
        </div>
        
        <!-- Side Bar -->
        <div class="col-md-4">
          <div class="side-bar"> 
            @include('depan.bagian.modul_kategori')
            @include('depan.bagian.modul_berita_terbaru')
            @include('depan.bagian.modul_info_terbaru')
          </div>

        </div>
      </div>
    </div>
  </section>
</div>
@include('depan.bagian.footer')
<!-- <script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery-1.11.0.min.js')}}"></script>  -->
<script src="{{asset('/tema/kominfo_rsud_besuki/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery-1.11.0.min.js')}}"></script>
<script src="{{asset('/tema/kominfo_rsud_besuki/js/own-menu.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery.isotope.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/owl.carousel.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery.colio.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_rsud_besuki/js/main.js')}}"></script>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<script src="{{asset('/tema/fancybox/dist/jquery.fancybox.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function ($) {
      
      $('[data-fancybox"]').fancybox({ });

  });
</script>
</body>
</html>