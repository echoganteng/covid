@extends('depan.blog_list')

@section('title')
<title>KPU Kabupaten Situbondo | PENGUMUMAN</title>
@endsection

@section('breadcrumb')
<li>Pengumuman</li>
@endsection

@section('list')
@foreach($list as $info)
  <article> <img class="img-responsive" src="{{asset($info->gambar)}}" alt="{{$info->judul}}" >
    <!-- Date -->
    <div class="date">
        <?php
        $tgl = date('d', strtotime($info->tgl_buat));
        $bln = date('M', strtotime($info->tgl_buat));
        ?>
         {{$tgl}} <span>{{$bln}}</span> 
    </div>
    <!-- Detail -->
    <div class="post-detail">
      <h5 class="font-normal"><a href="{{url('informasi/'.$info->slug)}}">{{$info->judul}}</a></h5>
      {!! Str::words($info->info, 15,' ....</p>')  !!}
    </div>
  </article>
@endforeach
@endsection

@section('pagination')
<nav>{{ $list->links() }}</nav>
@endsection