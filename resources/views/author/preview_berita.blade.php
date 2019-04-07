@extends('layouts.layout-author')

@section('pageCss')

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
    <div class="container">
      <div class="row">
        <div class="span8">
          <!-- start article full post -->
          <article class="blog-post">
            <div class="post-heading">
              <h3><a href="#">{{ $berita[0]->judul_berita }}</a></h3>
            </div>
            <div class="clearfix">
            </div>
            <img src="{{asset($berita[0]->berita_img)  }}" alt="" />
            <ul class="post-meta">
              <li class="first"><i class="icon-calendar"></i><span>{{ dateID($berita[0]->tgl_upload) }}</span></li>
            </ul>
            <div class="clearfix">
            </div>

            <?php echo $berita[0]->isi_berita ?>
          
          </article>
          <!-- end article full post -->
        </div>
        <div class="span4">
          <div class="well">
            <a href='editBerita/{{$berita[0]->id_berita}}' class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('pageScript')

@endsection
