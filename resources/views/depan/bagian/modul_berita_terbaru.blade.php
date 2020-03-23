<!-- Recent Posts -->
<h5 class="side-tittle margin-top-50">Berita Terbaru </h5>
<ul class="papu-post">
@foreach($posts as $post)
  <li class="media">
    <?php
    $tgl = date('d', strtotime($post->tgl_buat));
    $bln = date('M', strtotime($post->tgl_buat));
    ?>
    <div class="media-left"> <a href="{{url('/berita/'.$post->slug)}}"> <img class="media-object" src="{{asset($post->gambar)}}" alt="{{$post->judul}}"></a><span>{{$tgl.' '.$bln}}</span> </div>
    <div class="media-body"> <a class="media-heading" href="{{url('/berita/'.$post->slug)}}">{{$post->judul}} </a>
    </div>
  </li>
@endforeach
</ul>