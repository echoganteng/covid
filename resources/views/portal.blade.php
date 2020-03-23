<!doctype html>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
    
    <title>KPU Kabupaten Situbondo</title>
    <!-- set your website meta description and keywords -->
    <meta name="description" content="Add your website description here">
    <meta name="keywords" content="Add your website keywords here">
    <!-- set your website favicon icon -->
    <link href="{{ asset('tema/portal/img/icokpu.ico')}}" rel="icon">
    
    <!-- Bootstrap Stylesheets -->
    <link rel="stylesheet" href="{{ asset('tema/portal/css/bootstrap.min.css')}}">
    <!-- Font Awesome Stylesheets -->
    <link rel="stylesheet" href="{{ asset('tema/portal/css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    
    <!-- Template Main Stylesheets -->
    <link rel="stylesheet" href="{{ asset('tema/portal/css/style-4.css')}}" type="text/css">
    
</head>

<body>
    <section id="Main" class="overlay">
        <div id="particles-js"></div>
        <div class="overlay-content">
            <div class="content">
                <div class="container"> 
                    <!-- coming-soon header text start -->
                    <div class="coming-soon-text">
                        <h4>.: Coming Soon :.</h4>
                        <h1 class="type-animate">
                            <a href="" class="typewrite" data-period="2000" data-type='[ "PEMILIHAN", "BUPATI DAN WAKIL BUPATI", "KABUPATEN SITUBONDO", "TAHUN 2020" ]'>
                            <span class="wrap"></span>
                            </a>
                        </h1>
                    </div>
                    <!-- coming-soon header text end -->
                    
                    <!-- countdown Box start -->
                    <div class="coming-soon-count">
                        <div id="defaultCountdown"></div>
                    </div>
                    <!-- countdown Box end -->
                    <!-- Buttons start -->
                    <div class="btn-holder">
                        <a href="{{url('/beranda')}}" class="btn btn-custom btn-transparent" target="_BLANK">Website Utama</a>
                        <a href="javascript:void(0)" class="btn btn-custom btn-transparent" onclick="openServicesStyle()">PPID</a>
                        <a href="javascript:void(0)" class="btn btn-custom btn-transparent" onclick="openSubscribeStyle()">Rumah Pintar</a>
                        <a href="https://jdih.kpu.go.id" class="btn btn-custom btn-transparent" target="_BLANK">JDIH</a>
                        <a href="https://lindungihakpilihmu.kpu.go.id" class="btn btn-custom btn-transparent" target="_BLANK">Cek Pemilih</a>
                        <a href="https://opendata.kpu.go.id" class="btn btn-custom btn-transparent" target="_BLANK">Open Data</a>
                        <a href="javascript:void(0)" class="btn btn-custom btn-transparent" onclick="openContactStyle()">Kontak</a>
                    </div>
                    <!-- Buttons end -->
                    
                </div><!-- End container -->
            </div>
        </div><!-- End of overlay-content -->
    </section><!-- End of #Main -->
    <!-- Start About Section -->
    <section id="About" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeAboutStyle()">&times;</a>
        <div class="overlay-content">
            <div class="content">
                <div class="container">
                    <div class="title-box">
                        <h2>Website Utama KPU Situbondo</h2>
                    </div>
                    
                    <!-- Start About box -->
                    <div class="about-box">
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="about-item">
                                            <h3>Selayang Pandang KPU Situbondo</h3>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit volupe tatem there are accusantium doloremquee dlaudan aoe tiume totam rem aperiam.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="about-wrap">
                                            <div class="icon-holder">
                                                <i class="fa fa-question"></i>
                                            </div><!-- end icon-holder -->
                                            <div class="text-box">
                                                <div class="title-box">
                                                    <h3>Why <strong>Light?</strong></h3>
                                                </div>
                                                <ul class="list-unstyled text-left">
                                                    <li>W3C Valid HTML Code</li>
                                                    <li>Responsive &amp; Mobile-Friendly</li>
                                                    <li>Latest Version of Bootstrap</li>
                                                    <li>Browser Compatibility</li>
                                                    <li>and Many More</li>
                                                </ul>
                                            </div><!-- end text-box -->
                                        </div><!-- end about-wrap -->
                                    </div><!-- end col -->
                                    <div class="col-md-4">
                                        <div class="about-wrap">
                                            <div class="icon-holder">
                                                <i class="fa fa-book"></i>
                                            </div><!-- end icon-holder -->
                                            <div class="text-box">
                                                <div class="title-box">
                                                    <h3>Our <strong>Story</strong></h3>
                                                </div>
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit volup tatem therear accu santium doloremque dlaudan tiumee totam rem aperiam eaque ipsa.</p>
                                            </div><!-- end text-box -->
                                        </div><!-- end about-wrap -->
                                    </div><!-- end col -->
                                    <div class="col-md-4">
                                        <div class="about-wrap">
                                            <div class="icon-holder">
                                                <i class="fa fa-bullseye"></i>
                                            </div><!-- end icon-holder -->
                                            <div class="text-box">
                                                <div class="title-box">
                                                    <h3>Our <strong>Goal</strong></h3>
                                                </div>
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit volup tatem therear accu santium doloremque dlaudan tiumee totam rem aperiam eaque ipsa.</p>
                                            </div><!-- end text-box -->
                                        </div><!-- end about-wrap -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end col-sm-12 -->
                            
                            
                            
                            <div class="col-sm-6">
                                <div class="about-item">
                                    <h3>100% valid html code</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit volupe tatem there are accusantium doloremquee dlaudan aoe tiume totam rem aperiam.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-item">
                                    <h3>100% Responsive Design</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit volupe tatem there are accusantium doloremquee dlaudan aoe tiume totam rem aperiam.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-item">
                                    <h3>Eye catching design</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit volupe tatem there are accusantium doloremquee dlaudan aoe tiume totam rem aperiam.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-item">
                                    <h3>Smooth transitions</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit volupe tatem there are accusantium doloremquee dlaudan aoe tiume totam rem aperiam.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-item">
                                    <h3>PHP working contact form</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit volupe tatem there are accusantium doloremquee dlaudan aoe tiume totam rem aperiam.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-item">
                                    <h3>Mailchimp integrated Subscribe Form</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit volupe tatem there are accusantium doloremquee dlaudan aoe tiume totam rem aperiam.</p>
                                </div>
                            </div>
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{url('/beranda')}}" class="btn btn-custom btn-transparent" target="_BLANK">Website Utama klik disini</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end About box -->
                </div><!-- container -->
            </div><!-- content -->
        </div><!-- End of overlay-content -->
    </section>
    <!-- End of #About -->
    <!-- Start Services Section -->
    <section id="Services" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeServicesStyle()">&times;</a>
        <div class="overlay-content">
            <div class="content">
                <div class="container">
                    <div class="title-box">
                        <h2>PPID KPU Situbondo</h2>
                    </div>
                    <!-- Start About box -->
                    <div class="about-box">
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="about-item">
                                            <h3>Selamat Datang di Layanan e-PPID KPU Kabupaten Situbondo</h3>
                                            <p style="text-align: justify;">e-PPID KPU Kabupaten Situbondo merupakan sarana pelayanan online bagi publik untuk mengajukan permohonan informasi, mengajukan keberatan dan mengetahui status permohon informasi.</p>
                                        </div>
                                    </div>
                                </div>
                            
                            </div><!-- end col-sm-12 -->
                            
                            
                        </div><!-- end row -->
                        
                    </div>
                    <!-- end About box -->
                    <!-- Start Services box -->
                    <div class="Services-box">
                        <div class="row">
                            <div class="col-sm-4 col-xs-6">
                                <div class="service-item">
                                    <i class="fa fa-desktop fa-3x"></i>
                                    <h4><a href="https://situbondokabppid.kpu.go.id" target="_BLANK">Website PPID</a></h4>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="service-item">
                                    <i class="fa fa-paint-brush fa-3x"></i>
                                    <h4><a href="https://situbondokabppid.kpu.go.id/profil_ppid" target="_BLANK">Profil Singkat PPID</a></h4>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="service-item">
                                    <i class="fa fa-bolt fa-3x"></i>
                                    <h4><a href="https://situbondokabppid.kpu.go.id/maklumat" target="_BLANK">Maklumat Informasi</a></h4>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="service-item">
                                    <i class="fa fa-shopping-cart fa-3x"></i>
                                    <h4><a href="https://situbondokabppid.kpu.go.id/hak-pemohon-informasi" target="_BLANK">Hak Pemohon Informasi</a></h4>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="service-item">
                                    <i class="fa fa-wordpress fa-3x"></i>
                                    <h4><a href="https://situbondokabppid.kpu.go.id/regulasi" target="_BLANK">Regulasi</a></h4>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="service-item">
                                    <i class="fa fa-code fa-3x"></i>
                                    <h4><a href="https://situbondokabppid.kpu.go.id/laporan-layanan-informasi" target="_BLANK">Laporan Layanan Informasi</a></h4>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div>
                    <!-- end Services box -->
                </div><!-- container -->
            </div><!-- content -->
        </div><!-- End of overlay-content -->
    </section>
    <!-- End of #Services -->
    <!-- Start Subscribe Section -->
    <section id="Subscribe" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeSubscribeStyle()()">&times;</a>
        <div class="overlay-content">
            <div class="content">
                <div class="container">
                    <div class="title-box">
                        <h2>Rumah Pintar Pemilu (RPP)</h2>
                    </div>
                    
                    <!-- Start About box -->
                    <div class="about-box">
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="about-item">
                                            <h3>Selayang Pandang RPP</h3>
                                            <p style="text-align: justify;">Rumah Pintar Pemilu adalah sebuah konsep pendidikan pemilih yang dilakukan melalui pemanfaatan ruang dari suatu bangunan atau bangunan khusus untuk melakukan seluruh program-aktifitas project edukasi masyarakat. Rumah pintar pemilu diharapkan dapat membentuk generasi bangsa yang mampu menerjemahkan nilai demokrasi sesuai khittahnya. Generasi inilah yang selain dapat menjadi pemilih cerdas, juga dapat menjadi pemimpin yang berkualitas dan melahirkankebijakanyangmemihakpadatujuankesejahteraan masyarakat.</p>
                                        </div>
                                    </div>
                                </div>
                            
                            </div><!-- end col-sm-12 -->
                            
                            
                        </div><!-- end row -->
                        
                    </div>
                    <!-- end About box -->
                    <!-- Start Services box -->
                    <div class="Services-box">
                        <div class="row">
                            <div class="col-sm-4 col-xs-6">
                                <div class="service-item">
                                    <i class="fa fa-desktop fa-3x"></i>
                                    <h3><a href="javascript:void(0)">Website RPP</a></h3>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="service-item">
                                    <i class="fa fa-paint-brush fa-3x"></i>
                                    <h3><a href="javascript:void(0)">Profil RPP</a></h3>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="service-item">
                                    <i class="fa fa-bolt fa-3x"></i>
                                    <h3><a href="javascript:void(0)">Data Pemilu</a></h3>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="service-item">
                                    <i class="fa fa-shopping-cart fa-3x"></i>
                                    <h3><a href="javascript:void(0)">Galeri</a></h3>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="service-item">
                                    <i class="fa fa-wordpress fa-3x"></i>
                                    <h3><a href="javascript:void(0)">Materi</a></h3>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="service-item">
                                    <i class="fa fa-code fa-3x"></i>
                                    <h3><a href="javascript:void(0)">Download</a></h3>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div>
                    <!-- end Services box -->
                </div><!-- container -->
            </div><!-- content -->
        </div><!-- End of overlay-content -->
    </section>
    <!-- End of #Subscribe -->
    <!-- Start Contact Section -->
    <section id="myContact" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeContactStyle()">&times;</a>
        <div class="overlay-content">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="title-box">
                                <h2>Info Kontak</h2>
                            </div>
                            <div class="contact-details">
                                <p>Jika Anda memiliki pertanyaan, tanggapan atau kritik dan saran yang membangun, kami sangat ingin mendengar dari Anda. Suara anda perubahan kami. Silahkan hubungi kami setiap saat.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-fw fa-map-marker"></i>Jl. Cendrawasih No.32 Dawuhan, Situbondo, 68311</li>
                                    <li><i class="fa fa-fw fa-phone"></i><a href="#">(0338) 671246</a></li>
                                    <li><i class="fa fa-fw fa-envelope-o"></i><a href="mailto:kpusitubondo@yahoo.com">kpusitubondo@yahoo.com</a></li>
                                    <li><i class="fa fa-fw fa-globe"></i><a href="http://kab-situbondo.kpu.go.id" target="_BLANK">http://kab-situbondo.kpu.go.id</a></li>
                                </ul>
                            </div>
                        </div><!-- End of col-sm-6 -->
                        
                        <div class="col-sm-6">
                            <div class="title-box">
                                <h2>Kritik & Saran</h2>
                            </div>
                            <!-- Start contact form -->
                            <form id="contactForm" name="contactform" data-toggle="validator" class="contact-form">
                                <div id="msgSubmit" class="hidden"></div>
                                <div class="form-group">
                                    <div class="help-block with-errors hidden"></div>
                                    <input name="fname" id="fname" placeholder="Isikan Nama Lengkap*" class="form-control" type="text" required data-error="Isikan Nama Lengkap"> 
                                    <div class="input-group-icon"><i class="fa fa-user"></i></div>
                                </div>
                                <div class="form-group">
                                    <div class="help-block with-errors hidden"></div>
                                    <input name="email" id="email" placeholder="Isikan Email yang valid*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" type="email" required data-error="Isikan Email yang valid"> 
                                    <div class="input-group-icon"><i class="fa fa-envelope"></i></div>
                                </div>
                                <div class="form-group">
                                    <div class="help-block with-errors hidden"></div>
                                    <input name="phone" id="phone" placeholder="Isikan Nomer Telp / HP*" pattern="^\+?\d{6,16}" class="form-control" type="text" required data-error="Isikan Nomer Telp / HP">
                                    <div class="input-group-icon"><i class="fa fa-phone"></i></div> 
                                </div>
                                <div class="form-group">
                                    <div class="help-block with-errors hidden"></div>
                                    <input name="kecamatan" id="kecamatan" placeholder="Isikan Nama Kecamatan*" pattern="^\+?\d{6,16}" class="form-control" type="text" required data-error="Isikan Nama Kecamatan">
                                    <div class="input-group-icon"><i class="fa fa-university"></i></div> 
                                </div>
                                <div class="form-group">
                                    <div class="help-block with-errors hidden"></div>
                                    <textarea rows="3" name="message" id="message" placeholder="Isikan Pesan Anda di sini*" class="form-control" required data-error="Isikan Pesan Anda di sini"></textarea>
                                    <div class="input-group-icon"><i class="fa fa-pencil"></i></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" id="submit" class="btn btn-custom btn-transparent">Kirim</button>                              
                                    <span class="sub-text">* Wajib di isi</span>
                                </div>
                            </form>
                            <!-- end contact form -->
                        </div><!-- End of col-sm-6 -->
                    </div><!-- End row -->
                </div><!-- container -->
            </div><!-- content -->
        </div><!-- End of overlay-content -->
    </section>
    <!-- End of #myContact -->

    <!-- jQuery Library -->
    <script src="{{ asset('tema/portal/js/jquery-3.4.1.min.js')}}"></script>
    <!-- PARTICLES JS -->
    <script src="{{ asset('tema/portal/js/particles.min.js')}}"></script>
    <script src="{{ asset('tema/portal/js/app.js')}}"></script>
    <!-- countdown Js -->   
    <script src="{{ asset('tema/portal/js/jquery.plugin.min.js')}}"></script>
    <script src="{{ asset('tema/portal/js/jquery.countdown.js')}}"></script>
    <script src="{{ asset('tema/portal/js/jquery.countdown-id.js')}}"></script>
    <!-- ajaxchimp Js -->
    <script src="{{ asset('tema/portal/js/jquery.ajaxchimp.min.js')}}"></script>
    <!-- Form validator Js -->
    <script src="{{ asset('tema/portal/js/validator.min.js')}}"></script>
    <!-- Template main Js -->
    <script src="{{ asset('tema/portal/js/main.js')}}"></script>
</body>
</html>