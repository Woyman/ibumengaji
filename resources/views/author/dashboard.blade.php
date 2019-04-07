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
              <h3>Author Yayasan Ibu Indonesia Mengaji</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   <section id="maincontent">
    <div class="container">

      <div class="span7 offset2">
        <div class="well well-info">
          <div class="centered">
            <h3>Selamat Datang di Halaman Author</h3>
               <p>
                    Silahkan pilih tombol menu untuk mengatur halaman web BMT PAS.
                  </p>
                <div class="btn-toolbar cta">
                  <a class="btn btn-large btn-color" href="#">
                      <i class="icon-picture icon-white"></i> Gallery </a>
                  <a class="btn btn-large btn-color" href="author/berita">
                      <i class="icon-th-list icon-white"></i> Berita</a>
                </div>
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection

@section('pageScript')

@endsection
