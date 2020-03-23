@if (Auth::guest())
@else
<li class="nav-item start ">
    <a href="{{url('/panel')}}" class="nav-link">
        <i class="icon-home"></i>
        <span class="title">Panel</span>
        <!-- <span class="arrow"></span> -->
    </a>
</li>
@if (Auth::user()->level_id == 1)
<li class="nav-item  ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-doc"></i>
        <span class="title">Media Informasi</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item  ">
            <a href="{{url('/panel/berita')}}" class="nav-link">
                <span class="title">Berita</span>
                <!-- <span class="arrow"></span> -->
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{url('/panel/pengumuman')}}" class="nav-link">
                <span class="title">Pengumuman</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{url('/panel/opini')}}" class="nav-link ">
                <span class="title">Opini</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{url('/panel/resensi')}}" class="nav-link ">
                <span class="title">Resensi</span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item  ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-picture"></i>
        <span class="title">Multimedia</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item  ">
            <a href="{{url('/panel/dokumen')}}" class="nav-link nav-toggle">
                <span class="title">Dokumen</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{url('/panel/galeri')}}" class="nav-link nav-toggle">
                <span class="title">Galeri</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{url('/panel/video')}}" class="nav-link nav-toggle">
                <span class="title">Youtube</span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item  ">
    <a href="{{url('/panel/menu')}}" class="nav-link nav-toggle">
        <i class="icon-list"></i>
        <span class="title">Menu</span>
    </a>
</li>
<li class="nav-item  ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-share"></i>
        <span class="title">Media Sosial</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item  ">
            <a href="{{url('/panel/sosmed/twitter')}}" class="nav-link ">
                <span class="title">Twitter</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{url('/panel/sosmed/instagram')}}" class="nav-link ">
                <span class="title">Instagram</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{url('/panel/sosmed/facebook')}}" class="nav-link ">
                <span class="title">Facebook</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{url('/panel/sosmed/youtube')}}" class="nav-link ">
                <span class="title">Youtube</span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item  ">
    <a href="{{url('/panel/pengguna')}}" class="nav-link">
        <i class="icon-user"></i>
        <span class="title">Pengguna</span>
        <span class="arrow"></span>
    </a>
</li>
<li class="nav-item  ">
    <a href="{{url('/panel/pengaturan')}}" class="nav-link">
        <i class="icon-settings"></i>
        <span class="title">Pengaturan</span>
        <span class="arrow"></span>
    </a>
</li>
@include('belakang.bagian.menu_modul')
@else
@if (Auth::user()->level_id == 2)
<li class="nav-item  ">
    <a href="{{url('/panel/berita')}}" class="nav-link nav-toggle">
        <i class="icon-doc"></i>
        <span class="title">Berita</span>
        <!-- <span class="arrow"></span> -->
    </a>
</li>
@endif
@endif
@endif