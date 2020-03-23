@extends('depan.blog_list')

@section('title')
<title>Inspektorat Kabupaten Situbondo | PENGADUAN</title>
@endsection

@section('breadcrumb')
<li>Pengaduan</li>
@endsection

@section('list')
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Form Pengaduan</h3>
  </div>
  <form method="POST" action="{{URL::to('/kirim_pengaduan')}}" enctype="multipart/form-data" id="frmDataAdd">
      {{csrf_field()}}
  <div class="panel-body">
      <div class="form-group">
        <label for="inputPassword3" class="control-label">Nama Pelapor</label>
        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" id="nama">
        <input type="hidden" class="form-control" id="id_lapor" name="id_lapor" value="{{$format}}">
        <span class="" for="nama" aria-hidden="true"></span>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="control-label">Nomor Handphone</label>
        <input type="text" class="form-control nom" id="hp" placeholder="Nomor Handphone" name="hp" maxlength="12">
        <span class="" for="hp" aria-hidden="true"></span>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="control-label">Alamat Pelapor</label>
        <textarea class="form-control" rows="3" placeholder="Alamat Lengkap" name="alamat" id="alamat"></textarea>
        <span class="" for="alamat" aria-hidden="true"></span>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="control-label">Kategori Pengaduan</label>
        <select class="form-control" name="ket" id="ket">
            <option value="">Silahkan Pilih</option>
          @foreach($response as $v)
            <option value="{{$v->id_kategori}}">{{$v->nama_kategori}} {{$v->nama_kategori2}}</option>
          @endforeach
        </select>
        <span class="" for="ket" aria-hidden="true"></span>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="control-label">Detail Pengaduan</label>
        <textarea class="form-control" rows="3" placeholder="Detail Pengaduan" name="isi" id="isi"></textarea>
        <span class="" for="isi" aria-hidden="true"></span>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="control-label">Lokasi Terjadinya Pengaduan</label>
        <textarea class="form-control" rows="3" placeholder="Lokasi Terjadinya Pengaduan" name="lokasi" id="lokasi"></textarea>
        <span class="" for="lokasi" aria-hidden="true"></span>
      </div>
      <!-- <div class="form-group">
        <label for="exampleInputFile">File Gambar</label>
        <input type="file" id="gambar1" name="gambar1">
        <span class="help-block">
            Try selecting one or more files and watch the feedback
        </span>
      </div> -->
      <div class="form-group">
        <label for="exampleInputFile">Upload Foto</label>
        <div class="input-group">
            <label class="input-group-btn">
                <span class="myButton1">
                    Pilih Foto&hellip; <input type="file" id="gambar" name="gambar" style="display: none;" multiple>
                </span>
            </label>
            <input type="text" class="form-control" readonly name="coba" id="coba">
            <span class="" for="gambar" aria-hidden="true"></span>
        </div>
        <span class="help-block">
            <small class="label label-danger">*) Wajib di isi</small><br />
            <small class="label label-danger">*) Foto yang di Upload maksimal 1 mb</small>
        </span>
      </div>
  </div>
  <div class="panel-footer">
    <div class="text-left">
      <button type="submit" class="myButton" id="kirim" name="kirim">Kirim Pengaduan</button>
      <!-- <input type="submit" class="myButton" id="kirim" name="kirim" value="Kirim Pengaduan"> -->
    </div>
  </div>
  </form>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
