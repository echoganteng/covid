@extends('depan.blog_list')

@section('title')
<title>KPU Kabupaten Situbondo | OPINI</title>
@endsection

@section('breadcrumb')
<li>Opini</li>
@endsection

@section('list')
@foreach($list as $opini)
  <article> <img class="img-responsive" src="{{asset($opini->gambar)}}" alt="{{$opini->judul}}" >
    <!-- Date -->
    <div class="date">
        <?php
        $tgl = date('d', strtotime($opini->tgl_buat));
        $bln = date('M', strtotime($opini->tgl_buat));
        ?>
         {{$tgl}} <span>{{$bln}}</span> 
    </div>
    <!-- Detail -->
    <div class="post-detail">
      <h5 class="font-normal"><a href="{{url('opini/'.$opini->slug)}}">{{$opini->judul}}</a></h5>
      {!! Str::words($opini->isi_opini, 15,' ....</p>')  !!}
    </div>
  </article>
@endforeach
@endsection

@section('pagination')
<nav>{{ $list->links() }}</nav>
@endsection