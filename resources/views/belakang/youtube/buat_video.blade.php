@extends('belakang.tpl')

@section('css')

<link href="{{asset('admin/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('bc')

<li>

    <a href="{{url('/panel/video')}}">Video</a>

    <i class="fa fa-angle-right"></i>

</li>

<li>

    <span>Tambah Video</span>

</li>

@endsection



@section('isi')



@if(count($errors)>0)

  <div class="alert alert-danger alert-dismissable">

    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

    Periksa kembali data isian, mungkin ada yang salah /tidak lengkap.<br/>

    <ul>

        @foreach($errors->all() as $error)

        <li>{{$error}}</li>

        @endforeach

    </ul>

  </div>

@endif



<div class="portlet light ">

    <div class="portlet-title">

        <div class="caption font-green">

            <i class="icon-doc font-green"></i>

            <span class="caption-subject bold uppercase"> Tambah Video</span>

        </div>

        <div class="actions">

            <div class="btn-group">

                <a class="btn btn-sm btn-warning" href="{{url('/panel/video')}}"> <i class="fa fa-arrow-left"></i> Kembali

                </a>

            </div>

        </div>

    </div>

    <div class="portlet-body form">

        <form role="form" method="POST" action="{{url('panel/video')}}">

        {{ csrf_field() }}

            <div class="form-body">

                <div class="form-group form-md-line-input form-md-floating-label">

                    <input type="text" class="form-control" id="form_control_1" name="judul" value="{{ old('judul') }}" >

                    <label for="form_control_1">Judul Video</label>

                    <span class="help-block">Masukkan judul video (singkat, padat, jelas)</span>

                </div>

                <div class="form-group form-md-line-input form-md-floating-label">               
                    <input type="text" class="form-control" id="form_control_1" name="link" value="{{ old('link') }}" >

                    <label for="form_control_1">Link Video</label>

                    <span class="help-block">Masukkan embed link video</span>
                </div>

                <div class="form-group form-md-line-input form-md-floating-label">
                <input type="text" class="form-control" id="form_control_1" name="thumbnail" value="{{ old('thumbnail') }}" >

                    <label for="form_control_1">Thumbnail Video</label>

                    <span class="help-block">Masukkan embed thumbnail video</span>
                </div>

                <div class="form-group form-md-line-input form-md-floating-label col-md-3">

                    <div class="row">

                        <select class="form-control edited" id="form_control_1" name="status">

                            <option value="publish">publish</option>

                            <option value="draft">draft</option>

                        </select>

                        <label for="form_control_1">Status Video</label>

                    </div>

                </div>
                <div class="form-group form-md-line-input form-md-floating-label col-9">
                </div>             

            </div>

            <div class="form-actions noborder">

                <button type="submit" class="btn blue">Simpan</button>

                <a href="{{url('/panel/video')}}" class="btn default">Batal</a>

            </div>

        </form>

    </div>

</div>

@endsection

@section('js')

@endsection