$(document).ready(function() {
  jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });
  // checkbox, radio and selects
  $("#ket").each(function() {
    $(this).validate({
      highlight: function(element) {
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
      },
      success: function(element) {
        $(element).closest('.form-group').removeClass('has-error');
      },
      errorPlacement: function( error, element ) {
        // var placement = $(element).parent();
        
        // placement.append(error);
        if (element.parent('.input-group').length) { 
            error.insertAfter(element.parent());      // radio/checkbox?
        } else if (element.hasClass('select2')) {     
            error.insertAfter(element.next('span'));  // select2
        } else {                                      
            error.insertAfter(element);               // default
        }
      }
    });


  });

  // Select 2 Fields
  $("select[name='ket']").on('change', function() {
      $(this).valid();
  });

  /* Tanpa Huruf */
  var non_huruf = document.getElementsByClassName('nom');

  for (var i = 0; i < non_huruf.length; i++) {
      non_huruf[i].addEventListener('keydown', function(event) {
          limitCharacter(event);
      });
  }

  /* Fungsi Limit */
  function limitCharacter(event)
  {
      key = event.which || event.keyCode;
      if ( key != 188 // Comma
           && key != 8 // Backspace
           && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
           && (key < 48 || key > 57) // Non digit
           && (key < 96 || key > 105) // KeyPad
           // Dan masih banyak lagi seperti tombol del, panah kiri dan kanan, tombol tab, dll
          ) 
      {
          event.preventDefault();
          return false;
      }
  }
  $("#frmDataAdd").validate({
      rules: {
          nama: {
              required: true
          },
          hp: {
              required: true
          },
          alamat: {
              required: true
          },
          ket: {
              required: true
          },
          isi: {
              required: true
          },
          lokasi: {
              required: true
          },
          gambar: {
              required: true,
              accept: "image/*"
          }
      },
      messages: {
          nama: {
              required: "Nama tidak boleh kosong !"
          },
          hp: {
              required: "Nomer Handphone tidak boleh kosong !"
          },
          alamat: {
              required: "Alamat tidak boleh kosong !"
          },
          ket: {
              required: "Kategori Harus di Pilih !"
          },
          isi: {
              required: "Detail Pengaduan tidak boleh kosong !"
          },
          lokasi: {
              required: "Lokasi tidak boleh kosong !"
          },
          gambar: {
              required: "Nama tidak boleh kosong !",
              accept:" file size must be less than 200 KB."
          }
      },
      highlight: function( label ) {
        $(label).closest('.form-group').removeClass('has-success').addClass('has-error');
      },
      success: function( label ) {
        $(label).closest('.form-group').removeClass('has-error');
        label.remove();
      },
      errorPlacement: function( error, element ) {
        var placement = element.closest('.input-group');
        if (!placement.get(0)) {
          placement = element;
        }
        if (error.text() !== '') {
          placement.after(error);
          error.insertAfter(element);
        }
      },
      submitHandler: function(e) {
          var data_id     = $("input[name='id_lapor']").val();
          var data_nama   = $("input[name='nama']").val();
          var data_hp     = $("input[name='hp']").val();
          var data_almt   = $.trim($('#alamat').val());
          var data_ket    = $("select[name='ket']").val();
          var data_isi    = $.trim($('#isi').val());
          var data_lokasi = $.trim($('#lokasi').val());
          var data_foto   = $("input[name='gambar']").prop('files')[0];

          var form_data = new FormData();
          form_data.append('id_lapor', data_id);
          form_data.append('nama', data_nama);
          form_data.append('hp', data_hp);
          form_data.append('alamat', data_almt);
          form_data.append('ket', data_ket);
          form_data.append('isi', data_isi);
          form_data.append('lokasi', data_lokasi);
          form_data.append('gambar', data_foto);

          var _token = $('meta[name="csrf-token"]').attr('content');

          $.ajax({
              headers: {
                  'X-CSRF-TOKEN': _token
              },
              url : '{{route('store.pengaduan')}}',
              type : 'POST',
              dataType: 'json',
              contentType: false,
              data : form_data,
              processData : false,
              cache : false,
              success:function(data){
                  console.log(data);
                  if (data.success == true) {
                      // frm.trigger('reset');
                      $('#gambar').val(null).change();
                      $('#frmDataAdd').trigger('reset');
                      swal('success!','Pengaduan sudah terkirim ke Sidumas Situbondo','success');
                  }
              }
          });
          return false; // required to block normal submit since you used ajax
      }
  });
    $('#ket').select2();

   // File type validation
    // $("#gambar").change(function(){
    //     var fileLength = this.files.length;
    //     console.log(fileLength);
    //     var match= ["image/jpeg","image/png","image/jpg","image/gif"];
    //     var i;
    //     for(i = 0; i < fileLength; i++){ 
    //         var file = this.files[i];
    //         var imagefile = file.type;
    //         var file_size = file.size;
    //         var fileName = file.name;
    //         console.log(fileName);
    //         if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]))){
    //             swal("Batal", "Tolong upload file gambar yang berektensikan (JPEG/JPG/PNG/GIF).)", "error");
    //             $('#gambar').val(null).change();
    //             return false;
    //         }
    //         if (file_size > 500000) {
    //             swal("Batal", "File maksimal 500 kb", "error");
    //             $('#gambar').val(null).change();
    //             return false;
    //         }
    //     }
    // });

    // File type validation
    $("#gambar").change(function(){
        var fileLength = this.files.length;
        console.log(fileLength);
        var match= ["image/jpeg","image/png","image/jpg","image/gif"];
        var i;
        for(i = 0; i < fileLength; i++){ 
            var file = this.files[i];
            var imagefile = file.type;
            var file_size = file.size;
            var fileName = file.name;
            console.log(fileName);
            if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]))) {              
                //memeriksa format file
                swal("Batal", "Tolong upload file gambar yang berektensikan (JPEG/JPG/PNG/GIF).)", "error");
                $('#gambar').val(null).change();
                return false;
            }else if(file.size > 1048576){
                //memeriksa ukuran file (dalam bytes)
                swal("Batal", "Maaf, file Anda terlalu besar (melebihi 1 MB)", "error");
                $('#gambar').val(null).change();
                return false;
            }else{
                //menambahkan file yang dapat diunggah ke objek FormData
                $('input[name=coba]').val(fileName);
                // $("#file-name").append('Filename : ' + fileName + '<br />Filesize : ' + file_size);
                
            }
        }
    });

});
</script>
@endpush
