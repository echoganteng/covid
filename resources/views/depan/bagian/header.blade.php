  <header> 

    

    <!-- Top bar -->

    <div class="top-bar">

      <div class="top-info">

        <div class="container">

          <ul class="personal-info">

            <li>

              <p><i class="fa fa-phone"></i> {{$almt->telepon}} </p>

            </li>

            <li>

              <p><i class="fa fa-folder-open-o"></i><a href="http://ppid.kpu.go.id" target="_blank"> Daftar Informasi Publik </a></p>

            </li>

          </ul>

          

          <!-- Right Sec -->

          <div class="right-sec"> 

            <!-- social -->

            <ul class="social">

            @foreach($sosmeds as $sosmed)

              <li><a href="{{$sosmed->link}}"><i class="fa fa-{{$sosmed->nama}}"></i></a></li>

            @endforeach

            </ul>

          </div>

        </div>

      </div>

    </div>

    

    <!-- Navigation -->

    <nav class="navbar">

      <div class="sticky">

        <div class="container"> 

          

          <!-- LOGO -->

          <div class="logo"> <a href="{{url('/beranda')}}"><img style="height: 50px;" src="{{asset($almt->logo)}}" alt="KPU Kabupaten Situbondo" ></a> </div>

          

          <!-- Nav -->

          <ul class="nav ownmenu">

            <li class="active"> <a href="{{url('/beranda')}}">Home </a> </li>
            @if(!empty($menus))

              @foreach($menus as $item)

              	@if($item->children->count() > 0)

  	            <li> <a href="#">{{$item->nama}}</a>

  	              <ul class="dropdown">

  	              @foreach($item->children as $submenu)

  	                <li> <a href="{{url('/halaman/'.$submenu->alamat)}}">{{$submenu->nama}}</a> </li>

  	              @endforeach

  	              </ul>

  	            </li>

  	            @else

  	            <li> <a href="{{url('/halaman/'.$item->alamat)}}">{{$item->nama}}</a> </li>

  	            @endif

              @endforeach

            @endif
            <li class=""> <a href="#">Pojok KPU </a> 
              <ul class="dropdown">
                <li> <a href="{{url('/berita')}}">Berita</a> </li>
                <li> <a href="{{url('/informasi')}}">Pengumuman</a> </li>
                <li> <a href="{{url('/opini')}}">Opini</a> </li>
                <li> <a href="{{url('/resensi')}}">Resensi</a> </li>
                <li> <a href="{{route('photo')}}">Galeri</a> </li>
              </ul>
            </li>
            <li class=""> <a href="{{url('/download')}}">Download </a> </li>

          </ul>



        </div>

      </div>

    </nav>

  </header>