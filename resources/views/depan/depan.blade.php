<!DOCTYPE html>

<html>



<head>

    @include('depan.bagian.meta')

    <title>KPU Kabupaten Situbondo</title>

    @include('depan.bagian.css_favicon')

</head>

<body>

<link itemprop="thumbnailUrl" href="{{asset('tema/kominfo_rsud_besuki/favicon.png')}}"> <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject"> <link itemprop="url" href="{{asset('tema/kominfo_rsud_besuki/favicon.png')}}"> </span>



<!-- Wrap -->

<div id="wrap"> 

  

  <!-- header -->

@include('depan.bagian.header')

  

  <!-- HOME MAIN SLIDER -->

@include('depan.bagian.slider')

  

  <!-- Content -->

  <div id="content"> 

    

    <!-- BLOG -->

    <section class="blog padding-top-70 padding-bottom-70">

      <div class="container"> 

        <!-- Heading -->

        <div class="heading text-center">

          <h4><a href="{{url('berita')}}"> BERITA TERBARU </a></h4>

        </div>

        <!-- Blog Row -->

        <div class="row"> 

          @foreach($posts1 as $berita1)

          <div class="col-md-4">

            <article> <img class="img-responsive" src="{{asset($berita1->gambar)}}" alt="{{$berita1->judul}}" > 

              <?php

              $tgl = date('d', strtotime($berita1->tgl_buat));

              $bln = date('M', strtotime($berita1->tgl_buat));

              ?>

              <div class="date"> {{$tgl}} <span>{{$bln}}</span> </div>

              

              <!-- Detail -->

              <div class="post-detail"> <a href="{{url('berita/'.$berita1->slug)}}" class="post-tittle">{{$berita1->judul}}</a>

                {!! Str::words($berita1->berita, 15,' ....</p>')  !!}

              </div>

            </article>

          </div>

          @endforeach

        </div>

        <div class="row"> 

          @foreach($posts2 as $berita2)

          <div class="col-md-4">

            <article> <img class="img-responsive" src="{{asset($berita2->gambar)}}" alt="{{$berita2->judul}}" > 

              <?php

              $tgl = date('d', strtotime($berita2->tgl_buat));

              $bln = date('M', strtotime($berita2->tgl_buat));

              ?>

              <div class="date"> {{$tgl}} <span>{{$bln}}</span> </div>

              

              <!-- Detail -->

              <div class="post-detail"> <a href="{{url('berita/'.$berita2->slug)}}" class="post-tittle">{{$berita2->judul}}</a>

                {!! Str::words($berita2->berita, 15,' ....</p>')  !!}

              </div>

            </article>

          </div>

          @endforeach

        </div>

      </div>

    </section>



    <!-- Testi -->

    <section class="padding-top-100 padding-bottom-100" style="background: url({{asset($almt->gambar_1)}}) center center fixed no-repeat; background-size: cover;" >

      <div class="container">

        <div class="testi">

          <p style="color: #FF9C00;"> {{$almt->nama}}</p>

            <div style="width:100%; height:100%">

	            <img style="margin: 0 auto; display: block;" src="{{asset('tema/LogoKPU.png')}}" width="200px" height="200px">

            </div>

        </div>

      </div>

    </section>


    <section class="blog light-gray-bg padding-top-70 padding-bottom-70">

      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-8">

            <div id="site-content">

              <div class="row">

                <div class="col-md-8 col-sm-6">

                  <div class="left-content">



                    <div class="section lifestyle-section">

                      <h1 class="section-title"><a class="btn btn-sm btn-info" href="{{url('/opini')}}"><i class="fa fa-arrow-circle-right"></i></a> Opini</h1>

                      

                      <div class="row">

                        <?php for ($i=0; $i < 2; $i++) { ?>
                        <div class="col-md-6">

                          <div class="post medium-post">

                            <div class="entry-header">

                              <div class="entry-thumbnail">

                                <img class="img-responsive" src="{{asset($opini[$i]->gambar)}}" alt="" />

                              </div>

                            </div>

                            <div class="post-content">                

                              <div class="entry-meta">

                                <ul class="list-inline">

                                  <li class="publish-date"><a target="_blank" href="{{url('opini/'.$opini[$i]->slug)}}"><i class="fa fa-clock-o"></i> {{$opini[$i]->tgl_buat}} </a></li>

                                </ul>

                              </div>

                              <h2 class="entry-title">

                                <a target="_blank" href="{{url('opini/'.$opini[$i]->slug)}}" style="text-transform:capitalize;">{{$opini[$i]->judul}}</a>

                              </h2>

                            </div>

                          </div><!--/post--> 

                        </div>
                        <?php } ?>

                      </div>
                      <div class="row">

                        <?php for ($i=2; $i < 4; $i++) { ?>                        

                        <div class="col-md-6">

                          <div class="post medium-post">

                            <div class="entry-header">

                              <div class="entry-thumbnail">

                                <img class="img-responsive" src="{{asset($opini[$i]->gambar)}}" alt="" />

                              </div>

                            </div>

                            <div class="post-content">                

                              <div class="entry-meta">

                                <ul class="list-inline">

                                  <li class="publish-date"><a target="_blank" href="{{url('opini/'.$opini[$i]->slug)}}"><i class="fa fa-clock-o"></i> {{$opini[$i]->tgl_buat}} </a></li>

                                </ul>

                              </div>

                              <h2 class="entry-title">

                                <a target="_blank" href="{{url('opini/'.$opini[$i]->slug)}}">{{$opini[$i]->judul}}</a>

                              </h2>

                            </div>

                          </div><!--/post--> 

                        </div>

                        <?php } ?>

                      </div>

                      <div class="row">

                        <?php for ($i=4; $i < 6; $i++) { ?>                        

                        <div class="col-md-6">

                          <div class="post medium-post">

                            <div class="entry-header">

                              <div class="entry-thumbnail">

                                <img class="img-responsive" src="{{asset($opini[$i]->gambar)}}" alt="" />

                              </div>

                            </div>

                            <div class="post-content">                

                              <div class="entry-meta">

                                <ul class="list-inline">

                                  <li class="publish-date"><a target="_blank" href="{{url('opini/'.$opini[$i]->slug)}}"><i class="fa fa-clock-o"></i> {{$opini[$i]->tgl_buat}} </a></li>

                                </ul>

                              </div>

                              <h2 class="entry-title">

                                <a target="_blank" href="{{url('opini/'.$opini[$i]->slug)}}">{{$opini[$i]->judul}}</a>

                              </h2>

                            </div>

                          </div><!--/post--> 

                        </div>

                        <?php } ?>

                      </div>

                      <div class="row">

                        <?php for ($i=6; $i < 8; $i++) { ?>                        

                        <div class="col-md-6">

                          <div class="post medium-post">

                            <div class="entry-header">

                              <div class="entry-thumbnail">

                                <img class="img-responsive" src="{{asset($opini[$i]->gambar)}}" alt="" />

                              </div>

                            </div>

                            <div class="post-content">                

                              <div class="entry-meta">

                                <ul class="list-inline">

                                  <li class="publish-date"><a target="_blank" href="{{url('opini/'.$opini[$i]->slug)}}"><i class="fa fa-clock-o"></i> {{$opini[$i]->tgl_buat}} </a></li>

                                </ul>

                              </div>

                              <h2 class="entry-title">

                                <a target="_blank" href="{{url('opini/'.$opini[$i]->slug)}}">{{$opini[$i]->judul}}</a>

                              </h2>

                            </div>

                          </div><!--/post--> 

                        </div>

                        <?php } ?>

                      </div>

                      

                      

                    </div><!--/.lifestyle -->



                

                    

                  </div><!--/.left-content-->

                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="middle-content">
                    <div class="section business-section">

                      <h1 class="section-title"><a class="btn btn-sm btn-info" href="{{url('/resensi')}}"><i class="fa fa-arrow-circle-right"></i></a> Resensi</h1>

                      @foreach($resensi as $resensis)

                      <div class="post medium-post">

                        <div class="entry-header">

                          <div class="entry-thumbnail">

                            <img class="img-responsive" src="{{asset($resensis->gambar)}}" alt="{{$resensis->judul}}" />

                          </div>

                        </div>

                        <div class="post-content">                

                          <div class="entry-meta">

                            <ul class="list-inline">

                              <li class="publish-date"><a target="_blank" href="{{url('resensi/'.$resensis->slug)}}"><i class="fa fa-clock-o"></i> {{$resensis->tgl_buat}} </a></li>

                            </ul>

                          </div>

                          <h2 class="entry-title">

                            <a target="_blank" href="{{url('resensi/'.$resensis->slug)}}">{{$resensis->judul}}</a>

                          </h2>

                        </div>

                      </div>

                      @endforeach

                    </div><!-- /.business-section -->
                  </div>
                </div>
              </div>

            </div><!--/#site-content-->

          </div>
          <div class="col-md-3 col-sm-4">
            <div class="section business-section">
                <h1 class="section-title"><a class="btn btn-sm btn-info" href="{{url('/informasi')}}"><i class="fa fa-arrow-circle-right"></i></a> Pengumuman</h1>
                @foreach($infos1 as $pengumuman)

                <div class="post medium-post">

                  <div class="entry-header">

                    <div class="entry-thumbnail">

                      <img class="img-responsive" src="{{asset($pengumuman->gambar)}}" alt="" />

                    </div>

                  </div>

                  <div class="post-content">                

                    <div class="entry-meta">

                      <ul class="list-inline">

                        <li class="publish-date"><a target="_blank" href="{{url('informasi/'.$pengumuman->slug)}}"><i class="fa fa-clock-o"></i> {{$pengumuman->tgl_buat}} </a></li>

                      </ul>

                    </div>

                    <h2 class="entry-title">

                      <a target="_blank" href="{{url('informasi/'.$pengumuman->slug)}}">{{$pengumuman->judul}}</a>

                    </h2>

                  </div>

                </div>

                @endforeach
              </div><!-- /.business-section -->
          </div>
        </div>
      </div>

    </section>

    <section class="features light-gray-bg padding-top-70 padding-bottom-70">

      <div class="container">
        <div class="col-md-9 col-sm-8">          
          <h1 class="section-title"><a class="btn btn-sm btn-info" href="#"><i class="fa fa-arrow-circle-right"></i></a> Galeri Foto</h1>
          <div class="gallery">
            @foreach($images as $galeri)
            <a data-fancybox="group" data-caption="{{$galeri->judul}}" href="{{asset('galeri/'.$galeri->gambar)}}">
                <img src="{{asset('galeri/thumbnail/'.$galeri->gambar)}}" >
            </a>
            @endforeach 
          </div>         
        </div>
        <div class="col-md-3 col-sm-4 card-deck">
          <h1 class="section-title"><a class="btn btn-sm btn-info" href="#"><i class="fa fa-arrow-circle-right"></i></a> Galeri Video</h1>
          @foreach($video as $videos)
          <div class="card">
            <a data-fancybox href="{{$videos->link}}">
              <img class="card-img-top img-fluid" src="{{$videos->thumbnail}}" width="240px" height="160px" />
            </a>
            <div class="card-body">
              <p class="card-text">{{$videos->judul}}</p>
            </div>
          </div>
          @endforeach 
        </div>
      </div>

    </section>

    <section class="features light-gray-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <h1 class="section-title"><a class="btn btn-sm btn-info" href="#"><i class="fa fa-arrow-circle-right"></i></a> Link Terkait</h1>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div id="Carousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                  <div class="row">
                    <div class="col-md-2 col-xs-4"><a href="https://kpu.go.id" target="_BLANK" class="thumbnail"><img src="{{asset('tema/logo-link-terkait_kpu-ri.jpg')}}" alt="Image" style="height:80px;"></a></div>
                    <div class="col-md-2 col-xs-4"><a href="https://kpujatim.go.id" target="_BLANK" class="thumbnail"><img src="{{asset('tema/logo-link-terkait_kpu-jatim.jpg')}}" alt="Image" style="height:80px;"></a></div>
                    <div class="col-md-2 col-xs-4"><a href="https://dkpp.go.id" target="_BLANK" class="thumbnail"><img src="{{asset('tema/logo-link-terkait_dkpp.jpg')}}" alt="Image" style="height:80px;"></a></div>
                    <div class="col-md-2 col-xs-4"><a href="https://mkri.id" target="_BLANK" class="thumbnail"><img src="{{asset('tema/logo-link-terkait_mk.jpg')}}" alt="Image" style="height:80px;"></a></div>
                    <div class="col-md-2 col-xs-4"><a href="http://perludem.org" target="_BLANK" class="thumbnail"><img src="{{asset('tema/logo-link-terkait_perludem.jpg')}}" alt="Image" style="height:80px;"></a></div>
                    <div class="col-md-2 col-xs-4"><a href="https://situbondokab.go.id" target="_BLANK" class="thumbnail"><img src="{{asset('tema/logo-link-terkait_situbondo.jpg')}}" alt="Image" style="height:80px;"></a></div>
                  </div><!--.row-->
                </div><!--.item-->                 

                </div>         
              </div>
          </div>
        </div>
      </div>
    </section>

    

    <!-- Counter -->

    <section class="counter padding-top-50">

      <div class="container"> 



      </div>

    </section>



  </div>

  

@include('depan.bagian.footer')

<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery-1.11.0.min.js')}}"></script> 

<script src="{{asset('/tema/kominfo_rsud_besuki/js/bootstrap.min.js')}}"></script> 

<script src="{{asset('/tema/kominfo_rsud_besuki/js/own-menu.js')}}"></script> 

<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery.isotope.min.js')}}"></script> 

<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery.flexslider-min.js')}}"></script> 

<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery.countTo.js')}}"></script> 

<script src="{{asset('/tema/kominfo_rsud_besuki/js/owl.carousel.min.js')}}"></script> 

<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery.cubeportfolio.min.js')}}"></script> 

<script src="{{asset('/tema/kominfo_rsud_besuki/js/jquery.colio.min.js')}}"></script> 

<script src="{{asset('/tema/kominfo_rsud_besuki/js/main.js')}}"></script>

<script src="{{asset('/tema/fancybox/dist/jquery.fancybox.min.js')}}"></script>

<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>

<script type="text/javascript">

  $(document).ready(function ($) {
      
      $('[data-fancybox"]').fancybox({ });

      $('#Carousel').carousel({
        interval: 3000
    })
  });
</script>

</body>

</html>

