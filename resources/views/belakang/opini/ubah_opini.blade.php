@extends('belakang.tpl')
@section('css')
<link href="{{asset('admin/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('bc')
<li>
    <a href="{{url('/panel/opini')}}">Opini</a>
    <i class="fa fa-angle-right"></i>
</li>
<li>
    <span>Ubah Opini</span>
</li>
@endsection

@section('isi')
<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-doc font-green"></i>
            <span class="caption-subject bold uppercase"> Ubah Opini</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a class="btn btn-sm btn-warning" href="{{url('/panel/opini')}}"> <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="POST" action="{{url('panel/opini/'.$opini->id)}}">
        {{ csrf_field() }}{{ method_field('PUT') }}
            <div class="form-body">
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1" name="judul" value="{{$opini->judul}}" >
                    <label for="form_control_1">Judul Opini</label>
                    <span class="help-block">Masukkan judul opini (singkat, padat, jelas)</span>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label col-md-3">
                    <div class="row">
                        <select class="form-control edited" id="form_control_1" name="status">
                        @foreach($stats as $stat)
                            <option value="{{$stat->nama_status}}" {{ $stat->nama_status == $opini->status ? 'selected="selected"' : '' }} >{{$stat->nama_status}}</option>
                        @endforeach
                        </select>
                        <label for="form_control_1">Status Opini</label>
                    </div>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label col-md-3">
                        <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                            <input type="text" class="form-control" id="form_control_1" name="tgl_buat" value="{{$opini->tgl_buat}}" readonly>
                            <span class="input-group-btn">
                                <button class="btn default" type="button">
                                    <i class="fa fa-calendar"></i>
                                </button>
                            </span>
                            <label class="form_control_1">Tanggal publikasi</label>
                        </div>                   
                </div>
                <div class="form-group form-md-line-input form-md-floating-label col-md-6">
                    <div class="input-group">
                        <input id="thumbnail" class="form-control" type="text" name="filepath" value="{{$opini->gambar}}">
                        <label for="form_control_1">Gambar Sampul</label>
                        <span class="help-block">Ukuran gambar 400 x 260 pixel</span>
                        <span class="input-group-addon">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-xs btn-primary">
                                <i class="icon-magnifier-add"></i>
                            </a>
                        </span>
                    </div>
                </div>
                <div class="form-group last">
                    <label class="form_control_1">Isi Opini</label>
                    <textarea id="siduy" name="opini">{!! $opini->isi_opini !!}</textarea>
                </div>
            </div>
            <div class="form-actions noborder">
                <button type="submit" class="btn blue">Simpan</button>
                <a href="{{url('/panel/opini')}}" class="btn default">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
<script src="{{asset('admin/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/pages/scripts/components-date-time-pickers.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/laravel-filemanager/js/lfm.js')}}"></script>
<script type="text/javascript">
var domain = "{{url('/')}}/laravel-filemanager";
$('#lfm').filemanager('image', {prefix: domain});
</script>
<script src="{{asset('admin/tinymce/tinymce.min.js')}}"></script>
<script type="text/javascript">
var editor_config = {
    path_absolute : "{{url('/')}}/",
    selector: "#siduy",
    height: 300,
    menubar: true,
    plugins: [
      "advlist autolink lists link image charmap preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "no",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endsection