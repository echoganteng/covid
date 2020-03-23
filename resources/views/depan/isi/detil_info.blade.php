@extends('depan.blog_detil')

@section('title')
<title>KPU Kabupaten Situbondo | {{$halaman->judul}}</title>
@endsection

@section('breadcrumb')
<li><a href="{{url('/informasi')}}">Pengumuman</a></li>
<li>{{$halaman->judul}}</li>
@endsection

@section('gambar')
<img class="img-responsive" style="width: 100%;" src="{{asset($halaman->gambar)}}" alt="{{$halaman->judul}}" >
@endsection

@section('tanggal')
<?php
$tgl = date('d', strtotime($halaman->tgl_buat));
$bln = date('M', strtotime($halaman->tgl_buat));
?>
 {{$tgl}} <span>{{$bln}}</span> 
@endsection

@section('judul_blog')
{{$halaman->judul}}
@endsection


@section('isi')
{!!$halaman->info!!}
@endsection