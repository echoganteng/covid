@extends('depan.page')

@section('title')
<title>Inspektorat Kabupaten Situbondo | {{$halaman->nama}}</title>
@endsection

@section('judul')
{{$halaman->nama}}
@endsection

@section('isi')
{!!$halaman->isi!!}
@endsection