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
        <div class="span12 well well-info">
          <!-- start article full post -->
            <a href="{{ URL::to('author/tambah-berita') }}" class="btn btn-primary" style="float: right">+ Tambahkan Berita Baru</a>
            <table class="table table-stripped">
                
              <thead>
                <tr>
                  <th>Judul</th>
                  <th>Gambar</th>
                  <th>Tgl Upload</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($berita as $news)
                  @if($news->berita_img == '')
                    <?php $news->berita_img = 'assets/img/dummies/140x140.jpg';?>
                  @endif
                <tr>
                  <td>{{ $news->judul_berita }}</td>
                  <td><img src='{{ asset("$news->berita_img") }}' width="100px"></td>
                  <td>{{ $news->tgl_upload }}</td>
                  <td><a href="editBerita/{{$news->id_berita}}" class="btn btn-warning btn-small">Edit</a> | <a href="hapusBerita/{{$news->id_berita}}" class="btn btn-danger btn-small">Hapus</a> </td>
                </tr>
                @endforeach
              </tbody>

            </table>

        </div>
      </div>
    </div>
  </section>
@endsection

@section('pageScript')

@endsection
