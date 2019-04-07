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
              <h3>Filosofi Logo Yayasan Ibu Indonesia Mengaji</h3>
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
            <li class="active">Filosofi Logo</li>
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
              <h3><a href="#">Filosofi Logo Yayasan Ibu Indonesia Mengaji</a></h3>
            </div>
            <div class="clearfix">
            </div>
            <div class="centered">
              <img src="{{ asset('assets/logo-yayasan-ibu-indonesia-mengaji-besar.png') }}" alt="Logo Yayasan Ibu Indonesia Mengaji" />
            </div>
            <div class="clearfix">
            </div>
            <h4>SEKILAS TENTANG LOGO YAYASAN IBU MENGAJI INDONESIA MENGAJI</h4>
            <h5>8 Filosofi logo: </h5>
              
            <ol>
              <li>Gambar kitab terbuka menggambarkan proses menuntut ilmu</li>
              <li>Background putih adalah niat yang putih/suci dalam pendirian Lembaga</li>
              <li>Tulisan Yayasan Ibu warna merah huruf balok : yayasan ini jelas tujuan pendiriannya, berani di dalam melangkah menuju tujuan</li>
              <li>Indonesia dengan huruf latin menunjukan keunikan Indonesia, tulisan mengaji huruf balok dan  berwarna hitam, orang yang belajar harus jelas apa yang dipelajari,  sebagai bekal menuju hidup yang abadi</li>
              <li>YI singkatan yayasan ibu, huruf y kakinya panjang sehingg bisa " mangku" Indonesia, harapannya Yayasan bisa berkembang menjadi Lembaga yang mampu memberikan layanan di level nasional</li>
              <li>Peta Indonesia warna hijau adalah " Ijo Royo-royo Gemah Ripah Loh Jinawi" menggambarkan Keindahan, Kesejukan</li>
              <li>Bunga melati jumlah 7, bunga melati adalah bunga asli Indonesia, wangi/ harum jg memiliki banyak manfaat, jumlah 7 maksudnya adalah tujuan yayasan, yakni  bisa harum namanya serta bermanfaat bagi sesama,</li>
              <li>Padi kuning : simbol kesejahteraan, jumlah 18 adalah tahun kelahiran 2018</li>
            </ol>
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
