@extends('depan.blog_list')

@section('title')
<title>KPU Kabupaten Situbondo | RESENSI</title>
@endsection

@section('breadcrumb')
<li>Resensi</li>
@endsection

@section('list')
@foreach($list as $resensi)
  <article> <img class="img-responsive" src="{{asset($resensi->gambar)}}" alt="{{$resensi->judul}}" >
    <!-- Date -->
    <div class="date">
        <?php
        $tgl = date('d', strtotime($resensi->tgl_buat));
        $bln = date('M', strtotime($resensi->tgl_buat));
        ?>
         {{$tgl}} <span>{{$bln}}</span> 
    </div>
    <!-- Detail -->
    <div class="post-detail">
      <h5 class="font-normal"><a href="{{url('resensi/'.$resensi->slug)}}">{{$resensi->judul}}</a></h5>
      {!! Str::words($resensi->isi_resensi, 15,' ....</p>')  !!}
    </div>
  </article>
@endforeach
@endsection

@section('pagination')
<nav>{{ $list->links() }}</nav>
@endsection