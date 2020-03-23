@extends('belakang.tpl')
@section('css')
<link href="{{asset('admin/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('bc')
<li>
    <a href="{{url('/panel/berita')}}">Berita</a>
    <i class="fa fa-angle-right"></i>
</li>
<li>
    <span>Ubah Berita</span>
</li>
@endsection

@section('isi')
<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-doc font-green"></i>
            <span class="caption-subject bold uppercase"> Update Data Covid-19</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a class="btn btn-sm btn-warning" href="{{url('/panel/covid')}}"> <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="POST" action="{{url('panel/covid/update')}}">
        {{ csrf_field() }}
            <div class="form-body">
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1" name="kecamatan" value="{{$data->NAMA_KEC}}" disabled>
                    <label for="form_control_1">KECAMATAN</label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1" name="tanggal1" value="{{date('d-M-Y', strtotime($data->tanggal))}}" disabled>
                    <label for="form_control_1">TANGGAL</label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1" name="odp" value="{{$data->odp}}" autofocus required>
                    <label for="form_control_1">ORANG DALAM PEMANTAUAN</label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1" name="pdp" value="{{$data->pdp}}" required>
                    <label for="form_control_1">PASIEN DALAM PENGAWASAN</label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1" name="positif" value="{{$data->positif}}" required>
                    <label for="form_control_1">POSITIF</label>
                    <span class="help-block"></span>
                </div>
                <?php $id = encrypt($data->id_covid); ?>
                <input type="hidden" name="id_covid" value="{{$id}}">
                <input type="hidden" name="tanggal" value="{{$data->tanggal}}">
            <div class="form-actions noborder">
                <button type="submit" class="btn blue">Simpan</button>
                <a href="{{url('/panel/covid')}}" class="btn default">Batal</a>
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