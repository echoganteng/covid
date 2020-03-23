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
        <input type="text" class="form-control" id="hp" placeholder="Nomor Handphone" name="hp">
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
              accept: "audio/*"
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
      // highlight: function (element) {
      //     $(element).parent('.form-group').addClass('error')
      // },
      // unhighlight: function (element) {
      //     $(element).parent('.form-group').removeClass('error')
      // }
      errorElement: 'p',
        errorPlacement: function(error, element) {
                if(element.parent('.form-group').length) {
                        error.insertAfter(element.parent());
                } else {
                    //check if the element name is the select2 input
                    if(element.hasClass('select2') && element.next('.ket-container').length) {
          error.insertAfter(element.next('.ket-container'));
        }
                }
            },
    //   errorPlacement: function(error, element) {
    //             if(element.parent('.form-group').length) {
    //                     error.insertAfter(element.parent());
    //             } else {
    //                 //check if the element name is the select2 input
    //                 if (element.attr('name') == "ket")
    //                     //instead of insetring after the element directly
    //                     // insert the error after the next tag of element, after the select2 span.
    //                     error.insertAfter(element.next());
    //                 else
    //                     error.insertAfter(element);
    //             }
    //         },
    //     errorPlacement: function (error, element) {
    //     if(element.hasClass('select2') && element.next('.select2-container').length) {
    //       error.insertAfter(element.next('.select2-container'));
    //     } else if (element.parent('.input-group').length) {
    //         error.insertAfter(element.parent());
    //     }
    //     else if (element.prop('type') === 'radio' && element.parent('.radio-inline').length) {
    //         error.insertAfter(element.parent().parent());
    //     }
    //     else if (element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
    //         error.appendTo(element.parent().parent());
    //     }
    //     else {
    //         error.insertAfter(element);
    //     }
    // },
      // highlight: function (element) {
      //     $(element).closest('.form-group').removeClass('has-success has-feedback').addClass('has-error has-feedback');
      //  //  var identify =  element.parent();
      //  //   console.log(identify);
      //  //   $("span[for='"+identify+"']").removeClass("glyphicon glyphicon-ok form-control- feedback");
      // },
      // success: function (element) {
      //     $(element).closest('.form-group').removeClass('has-error has-feedback').addClass('has-success has-feedback');
      //     $(element).remove();
      //     var identify =  element.attr("for");
      //     console.log(identify);
      //     $("span[for='"+identify+"']").addClass("glyphicon glyphicon-ok form-control-feedback success");
      // }
        highlight: function(element) {
            $(element).closest(".form-group").addClass("has-error").removeClass("has-success");
            $(element).parent().find('.form-control-feedback').removeClass('glyphicon glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function(element) {
            $(element).closest(".form-group").removeClass("has-error").addClass("has-success");
            $(element).parent().find('.form-control-feedback').removeClass('glyphicon-remove').addClass('glyphicon glyphicon-ok');
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
