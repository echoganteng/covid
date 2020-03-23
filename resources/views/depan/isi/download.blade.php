@extends('depan.blog_list')



@section('title')

<title>Inspektorat Kabupaten Situbondo | DOWNLOAD</title>

@endsection



@section('breadcrumb')

<li>Download</li>

@endsection



@section('list')

<div class="panel panel-primary">

  <div class="panel-heading">

    <h3 class="panel-title">Download Berkas</h3>

  </div>

  <div class="panel-body">

         

    <table id="example" class="table table-striped table-bordered" style="width:100%">

        <thead>

            <tr>

                <th>#</th>

                <th>Nama Berkas</th>

                <th>Tanggal Upload</th>

                <th>Aksi</th>

            </tr>

        </thead>

        

    </table>

  </div>

</div>

@endsection



@push('scripts')

<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {

  $('#example').DataTable({

    responsive: false,

    processing: true,

    serverSide : true,

    ordering: false,

    info:     false,

    bFilter: false,

    searching: true,

    ajax: '{{route('get.download')}}',

    columns: [

        { data: 'rownum', name: 'rownum' },

        { data: 'judul', name: 'judul' },

        { data: 'tgl_buat', name: 'tgl_buat' },

        { data: 'action', name: 'action', orderable: false, searchable: false }

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

          targets: 2, // no

          className: 'text-center',

          width: '10%'

        },

        {

          targets: 3, // no

          className: 'text-center',

          width: '10%'

        }

    ]

  });



  // $('#example').on('click', '.downloadBerkas[data-download]', function () {

  //     var url = $(this).data('download');

  //     console.log(url);

  //     // confirm then

  //     $.ajax({

  //         // url : $(this).data('remove'),

  //         url : url,

  //         type: 'GET',

  //         dataType : 'json',

  //         headers: { 'CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

  //         success:function(data){

  //           console.log(data);

  //             // if (data == 'Success') {

  //             //     swal("Deleted!", "Category has been deleted", "success");

  //             //     table.ajax.reload(function(){

  //             //         total($('#nomor_nota').val());

  //             //     });

  //             // }

  //         }

  //     });

      

  // });

});

</script>

@endpush

