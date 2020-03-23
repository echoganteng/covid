@extends('belakang.tpl')
@section('css')
<link href="{{asset('admin/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<style type="text/css">
    .main-section{
        margin:0 auto;
        padding: 20px;
        margin-top: 100px;
        background-color: #fff;
        box-shadow: 0px 0px 20px #c1c1c1;
    }
    .fileinput-remove,
    .fileinput-upload{
        display: none;
    }
</style>
@endsection
@section('bc')
<li>
    <a href="{{url('/panel/galeri')}}">Galeri</a>
    <i class="fa fa-angle-right"></i>
</li>
<li>
    <span>Tambah Galeri</span>
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
            <span class="caption-subject bold uppercase"> Tambah Galeri</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a class="btn btn-sm btn-warning" href="{{url('/panel/galeri')}}"> <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="POST" action="{{url('panel/galeri')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-body">
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1" name="judul" value="{{ old('judul') }}" >
                    <label for="form_control_1">Judul Galeri</label>
                    <span class="help-block">Masukkan judul dokumen (singkat, padat, jelas)</span>
                </div>                
                <div class="row col-md-12">
                    <div class="form-group form-md-line-input form-md-floating-label col-md-3">
                        <div class="row">
                            <select class="form-control edited" id="form_control_1" name="status">
                                <option value="publish">publish</option>
                                <option value="draft">draft</option>
                            </select>
                            <label for="form_control_1">Status Galeri</label>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input form-md-floating-label col-md-3">
                        <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                            <input type="text" class="form-control" id="form_control_1" name="tgl_buat" readonly>
                            <span class="input-group-btn">
                                <button class="btn default" type="button">
                                    <i class="fa fa-calendar"></i>
                                </button>
                            </span>
                            <label class="form_control_1">Tanggal Publikasi</label>
                        </div>                   
                    </div>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label col-md-12 main-section">
                    <div class="file-loading">
                        <input id="file-1" type="file" name="filename[]" multiple="multiple" class="file" data-overwrite-initial="false" data-min-file-count="2">
                    </div>
                </div>                
            </div>
            <div class="form-actions noborder">
                <button type="submit" class="btn blue">Simpan</button>
                <a href="{{url('/panel/galeri')}}" class="btn default">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
<script src="{{asset('admin/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/pages/scripts/components-date-time-pickers.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $("#file-1").fileinput({
        theme: 'fa',
        uploadUrl: "{{route('galeri.store')}}",
        uploadExtraData: function() {
            return {
                _token: $("input[name='_token']").val(),
            };
        },
        allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
        overwriteInitial: false,
        maxFileSize:2000,
        maxFilesNum: 10,
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        },
        enableResumableUpload: true,
        showCancel: true,
        initialPreviewAsData: true,
        initialPreview: [],
        initialPreviewConfig: [],
        initialPreviewAsData: true,
        fileActionSettings:{
            showRemove:false,
            showUpload:false
        }
    });

    //     
</script>
@endsection
