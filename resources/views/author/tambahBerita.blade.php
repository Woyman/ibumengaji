@extends('layouts.layout-author')

@section('pageCss')
<link href="{{ asset('assets/datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet">
<link href="{{ asset('assets/summernote/summernote.css') }}" rel="stylesheet">

@endsection
@section('content')
 <section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Tambah Berita Baru Yayasan Ibu Indonesia Mengaji</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   <section id="maincontent">
    <div class="container" style="margin-bottom: 100px">

      <div class="span7">
        <div class="well well-info">
            <h4>Form Tambah Berita Baru</h4>

            <form action="{{ Route('tambahberita') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Judul Berita</label>
                <input type="text" name="nama_berita" class="form-control span6" required>
              </div>
              <div class="form-group">
                <label>Isi berita</label>
                <textarea id="beritaText" name="isi_berita" required></textarea>
              </div>
              <div class="form-group" style="margin-top: 20px">
                <label>Tanggal Upload Berita</label>
               <input type="text" name="tgl_upload" id="tgl_manual" class="form-control span4 datepicker" required>
                <input type="checkbox" id="tgl_auto" name="tgl_auto">Tgl Automatis
              </div>
              <div class="form-group">
                <label>Gambar/Foto</label>
                <input type="file" name="foto" class="form-control span4">
              </div>
              <div class="form-group" style="margin-top: 20px">
                <button class="btn btn-color">Tambahkan</button>
              </div>

            </form>
        </div>
      </div>

    </div>
  </section>
@endsection

@section('pageScript')

<script src="{{ asset('assets/summernote/summernote.js') }}"></script>
<script src="{{ asset('assets/datepicker/js/bootstrap-datepicker.js') }}"></script>

<script type="text/javascript">

$(document).ready(function(){

   $('.datepicker').datepicker({
         format: "yyyy-mm-dd",
         maxViewMode: 1,
         todayHighlight: true,
         orientation: "bottom auto"
      });

  $('#beritaText').summernote({
     fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New','KFGQPC Uthman Taha Naskh'],
     height: 300,
     dialogsInBody: true,
      // toolbar: [
      //       // [groupName, [list of button]]
      //       ['style', ['bold', 'italic', 'underline', 'clear']],
      //       ['font', ['strikethrough', 'superscript', 'subscript']],
      //       ['fontsize', ['fontsize']],
      //       ['color', ['color']],
      //       ['para', ['ul', 'ol', 'paragraph']],
      //       ['height', ['height']]

      //     ]
  });

  $('.close').click(function(){
        $('.modal').remove();
  });

   $('#tgl_auto').change(function(){

      var check = $(this).prop('checked');
      if(check)
      {
        $('#tgl_manual').val('');
        $('#tgl_manual').attr('disabled', 'disabled');
      }
      else{
        $('#tgl_manual').removeAttr('disabled'); 
      }
  });


});  

</script>

@endsection
