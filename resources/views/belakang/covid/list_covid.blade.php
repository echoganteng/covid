@extends('belakang.tpl')
@section('css')
<link href="{{asset('admin/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('bc')
<li>
    <span>DATA COVID 19</span>
</li>
@endsection
@section('isi')
@if(Session::has('berhasil'))
  <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {{Session::get('berhasil')}}.
  </div>
@endif

<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-doc font-green"></i>Daftar Perkecamatan Pertanggal {{date('d-M-Y', strtotime($now))}}
        </div>
        <div class="actions">
            <div class="btn-group">
             
                
            </div>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="POST" action="{{url('panel/covid/indexpost')}}">
        {{ csrf_field() }}
            <div class="form-body">
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="date" class="form-control" id="form_control_1" name="tanggal" value="{{$now}}">
                    <label for="form_control_1">UBAH TANGGAL (mm/dd/yyyy)</label>
                    <span class="help-block"></span>
                   
                </div>
                <button type="submit" class="btn blue">Ubah Tanggal</button>
            </div>
            
                
           
        </form>    
    </div>
    <div class="portlet-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                <thead>
                    <tr>
                        <th width="10"> No </th>
                        <th> Kecamatan </th>
                        <th> ODP </th>
                        <th> PDP </th>
                        <th> Positif </th>
                        <th width="50"> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                <?php $x=1; ?>
                @foreach($data as $post)
                    <tr>
                        <td> {{$x++}} </td>
                        <td> {{$post->NAMA_KEC}} </td>
                        <td> {{$post->odp}} </td>
                        <td> {{$post->pdp}} </td>
                        <td> {{$post->positif}} </td>
                        <td> 
                            <?php $id = encrypt($post->id_covid); ?>
                            <a class="btn btn-xs btn-warning" href="{{url('/panel/covid/'.$id.'/edit')}}"><i class="icon-note"></i> Edit</a>
                           
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- <div id="HapusModal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Konfirmasi</h4>
            </div>
            <div class="modal-body">
                <div class="modal-body" id="isi"></div>
            </div>
            <div class="modal-footer">
                
                <span id="z"></span>
               
            </div>
        </div>
    </div>
</div> -->
@endsection
@section('js')
<script src="{{asset('admin/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/pages/scripts/table-datatables-fixedheader.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $('#HapusModal').on("show.bs.modal", function (e) {
             $("#isi").html($(e.relatedTarget).data('title'));
             $("#z").html($(e.relatedTarget).data('frm'));
        });
    });
</script>
@endsection