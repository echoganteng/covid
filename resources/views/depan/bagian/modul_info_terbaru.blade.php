<!-- Recent Posts -->
<h5 class="side-tittle margin-top-50">Pengumuman Terbaru </h5>
<ul class="papu-post">
@foreach($infos as $info)
  <li class="media">
    <?php
    $tgl = date('d', strtotime($info->tgl_buat));
    $bln = date('M', strtotime($info->tgl_buat));
    ?>
    <div class="media-left"> <a href="{{url('/informasi/'.$info->slug)}}"> <img class="media-object" src="{{asset($info->gambar)}}" alt="{{$info->judul}}"></a><span>{{$tgl.' '.$bln}}</span> </div>
    <div class="media-body"> <a class="media-heading" href="{{url('/informasi/'.$info->slug)}}">{{$info->judul}} </a>
    </div>
  </li>
@endforeach
</ul>