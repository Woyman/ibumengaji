@extends('layouts.layout')

@section('pageCss')
@endsection
@section('content') 

<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>{{ $berita[0]['judul_berita'] }}</h3>
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
              <h3><a href="#">{{ $berita[0]['judul_berita'] }}</a></h3>
            </div>
            <div class="clearfix">
            </div>
            @if($berita[0]['berita_img'] == '' || $berita[0]['berita_img'] == NULL  )
              <img src="assets/img/dummies/blog1.jpg" alt="" />
            @else
            <?php $url = $berita[0]["berita_img"]; ?>
              <img src='{{ asset("$url") }}'  />
            @endif

            <ul class="post-meta">
              <li class="first"><i class="icon-calendar"></i><span>{{ dateID($berita[0]['tgl_upload']) }}</span></li>
            </ul>
            <div class="clearfix">
            </div>
              
              <?php echo $berita[0]['isi_berita'] ?>

          </article>
          <!-- end article full post -->
          
          
      </div>
    </div>
  </section>
@endsection

@section('pageScript')

@endsection
