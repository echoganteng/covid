@extends('depan.blog_list')

@section('title')
<title>KPU Kabupaten Situbondo | GALERI</title>
@endsection

@section('breadcrumb')
<li>Opini</li>
@endsection

@section('list')
  @foreach($list as $photo)
  <div class="gallery">
    <a data-fancybox="group" data-caption="{{$photo->judul}}" href="{{asset('/galeri/'.$photo->gambar)}}">
        <img src="{{asset('/galeri/thumbnail/'.$photo->gambar)}}" >
    </a>
  </div>
  @endforeach 
@endsection

@section('pagination')
<nav>{{ $list->links() }}</nav>
@endsection