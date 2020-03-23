@extends('belakang.tpl')

@section('css')

<link href="{{asset('admin/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />

<link href="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />

@endsection

@section('bc')

<li>

    <span>Dokumen</span>

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

            <i class="icon-doc font-green"></i>Daftar Galeri

        </div>

        <div class="actions">

            <div class="btn-group">

                <a class="btn btn-sm btn-info" href="{{url('panel/galeri/create')}}"> <i class="icon-plus"></i> Galeri

                </a>

            </div>

        </div>

    </div>    

    <div class="portlet-body">

        <div class="table-responsive">

            <table class="table table-striped table-bordered table-hover table-header-fixed" id="tbl_galeri">

                <thead>

                    <tr>

                        <th> No </th>

                        <th> Judul </th>

                        <th> Status </th>

                        <th> Oleh </th>

                        <th> Gambar </th>

                        <th> Tanggal </th>

                        <th> Aksi </th>

                    </tr>

                </thead>

                <tbody>

                

                </tbody>

            </table>

        </div>

    </div>

</div>



<div id="HapusModal" class="modal fade" tabindex="-1" aria-hidden="true">

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

                <!-- <a id="y" class="btn green">Ya</a> -->

            </div>

        </div>

    </div>

</div>

@endsection

@section('js')

<script src="{{asset('admin/global/scripts/datatable.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/pages/scripts/table-datatables-fixedheader.min.js')}}" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8" async defer>
var table;
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    table = $('#tbl_galeri').DataTable({ 
        paging: true,
        responsive: true,
        processing: true,
        serverSide : true,
        ajax :  '{{route('galeri.index')}}',
        columns: [
            {data: 'rownum', name: 'rownum'},
            {data: 'judul', name: 'judul'},
            {data: 'status', name: 'status'},
            {data: 'dibuat', name: 'dibuat'},
            {data: 'gambar', name: 'gambar'},
            {data: 'tgl_buat', name: 'tgl_buat'},
            {data: 'action' , name : 'action', orderable : false ,searchable: false},
        ],
        initComplete: function () {
            this.api().columns().every(function () {
                var column = this;
                var input = document.createElement("input");
                $(input).appendTo($(column.footer()).empty())
                .on('change', function () {
                    column.search($(this).val()).draw();
                });
            });
        },
        columnDefs : [
            {
              targets: 0, // no
              className: 'text-center',
              width: '4%'
            },
            {
              targets: 1, // nik
              className: 'text-left'
            },
            {
              targets: 2, // nama
              className: 'text-center',
              width: '10%'
            },
            {
              targets: 3, // jenis
              className: 'text-center',
              width: '10%'
            },
            {
              targets: 4, // tempat
              className: 'text-center',
              width: '10%'
            },
            {
              targets: 5, // jumlah
              className: 'text-center',
              width: '10%'
            },
            {
              targets: 6, // status
              className: 'text-center',
              width: '10%'
            }
        ]
    });

    $('#tbl_galeri').on('click', '.btnDelete[data-remove]', function (e) { 
        e.preventDefault();
        
        var url = $(this).data('remove');
        // confirm then
        Swal.fire({
            title: "Apakah Kamu Benar-benar ingin Menghapus Data",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Ya, Hapus Data ini!"
        }).then((result) => { // <--
            if (result.value) { // <-- if confirmed
                    $.ajax({
                    // url : $(this).data('remove'),
                    url : url,
                    type: 'DELETE',
                    dataType : 'json',
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    data : { method : '_DELETE' , submit : true},
                    success:function(data){
                        console.log(data);
                        if (data == 'Success') {
                            Swal.fire("Terhapus!", "Data Berhasil di Hapus", "success");
                            table.ajax.reload(null,false);
                        }
                    }
                });
            }
        });
        
    });
});

</script>

@endsection