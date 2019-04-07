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
              <h3>Profil Yayasan Ibu Indonesia Mengaji</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb notop">
            <li><a href="#">Yayasan Ibu Indonesia Mengaji</a><span class="divider">/</span></li>
            <li class="active">Profil</li>
          </ul>
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
              <h3><a href="#">Profil Yayasan Ibu Indonesia Mengaji</a></h3>
            </div>
            <div class="clearfix">
            </div>
            <div class="centered">
              <img src="{{ asset('assets/logo-yayasan-ibu-indonesia-mengaji-besar.png') }}" alt="Logo Yayasan Ibu Indonesia Mengaji" />
            </div>
            <div class="clearfix">
            </div>
              <p>
                  Yayasan Ibu Indonesia Mengaji (YIIM) bergerak dalam bidang Sosial-Keagamaan, beralamat di Jl. KH Mas Mansyur No.122 RT 03 Bejen Bantul. Yayasan Ibu Indonesia Mengaji sudah mendapatkan legalitas dari Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia No. AHU-0001324.AH.01.04 Tahun 2018.
              </p>
          </article>
          <!-- end article full post -->
        </div>
        <div class="span4">
          @include('layouts.tentangKami-Righsidebar')
        </div>
      </div>
    </div>
  </section>
@endsection

@section('pageScript')

@endsection
