@extends('depan.bagian.page')
@section('content')
<!-- DICECTORY LISTING GOOGLE MAP AREA START -->
<div class="directory-listing-google-map-area">
    <div id="gmap"></div>
</div>
<!-- DICECTORY LISTING GOOGLE MAP AREA START -->

<!-- Start page content -->
<section id="page-content" class="page-wrapper">

    <!-- ABOUT SHELTEK AREA START -->
    <div class="about-sheltek-area ptb-115">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="section-title mb-30">
                        <h3>SATGAS</h3>
                        <h2>COVID-19</h2>
                    </div>
                    <div class="about-sheltek-info">
                        <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for elit, sed do
                            eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo.</p>
                        <p>Lorem is a dummy text do eiusmod tempor dolor sit amet, onsectetur adip iscing elit,
                            sed do eiusmod tempor incididunt ut labore et lorna aliqua Ut enim onsectetur </p>
                        <p>Lorem is a dummy text do eiusmod tempor dolor sit amet, onsectetur adip iscing elit,
                            sed do eiusmod tempor incididunt ut labore et lorna aliqua Ut enim onsectetur </p>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="about-image">
                        <a href="about.html"><img src="images/about/1.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT SHELTEK AREA END -->

    <!-- SERVICES AREA START -->
    <div class="services-area pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-2 text-center">
                        <h2>KENALI GEJALANYA</h2>
                        <p>Jangan Panik, Kenali gejalanya dan deteksi virus corona sejak dini. Hanya perlu mengatur jarak, hindari bersalaman dan bila sakit memakai masker, dan jaga kebersihan</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-carousel">
                        <!-- service-item -->
                        <div class="col">
                            <div class="service-item">
                                <div class="service-item-image">
                                    <img src="{{asset('/tema/covid/demam.png')}}" alt="">
                                </div>
                                <div class="service-item-info">
                                    <h5>Demam</h5>
                                    <p>Demam menunjukkan gejala awal corona, demam biasanya mencapai suhu 38 derajat celcius keatas</p>
                                </div>
                            </div>
                        </div>
                        <!-- service-item -->
                        <div class="col">
                            <div class="service-item">
                                <div class="service-item-image">
                                    <img src="{{asset('/tema/covid/batuk.png')}}" alt="">
                                </div>
                                <div class="service-item-info">
                                    <h5>Batuk Kering</h5>
                                    <p>Batuk Kering tidak beriak dan berulang ulang merupakan tanda infeksi aktif di paru-paru, yang mungkin bisa disebabkan karena COVID-19</p>
                                </div>
                            </div>
                        </div>
                        <!-- service-item -->
                        <div class="col">
                            <div class="service-item">
                                <div class="service-item-image">
                                    <img src="{{asset('/tema/covid/sakittenggorokan.png')}}" alt="">
                                </div>
                                <div class="service-item-info">
                                    <h5>Sakit Tenggorokan</h5>
                                    <p>Infeksi COVID-19 akan melalui jalur pernafasan sehingga dapat mengakibatkan radang pada tenggorokan dan rasa nyeri</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-carousel">
                        <!-- service-item -->
                        <div class="col">
                            <div class="service-item">
                                <div class="service-item-image">
                                    <img src="{{asset('/tema/covid/pusing.png')}}" alt="">
                                </div>
                                <div class="service-item-info">
                                    <h5>Sakit Kepala</h5>
                                    <p>Dengan adanya demam yang tinggi, COVID-19 seringkali diikuti dengan gejala sakit kepala</p>
                                </div>
                            </div>
                        </div>
                        <!-- service-item -->
                        <div class="col">
                            <div class="service-item">
                                <div class="service-item-image">
                                    <img src="{{asset('/tema/covid/lelah.png')}}" alt="">
                                </div>
                                <div class="service-item-info">
                                    <h5>Lemas</h5>
                                    <p>Infeksi COVID-19 yang telah menyebar ke seluruh tubuh akan menghabiskan energi yang banyak sehingga seringkali dapat mengakibatkan lemas</p>
                                </div>
                            </div>
                        </div>
                        <!-- service-item -->
                        <div class="col">
                            <div class="service-item">
                                <div class="service-item-image">
                                    <img src="{{asset('/tema/covid/batuk.png')}}" alt="">
                                </div>
                                <div class="service-item-info">
                                    <h5>Sesak Nafas</h5>
                                    <p>Apabila COVID-19 berkembang dengan cepat dan besar di paru-paru, fungsi paru akan menurun sehingga terjadi sesak nafas</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SERVICES AREA END -->

    <!-- BOOKING AREA START -->
    <div class="booking-area bg-1 call-to-bg plr-140 pt-75">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="section-title text-white">
                        <h3>BOOK YOUR</h3>
                        <h2 class="h1">HOME HERE</h2>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="booking-conternt clearfix">
                        <div class="book-house text-white">
                            <h2>BOOK YO`UR APPARTMENT OR HOUSE </h2>
                            <h2 class="h5">CALL US ON : +0123 456 789 </h2>
                        </div>
                        <div class="booking-imgae">
                            <img src="images/others/booking.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BOOKING AREA END -->

    <!-- FEATURED FLAT AREA START -->
    <div class="featured-flat-area pt-115 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-2 text-center">
                        <h2>Kamus COVID-19</h2>
                        <p>Terdapat kata - kata khusus dalam penyebutan pasien terjangkit wabah atau diduga terkena wabah yaitu ODP, PDP, dan Confirm</p>
                    </div>
                </div>
            </div>
            <div class="featured-flat">
                <div class="row">
                    <!-- flat-item -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="flat-item">
                            <div class="flat-item-image">
                                <span class="for-sale">For Sale</span>
                                <a href="properties-details.html"><img src="images/flat/1.jpg" alt=""></a>
                                <div class="flat-link">
                                    <a href="properties-details.html">More Details</a>
                                </div>
                                <ul class="flat-desc">
                                    <li>
                                        <img src="images/icons/4.png" alt="">
                                        <span>450 sqft</span>
                                    </li>
                                    <li>
                                        <img src="images/icons/5.png" alt="">
                                        <span>5</span>
                                    </li>
                                    <li>
                                        <img src="images/icons/6.png" alt="">
                                        <span>3</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="flat-item-info">
                                <div class="flat-title-price">
                                    <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                    <span class="price">$52,350</span>
                                </div>
                                <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                            </div>
                        </div>
                    </div>
                    <!-- flat-item -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="flat-item">
                            <div class="flat-item-image">
                                <a href="properties-details.html"><img src="images/flat/2.jpg" alt=""></a>
                                <div class="flat-link">
                                    <a href="properties-details.html">More Details</a>
                                </div>
                                <ul class="flat-desc">
                                    <li>
                                        <img src="images/icons/4.png" alt="">
                                        <span>450 sqft</span>
                                    </li>
                                    <li>
                                        <img src="images/icons/5.png" alt="">
                                        <span>5</span>
                                    </li>
                                    <li>
                                        <img src="images/icons/6.png" alt="">
                                        <span>3</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="flat-item-info">
                                <div class="flat-title-price">
                                    <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                    <span class="price">$52,350</span>
                                </div>
                                <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                            </div>
                        </div>
                    </div>
                    <!-- flat-item -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="flat-item">
                            <div class="flat-item-image">
                                <span class="for-sale rent">For rent</span>
                                <a href="properties-details.html"><img src="images/flat/3.jpg" alt=""></a>
                                <div class="flat-link">
                                    <a href="properties-details.html">More Details</a>
                                </div>
                                <ul class="flat-desc">
                                    <li>
                                        <img src="images/icons/4.png" alt="">
                                        <span>450 sqft</span>
                                    </li>
                                    <li>
                                        <img src="images/icons/5.png" alt="">
                                        <span>5</span>
                                    </li>
                                    <li>
                                        <img src="images/icons/6.png" alt="">
                                        <span>3</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="flat-item-info">
                                <div class="flat-title-price">
                                    <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                    <span class="price">$52,350</span>
                                </div>
                                <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURED FLAT AREA END -->

    <!-- FEATURES AREA START -->
    <div class="features-area fix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 offset-lg-5">
                    <div class="features-info bg-gray">
                        <div class="section-title mb-30">
                            <h3>HERE IS</h3>
                            <h2 class="h1">AWESOME FEATUES</h2>
                        </div>
                        <div class="features-desc">
                            <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for elit, sed do
                                eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do smod tempor
                                incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation
                                oris nisi</p>
                        </div>
                        <div class="features-include">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-4">
                                    <div class="features-include-list">
                                        <h6><img src="images/icons/7.png" alt="">Fully Furnished</h6>
                                        <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4">
                                    <div class="features-include-list">
                                        <h6><img src="images/icons/7.png" alt="">Royal Touch Paint</h6>
                                        <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4">
                                    <div class="features-include-list">
                                        <h6><img src="images/icons/7.png" alt="">Latest Interior Design</h6>
                                        <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4">
                                    <div class="features-include-list">
                                        <h6><img src="images/icons/7.png" alt="">Non Stop Security</h6>
                                        <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4">
                                    <div class="features-include-list">
                                        <h6><img src="images/icons/7.png" alt="">Living Inside a Nature</h6>
                                        <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4">
                                    <div class="features-include-list">
                                        <h6><img src="images/icons/7.png" alt="">Luxurious Fittings</h6>
                                        <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURES AREA END -->

    <!-- OUR AGENTS AREA START -->
    <div class="our-agents-area pt-115 pb-55">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-2 text-center">
                        <h2>RUJUKAN</h2>
                        <p>Sheltek is the best theme for elit, sed do eiusmod tempor dolor sit amet, conse
                            ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd
                            minim veniam, quis nostrud</p>
                    </div>
                </div>
            </div>
            <div class="our-agents">
                <div class="row">
                    <div class="col-12">
                        <div class="agents-carousel">
                            <!-- single-agent -->
                            <div class="col">
                                <div class="single-agent">
                                    <div class="agent-image">
                                        <img src="images/agents/1.jpg" alt="">
                                    </div>
                                    <div class="agent-info">
                                        <div class="agent-name">
                                            <h5><a href="agent-details.html">Shah M Nawaz</a></h5>
                                            <p>Real Estate Agent</p>
                                        </div>
                                    </div>
                                    <div class="agent-info-hover">
                                        <div class="agent-name">
                                            <h5><a href="agent-details.html">Shah M Nawaz</a></h5>
                                            <p>Real Estate Agent</p>
                                        </div>
                                        <ul class="agent-address">
                                            <li><img src="images/icons/phone-2.png" alt="">+1245 785 659 </li>
                                            <li><img src="images/icons/mail-close.png" alt="">eva@gmail.com
                                            </li>
                                        </ul>
                                        <ul class="social-media">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-agent -->
                            <div class="col">
                                <div class="single-agent">
                                    <div class="agent-image">
                                        <img src="images/agents/2.jpg" alt="">
                                    </div>
                                    <div class="agent-info">
                                        <div class="agent-name">
                                            <h5><a href="agent-details.html">Eva Sharlin</a></h5>
                                            <p>Real Estate Broker</p>
                                        </div>
                                    </div>
                                    <div class="agent-info-hover">
                                        <div class="agent-name">
                                            <h5><a href="agent-details.html">Eva Sharlin</a></h5>
                                            <p>Real Estate Broker</p>
                                        </div>
                                        <ul class="agent-address">
                                            <li><img src="images/icons/phone-2.png" alt="">+1245 785 659 </li>
                                            <li><img src="images/icons/mail-close.png" alt="">eva@gmail.com
                                            </li>
                                        </ul>
                                        <ul class="social-media">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-agent -->
                            <div class="col">
                                <div class="single-agent">
                                    <div class="agent-image">
                                        <img src="images/agents/3.jpg" alt="">
                                    </div>
                                    <div class="agent-info">
                                        <div class="agent-name">
                                            <h5><a href="agent-details.html">Momen Bhuyan</a></h5>
                                            <p>Real Estate Broker</p>
                                        </div>
                                    </div>
                                    <div class="agent-info-hover">
                                        <div class="agent-name">
                                            <h5><a href="agent-details.html">Momen Bhuyan</a></h5>
                                            <p>Real Estate Broker</p>
                                        </div>
                                        <ul class="agent-address">
                                            <li><img src="images/icons/phone-2.png" alt="">+1245 785 659 </li>
                                            <li><img src="images/icons/mail-close.png" alt="">eva@gmail.com
                                            </li>
                                        </ul>
                                        <ul class="social-media">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-agent -->
                            <div class="col">
                                <div class="single-agent">
                                    <div class="agent-image">
                                        <img src="images/agents/4.jpg" alt="">
                                    </div>
                                    <div class="agent-info">
                                        <div class="agent-name">
                                            <h5><a href="agent-details.html">Sarmin Tabassum</a></h5>
                                            <p>Real Estate Agent</p>
                                        </div>
                                    </div>
                                    <div class="agent-info-hover">
                                        <div class="agent-name">
                                            <h5><a href="agent-details.html">Sarmin Tabassum</a></h5>
                                            <p>Real Estate Agent</p>
                                        </div>
                                        <ul class="agent-address">
                                            <li><img src="images/icons/phone-2.png" alt="">+1245 785 659 </li>
                                            <li><img src="images/icons/mail-close.png" alt="">eva@gmail.com
                                            </li>
                                        </ul>
                                        <ul class="social-media">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-agent -->
                            <div class="col">
                                <div class="single-agent">
                                    <div class="agent-image">
                                        <img src="images/agents/3.jpg" alt="">
                                    </div>
                                    <div class="agent-info">
                                        <div class="agent-name">
                                            <h5><a href="agent-details.html">Momen Bhuyan</a></h5>
                                            <p>Real Estate Broker</p>
                                        </div>
                                    </div>
                                    <div class="agent-info-hover">
                                        <div class="agent-name">
                                            <h5><a href="agent-details.html">Momen Bhuyan</a></h5>
                                            <p>Real Estate Broker</p>
                                        </div>
                                        <ul class="agent-address">
                                            <li><img src="images/icons/phone-2.png" alt="">+1245 785 659 </li>
                                            <li><img src="images/icons/mail-close.png" alt="">eva@gmail.com
                                            </li>
                                        </ul>
                                        <ul class="social-media">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- OUR AGENTS AREA END -->

    <!-- TESTIMONIAL AREA START -->
    <div class="testimonial-area pb-115">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial">
                        <div class="row">
                            <div class="col-lg-8 col-md-9">
                                <div class="section-title mb-30">
                                    <h3>SOME OF OUR</h3>
                                    <h2 class="h1">HAPPY CLIENTS</h2>
                                </div>
                                <div class="testimonial-carousel dots-right-btm">
                                    <!-- testimonial-item -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-brief">
                                            <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for
                                                elit, sed do eiusmod tempor dolor sit amet, conse ctetur
                                                adipiscing elit, ed do eiusmod tempor incididunt ut labore et
                                                lorna aliquatd minim veniam, quis nostrud exercitation oris nisi
                                                ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd
                                                minim veniam, quis nostrud exercitation oris nisi ut aliquip ex
                                                ea commodo equat. Duis aute irure dolo uis nostrud exercitation
                                            </p>
                                        </div>
                                        <h6>Zasica Luci, <span>CEO</span></h6>
                                    </div>
                                    <!-- testimonial-item -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-brief">
                                            <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for
                                                elit, sed do eiusmod tempor dolor sit amet, conse ctetur
                                                adipiscing elit, ed do eiusmod tempor incididunt ut labore et
                                                lorna aliquatd minim veniam, quis nostrud exercitation oris nisi
                                                ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd
                                                minim veniam, quis nostrud exercitation oris nisi ut aliquip ex
                                                ea commodo equat. Duis aute irure dolo uis nostrud exercitation
                                            </p>
                                        </div>
                                        <h6>Zasica Luci, <span>CEO</span></h6>
                                    </div>
                                    <!-- testimonial-item -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-brief">
                                            <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for
                                                elit, sed do eiusmod tempor dolor sit amet, conse ctetur
                                                adipiscing elit, ed do eiusmod tempor incididunt ut labore et
                                                lorna aliquatd minim veniam, quis nostrud exercitation oris nisi
                                                ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd
                                                minim veniam, quis nostrud exercitation oris nisi ut aliquip ex
                                                ea commodo equat. Duis aute irure dolo uis nostrud exercitation
                                            </p>
                                        </div>
                                        <h6>Zasica Luci, <span>CEO</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="testimonial-image">
                                    <img src="images/others/testimonial.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIAL AREA END -->

    <!-- BLOG AREA START -->
    <div class="blog-area pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-2 text-center">
                        <h2>Berita</h2>
                        <p>Sheltek is the best theme for elit, sed do eiusmod tempor dolor sit amet, conse
                            ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd
                            minim veniam, quis nostrud</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-carousel">
                        <!-- blog-item -->
                        <div class="col">
                            <article class="blog-item bg-gray">
                                <div class="blog-image">
                                    <a href="single-blog.html"><img src="images/blog/1.jpg" alt=""></a>
                                </div>
                                <div class="blog-info">
                                    <div class="post-title-time">
                                        <h5><a href="single-blog.html">Maridland de Villa</a></h5>
                                        <p>July 30, 2017 / 10 am</p>
                                    </div>
                                    <p>Lorem must explain to you how all this mistaolt denouncing pleasure and
                                        praising pain wasnad I will give you a complete pain was praising</p>
                                    <a class="read-more" href="single-blog.html">Read more</a>
                                </div>
                            </article>
                        </div>
                        <!-- blog-item -->
                        <div class="col">
                            <article class="blog-item bg-gray">
                                <div class="blog-image">
                                    <a href="single-blog.html"><img src="images/blog/2.jpg" alt=""></a>
                                </div>
                                <div class="blog-info">
                                    <div class="post-title-time">
                                        <h5><a href="single-blog.html">Latest Design House</a></h5>
                                        <p>July 30, 2017 / 10 am</p>
                                    </div>
                                    <p>Lorem must explain to you how all this mistaolt denouncing pleasure and
                                        praising pain wasnad I will give you a complete pain was praising</p>
                                    <a class="read-more" href="single-blog.html">Read more</a>
                                </div>
                            </article>
                        </div>
                        <!-- blog-item -->
                        <div class="col">
                            <article class="blog-item bg-gray">
                                <div class="blog-image">
                                    <a href="single-blog.html"><img src="images/blog/3.jpg" alt=""></a>
                                </div>
                                <div class="blog-info">
                                    <div class="post-title-time">
                                        <h5><a href="single-blog.html">Duplex Villa House</a></h5>
                                        <p>July 30, 2017 / 10 am</p>
                                    </div>
                                    <p>Lorem must explain to you how all this mistaolt denouncing pleasure and
                                        praising pain wasnad I will give you a complete pain was praising</p>
                                    <a class="read-more" href="single-blog.html">Read more</a>
                                </div>
                            </article>
                        </div>
                        <!-- blog-item -->
                        <div class="col">
                            <article class="blog-item bg-gray">
                                <div class="blog-image">
                                    <a href="single-blog.html"><img src="images/blog/2.jpg" alt=""></a>
                                </div>
                                <div class="blog-info">
                                    <div class="post-title-time">
                                        <h5><a href="single-blog.html">Latest Design House</a></h5>
                                        <p>July 30, 2017 / 10 am</p>
                                    </div>
                                    <p>Lorem must explain to you how all this mistaolt denouncing pleasure and
                                        praising pain wasnad I will give you a complete pain was praising</p>
                                    <a class="read-more" href="single-blog.html">Read more</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BLOG AREA END -->

    <!-- BRAND AREA START -->
    <div class="brand-area pb-115">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand-carousel">
                        <!-- brand-item -->
                        <div class="col">
                            <div class="brand-item">
                                <img src="images/brand/1.png" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col">
                            <div class="brand-item">
                                <img src="images/brand/2.png" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col">
                            <div class="brand-item">
                                <img src="images/brand/3.png" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col">
                            <div class="brand-item">
                                <img src="images/brand/4.png" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col">
                            <div class="brand-item">
                                <img src="images/brand/5.png" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col">
                            <div class="brand-item">
                                <img src="images/brand/1.png" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col">
                            <div class="brand-item">
                                <img src="images/brand/4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND AREA END -->

    <!-- SUBSCRIBE AREA START -->
    <div class="subscribe-area bg-blue call-to-bg plr-140 ptb-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="section-title text-white">
                        <h3>SUBSCRIBE</h3>
                        <h2 class="h1">NEWSLETTER</h2>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="subscribe">
                        <form action="#">
                            <input type="text" name="subscribe" placeholder="Enter yur email here...">
                            <button type="submit" value="send">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SUBSCRIBE AREA END -->
</section>
<!-- End page content -->
@endsection

@push('script')
    <script>
        function initialize() {
            geocoder = new google.maps.Geocoder();
            var mapOptions = {
                zoom: 11,
                scrollwheel: false,
                center: {lat: -7.7050532, lng: 113.9952789},
            };
            var map = new google.maps.Map(document.getElementById('gmap'),
                mapOptions);
            //even listner ketika peta diklik
            google.maps.event.addListener(map, 'click', function (event) {
                taruhMarker(this, event.latLng);
                geocoder.geocode({
                    'latLng': event.latLng
                }, function (results, status) {
                    alert('Geocoder failed due to: ' + status);
                });
            });
            @foreach($data as $values)
                x{{$values->kd_kec}} = "{{$values->latitude}}";
            y{{$values->kd_kec}} = "{{$values->longitude}}";
            var nama{{$values->kd_kec}} = "{{$values->NAMA_KEC}}";
            var odp{{$values->kd_kec}} = "{{$values->jml_odp}}";
            var pdp{{$values->kd_kec}} = "{{$values->jml_pdp}}";
            var positif{{$values->kd_kec}} = "{{$values->jml_positif}}";
            var keterangan = '<Strong>' + nama{{$values->kd_kec}}+ '</Strong><br><Strong style="color:#17a2b8">'
                + 'ODP :' + odp{{$values->kd_kec}}+ '</Strong><br><Strong style="color:#ffc107">'
                + 'PDP :' + pdp{{$values->kd_kec}}+ '</Strong><br><Strong style="color:#dc3545">'
                + 'Positif :' + positif{{$values->kd_kec}}+ '</Strong>'
            var icon = {
                url: "{{asset('tema/frontend/images/icons/mark place-01.png')}}", // url
                scaledSize: new google.maps.Size(28, 40), // scaled size
                origin: new google.maps.Point(0, 0), // origin
                anchor: new google.maps.Point(0, 0) // anchor
            };
            var loc = new google.maps.Marker({
                position: new google.maps.LatLng(x{{$values->kd_kec}}, y{{$values->kd_kec}}),
                map: map,
                icon: icon,
                html: keterangan
            });
            var infowindow = new google.maps.InfoWindow();
            google.maps.event.addListener(loc, 'click', function (event) {
                infowindow.setContent(this.html);
                infowindow.setPosition(event.latLng);
                infowindow.open(map);
            });
            @endforeach
            var styles = [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#8d8d8d"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 10
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#dbdbdb"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                }
            ]
            map.setOptions({styles: styles});
        }
        // event jendela di-load
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endpush