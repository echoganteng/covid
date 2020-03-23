  <!-- FOOTER -->
  <footer>
    <div class="container">
      <div class="row"> 
        
        <!-- ABOUT -->
        <div class="col-md-4"> <img style="height: 50px;" src="{{asset($almt->logo)}}" alt="" >
          <div class="about-foot">
            <ul>
              <li>
                <p style="color: #FFF;"><i class="fa fa-map-marker"></i> {{$almt->alamat}}</p>
              </li>
              <li>
                <p style="color: #FFF;"><i class="fa fa-phone"></i> {{$almt->telepon}}</p>
              </li>
              <li>
                <p style="color: #FFF;"><i class="fa fa-envelope"></i> {{$almt->email}}</p>
              </li>
            </ul>
          </div>
        </div>
        
        <!-- Twitter Feed -->
        <div class="col-md-4">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FKPUKabupatenSitubondo&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="270" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>

        <!-- Categories -->
        <div class="col-md-4">
          <a class="twitter-timeline" data-lang="id" data-height="270" data-theme="light" href="https://twitter.com/kpustb">Tweets oleh KPU Kabupaten Situbondo</a>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- RIGHTS -->
  <div class="rights">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <b style="color: #FFF;">2020 &copy; <a style="color: #FFF;" href="{{url('/')}}">{{$almt->nama}}</a></b> <br> <a style="color : #FFF;" href="http://kominfo.situbondokab.go.id">Dinas Komunikasi, Informatika, dan Persandian Kabupaten Situbondo</a> <span style="color: #FFF;">|</span> <a style="color : #FFF;" href="#">TIm ICT</a> 
        </div>
        <div class="col-md-4 text-right">
        @foreach($sosmeds as $sosmed)
        <a href="{{$sosmed->link}}" class="btn bawah"><i class="fa fa-{{$sosmed->nama}}"></i></a>
        @endforeach
        </div>
      </div>
    </div>
  </div>
</div>