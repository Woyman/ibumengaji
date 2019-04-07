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
              <h3>AD/ART  Yayasan Ibu Indonesia Mengaji</h3>
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
            <li class="active">AD ART</li>
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
              <h3><a href="#">Anggaran Dasar dan Anggaran Rumah Tangga Yayasan Ibu Indonesia Mengaji</a></h3>
            </div>
            <div class="clearfix">
            </div>
            <div class="centered">
              <img src="{{ asset('assets/logo-yayasan-ibu-indonesia-mengaji-besar.png') }}" alt="Logo Yayasan Ibu Indonesia Mengaji" />
            </div>
            <div class="clearfix"></div>

            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                ANGGARAN DASAR </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse" style="height: 0px;">
                  <div class="accordion-inner">
                      <h4 class="centered">BAB 1<br> NAMA DAN KEDUDUKAN</h4>
                        <p align="center">Pasal 1</p>
                        <ol>
                          <li>Yayasan ini bernama Yayasan Ibu Indonesia Mengaji (YIIM) yang selanjutnya disebut Yayasan.</li>
                          <li>Yayasan berkedudukan di Dukuh Bejen  RT 03, Bantul,  Bantul, Yogyakarta</li>
                        </ol>

                        <h4 class="centered">BAB 2<br>JANGKA WAKTU PENDIRIAN</h4>
                        <p align="center">Pasal 2</p>
                        <p>Yayasan didirikan untuk jangka waktu yang tidak ditentukan lamanya.</p>

                        <h4 class="centered">BAB 3<br> DASAR DAN AKIDAH</h4>
                        <p align="center">Pasal 3</p>
                        <ol>
                          <li>Yayasan berdasarkan Pancasila dan Undang-Undang Dasar Republik Indonesia Tahun 1945</li>
                          <li>Yayasan berakidah Islam (Ahlussunnah wal Jama’ah).</li>
                        </ol>

                        <h4 class="centered">BAB 4<br>MAKSUD DAN TUJUAN</h4>
                        <p align="center">Pasal 4</p>
                        <p>Maksud dan tujuan yayasan adalah:</p>
                        <ol type="a">
                          <li>Menjalin dan mempererat ukhuwah Islamiyah,</li>
                          <li>Mengembangkan aktifitas di bidang Sosial, Kemanusiaan dan Keagamaan</li>
                          <li>Mensejahterakan dhuafa dengan ilmu dan amal, serta</li>
                          <li>Meningkatkan derajat dhuafa menjadi berdaya.</li>
                        </ol>

                        <h4 class="centered">BAB 5<br>KEGIATAN</h4>
                        <p align="center">Pasal 5</p>
                        <p>Untuk mencapai maksud dan tujuan tersebut di atas, yayasan menjalankan kegiatan sebagai berikut :</p>
                        <ol>
                          <li>
                            Bidang Sosial:
                            <ol type="a">
                              <li>Mendirikan lembaga sosial formal dan/atau non formal,</li>
                              <li>Panti Asuhan, Panti Jompo,</li>
                              <li>Melestarikan lingkungan hidup.</li>
                            </ol>
                          </li>
                          <li>
                            Bidang Kemanusiaan: 
                            <ol type="a">
                              <li>Memberi bantuan korban bencana alam,</li>
                              <li>Memberi bantuan pengungsi perang,</li>
                              <li>Memberi bantuan fakir, miskin, janda, yatim dan/atau piatu</li>
                            </ol>
                          </li>
                          <li>
                            Bidang Keagamaan: 
                            <ol type="a">
                              <li> Pembinaan anak, remaja dan keluarga,</li>
                              <li>Meningkatkan pemahaman keagamaan,</li>
                              <li>Melaksanakan syiar keagamaan,</li>
                              <li>Menerima dan menyalurkan zakat, infaq, shadaqah serta wakaf,</li>
                              <li>Mendirikan sarana ibadah bagi ummat islam,</li>
                              <li>Menyelenggarakan pondok pesantren, TPA dan/atau madrasah.</li>
                            </ol>
                          </li>
                        </ol>

                        <h4 class="centered">BAB 6<br>KEKAYAAN</h4>
                        <p align="center">Pasal 6</p>
                        <p>Kekayaan Yayasan terdiri dari :</p>
                        <ol type="a">
                          <li>Modal awal yang dikumpulkan sebesar Rp. 10.000.000,00  (sepuluh juta rupiah),</li>
                          <li>
                            Hasil-hasil yang didapat Yayasan dari usaha-usaha :
                            <ol type="i">
                              <li>Menghimpun dana dari masyarakat dalam bentuk hibah, wakaf, zakat, infaq dan shadaqah,</li>
                              <li>Usaha lain yang sah dan halal,</li>
                              <li>Bantuan dari Pemerintah.</li>
                            </ol>
                          </li>
                        </ol>

                        <h4 class="centered">BAB 7<br>KEGIATAN DAN USAHA</h4>
                        <p align="center">Pasal 7</p>
                        <p>Untuk mencapai tujuan sebagaimana tersebut dalam pasal 4, Yayasan mempunyai kegiatan dan usaha :</p>
                        <ol type="a">
                          <li>Melengkapi sarana dan prasarana yang secara langsung maupun tidak langsung berhubungan dengan pencapaian tujuan Yayasan,</li>
                          <li>Mendirikan badan usaha dan/atau ikut serta dalam suatu badan usaha untuk menunjang pencapaian maksud dan tujuan Yayasan</li>
                          <li>Melakukan tindakan yang secara langsung maupun tidak langsung berhubungan dengan pencapaian tujuanYayasan.</li>
                        </ol>

                        <h4 class="centered">BAB 8<br>ORGAN YAYASAN</h4>
                        <p align="center">Pasal 8</p>
                        <ol>
                          <li>
                            Yayasan mempunyai organ yang terdiri dari:
                            <ol type="a">
                              <li>Pembina</li>
                              <li>Pengurus, dan</li>
                              <li>Pengawas</li>
                            </ol> </li>
                          <li>
                            Setiap anggota Pembina, Pengurus, dan Pengawas berhak:
                            <ol>
                              <li>Mendapatkan fasilitas yang diperlukan dalam tugasnya; dan</li>
                              <li>Mendapatkan tunjangan</li>
                            </ol></li>
                          <li>Tunjangan sebagaimana dimaksud ayat (2) huruf b, disesuaikan dengan kemampuan Yayasan berdasarkan keputusan rapat Pembina yang dituangkan dalam Surat  Ketetapan Pembina.</li>
                        </ol>

                        <p align="center">Pasal 9</p>
                        <ol>
                          <li>Pembina adalah organ Yayasan yang mempunyai kewenangan yang tidak diberikan kepada Pengurus dan/atau Pengawas.</li>
                          <li>Pengurus adalah organ Yayasan yang melaksanakan kepengurusan Yayasan</li>
                          <li>Pengawas adalah organ Yayasan yang bertugas melakukan Pengawasan serta memberi nasihat kepada Pengurus dalam menjalankan kegiatan Yayasan.</li>
                        </ol>

                        <p align="center">Pasal 10</p>
                        <ol>
                          <li>Yang dapat diangkat menjadi Pembina adalah orang perseorangan sebagai pendiri Yayasan dan/atau mereka yang berdasarkan keputusan rapat anggota Pembina dinilai mempunyai dedikasi yang tinggi untuk mencapai maksud dan tujuan Yayasan.</li>
                          <li> Dalam hal anggota Pembina dari unsur pendiri berjumlah kurang dari 3 (tiga) orang, jumlah anggota Pembina ditetapkan 3 (tiga) orang.</li>
                        </ol>

                        <p align="center">Pasal 11</p>
                        <ol>
                          <li>Yang dapat diangkat menjadi Pengurus adalah orang perseorangan yang mampu melakukan perbuatan hukum.</li>
                          <li>Pengurus Yayasan diangkat oleh Pembina berdasarkan keputusan rapat Pembina untuk jangka waktu 5 (lima) tahun dan dapat diangkat kembali.</li>
                        </ol>

                        <p align="center">Pasal 12</p>
                        <p>Pengawas Yayasan diangkat oleh Pembina berdasarkan keputusan rapat Pembina untuk jangka waktu 5 (lima) tahun dan dapat diangkat kembali.</p>


                        <h4 class="centered">BAB 9<br>RAPAT-RAPAT DAN PENGAMBILAN KEPUTUSAN</h4>
                        <p align="center">Pasal 13</p>
                        <p align="center">Bagian Pertama<br> Jenis Rapat</p>
                        <ol>
                          <li>
                            Rapat-rapat Yayasan terdiri dari:
                            <ol type="a">
                              <li>Rapat Pembina.</li>
                              <li>Rapat Pengurus</li>
                              <li>Rapat Pengawas, dan</li>
                              <li>Rapat Gabungan</li>
                            </ol></li>
                          <li>Rapat Pembina adalah rapat yang dilaksanakan Pembina dan hanya diikuti oleh anggota Pembina dalam rangka melaksanakan kewenangannya.</li>
                          <li>Rapat Pengurus adalah rapat yang dilaksanakan Pengurus dalam rangka melaksanakan kewenangan dan kewajibannya.</li>
                          <li> Rapat Pengawas adalah rapat yang dilaksanakan Pengawas dan hanya diikuti oleh anggota Pengawas dalam rangka melaksanakan kewenangan dan kewajibanya.</li>
                          <li>Rapat Gabungan adalah rapat yang dilaksanakan dan diikuti oleh beberapa Organ Yayasan.</li>
                          <li> Rapat Gabungan sebagaimana dimaksud ayat (5) tidak boleh dilaksanakan antara Pengurus dan Pengawas kecuali dalam menetapkan anggota Pembina.</li>
                        </ol>

                        <p align="center">Pasal 14</p>
                        <p align="center">Bagian Kedua<br> Kuorum dan Pengambilan Keputusan</p>

                        <ol>
                          <li>Rapat-rapat Yayasan dinyatakan kuorum apabila dihadiri paling sedikit ½ (seperdua) lebih satu dari jumlah undangan yang seharusnya, kecuali Rapat Pembina dan Rapat Pengawas.</li>
                          <li>Rapat Pembina dan Rapat Pengawas dinyatakan kuorum apabila dihadiri paling sedikit 2/3 (dua pertiga) dari anggota Pembina.</li>
                          <li>  Rapat Gabungan dinyatakan kuorum apabila dihadiri paling sedikit ½ (seperdua) dari masing-masing organ Yayasan yang berhak menghadirinya.</li>
                        </ol>

                        <p align="center">Pasal 15</p>
                        <ol>
                          <li>Apabila jumlah undangan rapat yang hadir tidak memenuhi syarat minimal, maka setelah ditunda 1 (satu) jam rapat dapat dilaksanakan dan dinyatakan  kuorum.</li>
                          <li>Ketentuan sebagaimana dimaksud ayat (1) tidak berlaku bagi Rapat Pembina dan/atau Rapat Pengawas.</li>
                          <li>Apabila dalam Rapat Pembina atau Rapat Pengawas jumlah undangan rapat yang hadir tidak memenuhi syarat minimal, rapat ditunda untuk memberikan undangan  lagi.</li>
                          <li>Undangan sebagaimana dimaksud  ayat (3) menyebutkan bahwa ini adalah undangan ulang.</li>
                          <li>Apabila dalam undangan ulang peserta rapat masih tidak memenuhi syarat minimal kehadiran, maka setelah ditunda 1 (satu) jam rapat dapat dilaksanakan, dan keputusan yang diambil dianggap sah.</li>
                        </ol>

                        <p align="center">Pasal 16</p>
                        <ol>
                          <li>Keputusan rapat diambil dengan cara musyawarah untuk mufakat</li>
                          <li>Apabila pengambilan keputusan sebagaimana dimaksud ayat (1) tidak tercapai, maka pengambilan keputusan dilakukan berdasarkan persetujuan suara terbanyak</li>
                          <li> Pengambilan keputusan berdasarkan suara terbanyak sebagaimana dimaksud ayat </li>
                          <li>hanya dilakukan terhadap pendapat-pendapat yang tidak bertentangan dengan peraturan perundang- undangan dan Anggaran Dasar ini.</li>
                        </ol>
                        

                        <h4 class="centered">BAB 10<br>PERTANGGUNGJAWABAN</h4>
                        <p align="center">Pasal 17</p>
                        <ol>
                          <li>Pengurus berkewajiban melaporkan kegiatan Yayasan selama 1 (satu) tahun kepada Pembina.</li>
                          <li>Pengurus menyusun ikhtisar laporan keuangan untuk diumumkan kepada masyarakat di tempat-tempat umum.</li>
                          <li>Dalam hal dokumen laporan tahunan ternyata tidak benar dan menyesatkan, maka Pengurus secara tanggung renteng bertanggungjawab terhadap pihak yang dirugikan.</li>
                        </ol>

                         <h4 class="centered">BAB 11<br>PERUBAHAN ANGGARAN DASAR </h4>
                        <p align="center">Pasal 18</p>
                        <p>Anggaran Dasar ini dapat diubah, kecuali mengenai maksud dan tujuan Yayasan.</p>
                        <p align="center">Pasal 19</p>
                        <ol>
                          <li>Perubahan Anggaran Dasar sebagaimana dimaksud pasal 18  hanya dapat dilakukan dalam Rapat Gabungan yang diselenggarakan oleh Pembina khusus untuk maksud  tersebut.</li>
                          <li> Rapat Gabungan sebagaimana dimaksud ayat (1) harus dihadiri oleh paling sedikit 2/3 (dua pertiga)  dari anggota Pembina, Pengurus, dan Pengawas.</li>
                          <li> Perubahan dapat dilakukan untuk menyesuaikan dengan peraturan perundang-undangan  tentang Yayasan, dan dilakukan dengan mekanisme sebagai berikut:
                            <ol type="a">
                              <li>Pengurus menetapkan tim untuk menyusun draf perubahan tersebut.</li>
                              <li> Draf sebagaimana dimaksud huruf  a, dibahas dan ditetapkan dalam rapat yang dihadiri oleh tim penyusun dan Pengurus yang ada pada saat perubahan dilakukan.</li>
                              <li>Draft yang telah dibahas dan ditetapkan oleh tim penyusun sebagaimana dimaksud huruf b untuk selanjutnya disampaikan dalam rapat gabungan.</li>
                            </ol>
                          </li>
                        </ol>

                        <h4 class="centered">BAB 12<br>PENGGABUNGAN</h4>
                        <p align="center">Pasal 20</p>

                        <ol>
                          <li> Penggabungan Yayasan dapat dilakukan dengan menggabungkan 1 (satu) atau lebih Yayasan dengan Yayasan lain, dan mengakibatkan Yayasan yang menggabungkan diri menjadi bubar</li>
                          <li>Penggabungan Yayasan sebagaimana dimaksud dalam ayat (1) dapat dilakukan dengan memperhatikan :
                              <ol>
                                <li> Ketidakmampuan Yayasan melaksanakan kegiatan usaha tanpa dukungan Yayasan lainnya,</li>
                                <li>Yayasan yang menerima penggabungan dan yang menggabbungkan diri kegiatannya sejenis, atau</li>
                                <li> Yayasan yang menggabungkan diri tidak pernah melakukan perbuatan yang bertentangan dengan Anggaran Dasarnya, ketertiban umum dan kesusilaan.</li>
                              </ol></li>
                            <li>Usul penggabungan Yayasan dapat disampaikan oleh Pengurus kepada Pembina.</li>
                        </ol>

                        <p align="center">Pasal 21</p>
                        <ol>
                          <li>Penggabungan Yayasan hanya dapat dilakukan berdasarkan keputusan Rapat Pembina yang dihadiri paling sedikit ¾ (tiga per empat) dari jumlah anggoat Pembina dan disetujui oleh paling sedikit ¾ (tiga per empat) dari seluruh jumlah anggota Pembina yang hadir,</li>
                          <li> Pengurus dari masing-masing Yayasan yang akan menggabungkan diri dan yang akan menerima penggabungan menyusun usul rencana penggabungan,</li>
                          <li> Usul rencana penggabungan sebagaimana dimaksud dalam ayat (2) dituangkan dalam rencangan akta penggabungan oleh Pengurus Yayasan oleh Pengurus dari Yayasan yang akan menggabungkan diri dan yang akan menerima penggabungan,</li>
                          <li>Rancangan akta penggabungan harus mendapat persetujuan dari masing-masing Pembina Yayasan,</li>
                          <li> Rancangan sebagaimana dimaksud dalam ayat (4) dituangkan dalam akta penggabungan yang dibuat di hadapan notaris dalam bahasa Indonesia</li>
                          <li> Pengurus Yayasan hasil penggabungan wajib mengumumkan hasil penggabungan dalam surat kabar harian berbahasa Indonesia paling lambat 30 (tiga puluh) hari terhitung sejak penggabungan selesai dilakukan,</li>
                          <li>Dalam hal penggabungan Yayasan diikuti dengan perubahan Anggaran Dasar dan Anggaran Rumah Tangga yang memerlukan persetujuan Menteri Hukum dan Hak Asasi Manusia, maka akta perubahan Anggaran Dasar dan Anggaran Rumah Tangga wajib disampaikan kepada Menteri HUkum dan Hak Asasi Manusia untuk memperoleh persetujuan dengan dilampiri akta penggabungan.</li>
                        </ol>

                        <p align="center">Pasal 22</p>
                        <p align="center">PEMBUBARAN</p>

                        <ol>
                          <li> Yayasan ini dapat dibubarkan karena:
                            <ol type="a">
                              <li> Tujuan Yayasan yang ditetapkan dalam Anggaran Dasar telah tercapai atau tidak tercapai,</li>
                              <li> Putusan Pengadilan yang telah memperoleh kekuatan hukum tetap berdasarkan alasan
                                  <ol type="i">
                                    <li>  Yayasan melanggar ketertiban umum dan kesusilaan,</li>
                                    <li> Tidak mampu membayar utangnya setelah dinyatan pailit, atau</li>
                                    <li>Harta kekayaan Yayasan tidak cukup untuk melunasi hutangnya setelah </li>
                                  </ol>
                              </li>
                            </ol>
                          </li>
                          <li>Dalam hal dilakukan pembubaran Yayasan sebagaimana ayat  (1) huruf  a, maka keputusan pembubaran Yayasan  harus dilakukan dalam rapat Pembina dan/atau Rapat Gabungan yang dilaksanakan khusus untuk maksud tersebut,</li>
                          <li>Rapat Pembina dan/atau Rapat Gabungan sebagaimana dimaksud ayat (2), dianggap sah apabila dihadiri oleh seluruh Pembina.</li>
                          <li>Dalam hal Yayasan bubar sebagaimana diatur dalam ayat (1)  huruf  a dan huruf  b , Pembina menunjuk likuidator untuk membereskan kekayaan Yayasan,</li>
                          <li>Dalam hal tidak ditunjuk likuidator, maka Pengurus bertindak sebagai likuidator.</li>
                        </ol>

                        <p align="center">Pasal 23</p>
                        <ol>
                          <li>Dalam hal Yayasan bubar, Yayasan tidak dapat melakukan perbuatan hukum, kecuali untuk membereskan kekayaannya dalam proses likuidasi.</li>
                          <li>Dalam hal Yayasan sedang dalam proses likuidasi, untuk semua surat keluar dicantumkan frasa “dalam likuidasi” di elakang nama Yayasan</li>
                          <li>Dalam hal Yayasan bubar karena putusan pengadilan, maka pengadilan juga menunjuk likuidator,</li>
                          <li>Dalam hal pembubaran Yayasan karena pailit, berlaku peraturan peraturan perundang-undang di bidang kepailitan,</li>
                          <li>Ketentuan mengenai penunjukan, pengangkatan, pemberhentian sementara, pemberhentian, wewenang, kewajiban, tugas dan tanggungjawab, serta Pengawasan terhadap Pengurus, berlaku juga bagi likuidator,</li>
                          <li>Likuidator atau curator yang ditunjuk untuk melakukan pemberesan kekayaan Yayasan yang bubar atau dibubarkan, paling lambat 5 (lima) hari terhitung sejak tanggal penunjukan wajib mengumumkan pembubaran Yayasan dan proses likuidasinya dalam surat kabar berbahasa Indonesia.</li>
                          <li> Likuidator atau curator dalam jangka waktu paling lambat 30 (tiga puluh) hari terhitung sejak tanggal proses likuidasi berakhir, wajib mengumumkan hasil likuidasi dalam surat kabar harian berbahasa Indonesia,</li>
                          <li>Likuidator atau curator dalam waktu paling lambat 7 (tujuh) hari terhitung sejak tanggal proses likuidasi berakhir wajib melaporkan pembubaran Yayasan kepada Pembina.</li>
                          <li>Dalam hal laporan mengenai pembubaran Yayasan sebagaimana dimaksud ayat (8) dan pengumuman hasil likuidasi sebagaimana dimaksud ayat (7) tidak dilakukan, maka bubarnya Yayasan tidak berlaku bagi pihak ketiga.</li>
                        </ol>

                        <p align="center">Cara Penggunaan Kekayaan Sisa Likuidasi</p>
                        <p align="center">Pasal 24</p>

                        <ol>
                          <li>Kekayaan sisa hasil likuidasi diserahkan kepada Yayasan lain yang mempunyai maksud dan tujuan yang sama dengan Yayasan yang bubar,</li>
                          <li>Kekayaan sisa hasil likuidasi sebagaimana dimaksud dalam ayat (1) dapat diserahkan kepada badan hukum lain yang melakukan kegiatan yang sama dengan Yayasan yang bubar, apabila hal tersebut diatur dalam undang-undang yang berlaku bagi badan hukum tersebut,</li>
                          <li>Dalam hal kekayaan sisa hasil likuidasi tidak diserahkan kepada Yayasan lain atau kepada badan hukum lain sebagaimana dimaksud dalam ayat (1) dan ayat (2), kekayaan tersebut diserahkan kepada Negara dan penggunaannya dilakukan sesuai dengan maksud dan tujuan Yayasan yang  bubar.</li>
                        </ol>

                        <p align="center">Pasal 25</p>
                        <p>Ketentuan-ketentuan yang diberlakukan pada saat Yayasan ini dinyatakan bubar, didasarkan pada ketentuan-ketentuan yang berlaku dalam peraturan perudang-undangan.</p>

                        <h4 class="centered">BAB 13<br>PENUTUP</h4>
                        <p align="center">Pasal 26</p>
                        <p>Hal-hal yang belum diatur dalam Anggaran Dasar ini akan diatur kemudian dalam Anggaran Rumah Tangga Yayasan.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                ANGGARAN RUMAH TANGGA</a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse" style="height: 0px;">
                  <div class="accordion-inner">
                        <h4 class="centered">BAB 1<br>PENGANGKATAN, PEMBERHENTIAN DAN PENGGANTIAN ORGAN YAYASAN</h4>
                        <p align="center">Bagian Pertama Pengangkatan dan Penggantian Pembina</p>
                        <p align="center">Pasal 1</p>

                        <ol>
                          <li> Pengangkatan anggota Pembina dari  luar unsur pendiri dilakukan dalam rapat Pembina dengan mempertimbangkan usulan dari Pengurus.</li>
                          <li>Apabila Yayasan karena suatu sebab tidak lagi mempunyai Pembina, paling lambat dalam waktu 30 (tiga puluh) hari terhitung sejak tanggal kekosongan, anggota Pengurus dan anggota Pengawas mengadakan rapat gabungan untuk mengangkat Pembina dengan memperhatikan ketentuan Anggaran Dasar pasal 9.</li>
                          <li>Pimpinan rapat gabungan sebagaimana dimaksud ayat (2) dipilih dari dan oleh anggota rapat yang hadir.</li>
                          <li>Keputusan rapat sebagaimana dimaksud dalam ayat (1) sah apabila dilakukan sesuai dengan ketentuan mengenai kuorum kehadiran dan tata cara pengambilan keputusan yang diatur dalam Anggaran Dasar.</li>
                        </ol>

                        <p align="center">Pasal 2</p>

                        <ol>
                          <li>Pelaksanaan kewenangan dan kewajiban Pembina bersifat kolekftif kolegial.</li>
                          <li>Pembina memilih dua orang anggotanya untuk bertindak sebagai pimpinan dan sekretaris.</li>
                        </ol>

                        <p align="center">Pasal 3</p>
                        <p>Anggota Pembina berhenti dari keanggotaan Pembina karena:</p>

                        <ol type="a">
                          <li>Mengundurkan diri</li>
                          <li>Meninggal dunia</li>
                        </ol>

                        <p align="center">Bagian Kedua Pengangkatan, Pemberhentian dan Penggantian Pengurus</p>
                        <p align="center">Pasal 4</p>

                        <ol>
                          <li>Pembina mengangkat Pengurus berdasarkan keputusan rapat Pembina dan ditetapkan dengan Surat Keputusan.</li>
                          <li>Rapat Pembina sebagaimana dimaksud ayat (1) dilaksanakan setelah berakhir masa jabatan Pengurus lama.</li>
                          <li>
                            Susunan Pengurus Yayasan terdiri atas:
                            <ol>
                              <li>Seorang Ketua;</li>
                              <li>Seorang Wakil Ketua;</li>
                              <li>Seorang Sekretaris;</li>
                              <li>Seorang Bendahara; dan</li>
                              <li>Seksi-Seksi yang dibentuk berdasarkan kebutuhan.</li>
                            </ol>
                          </li>
                        </ol>

                        <p align="center">Pasal 5</p>

                        <ol>
                          <li>Dalam hal Pengurus selama menjalankan tugas melakukan tindakan yang oleh Pembina dinilai merugikan Yayasan, maka berdasarkan keputusan Pembina, Pengurus tersebut dapat diberhentikan sebelum masa kepengurusannya berakhir.</li>
                          <li>Dalam hal pengangkatan, pemberhentian dan penggantian Pengurus dilakukan tidak sesuai dengan ketentuan Anggaran Dasar ini, atas permohonan yang berkepentingan, Pengadilan Umum dapat membatalkan pengangkatan, pemberhentian atau penggantian tersebut.</li>
                        </ol>

                        <p align="center">Pasal 6</p>
                        <p>Anggota Pengurus berhenti dari keanggotaan Pengurus karena:</p>
                        <ol>
                          <li>Meninggal dunia;</li>
                          <li>Mengundurkan diri;</li>
                          <li>Berakhir masa jabatannya; dan</li>
                          <li>Diberhentikan Pembina.</li>
                        </ol>

                        <p align="center">Pasal 7</p>
                        <ol>
                          <li>  
                            Anggota Pengurus yang berhenti karena sebagaimana dimaksud pasal 6 huruf b, c, dan d, wajib:
                            <ol>
                              <li>Membuat laporan tertulis tentang hasil kerja yang menjadi tugasnya sampai dengan diberhentikannya anggota tersebut; dan</li>
                              <li>Menyerahkan semua inventaris Yayasan yang dibawa.</li>
                            </ol></li>
                          <li>Apabila anggota yang berhenti sebagaimana dimaksud pasal (1) masih mempunyai tanggungan terhadap Yayasan, penyelesaiannya diserahkan kepada Pembina.</li>
                        </ol>

                        <p align="center">Pasal 8</p>
                        <p>Penggantian anggota Pengurus yang berhenti dilakukan dalam rapat Pembina dengan ketentuan sebagai berikut:</p>
                        <ol>
                          <li>Apabila Pengurus yang berhenti ketua dan/atau sekretaris, pengganti diambil dari wakilnya.</li>
                          <li>Apabila Pengurus yang berhenti bendahara, Pembina menunjuk orang baru.</li>
                          <li>Apabila Pengurus berhenti keseluruhan, maka masa kepengurusannya dianggap berakhir, dan Pembina menetapkan Pengurus baru.</li>
                        </ol>

                        <p align="center">Bagian Ketiga<br>Pengangkatan, Pemberhentian, dan Penggantian Pengawas</p>
                        <p align="center">Pasal 9</p>
                        <ol>
                          <li>Pengawas Yayasan diangkat berdasarkan keputusan rapat Pembina dan ditetapkan dengan Surat Keputusan</li>
                          <li>Pengawas Yayasan dapat diberhentikan berdasarkan keputusan rapat Pembina yang khusus dilakukan untuk  itu.</li>
                          <li>Dalam waktu paling lama 7 (tujuh) hari sejak tanggal pemberhentian Pengawas, Pembina mengisi kekosongan Pengawas.</li>
                          <li>Dalam hal pengangkatan, pemberhentian dan penggantian Pengawas dilakukan tidak sesuai dengan ketentuan Anggaran Dasar ini, atas permohonan yang berkepentingan, Pengadilan Umum dapat membatalkan pengangkatan, pemberhentian atau penggantian tersebut.</li>
                        </ol>

                        <h4 class="centered">BAB 2<br>WEWENANG, KEWAJIBAN DAN LARANGAN ORGAN YAYASAN</h4>
                        <p align="center">Bagian Pertama<br>Pembina</p>
                        <p align="center">Pasal 10</p>

                        <p>Pembina mempunyai Kewenangan yang meliputi :</p>
                        <ol>
                          <li>Keputusan mengenai perubahan Anggaran Dasar;</li>
                          <li>Pengangkatan dan pemberhentian Pengurus dan/atau Pengawas;</li>
                          <li>Penetapan kebijakan umum Yayasan berdasarkan Anggaran Dasar;</li>
                          <li>Pengesahan program kerja dan rancangan anggaran tahunan Yayasan; dan</li>
                          <li>Penetapan keputusan mengenai penggabungan dan/atau pembubaran Yayasan.</li>
                        </ol>

                         <p align="center">Pasal 11</p>

                        <ol>
                          <li>Pembina Yayasan mengadakan rapat sekurang-kurangnya sekali dalam 1 (satu) tahun.</li>
                          <li>Dalam rapat tahunan, Pembina melakukan evaluasi terhadap kekayaan Yayasan tahun lalu dan/atau tahun berjalan sebagai dasar pertimbangan bagi perkiraan mengenai perkembangan Yayasan untuk tahun yang akan datang.</li>
                        </ol>

                        <p align="center">Pasal 12</p>
                        <p>Pembina Dilarang: </p>

                        <ol>
                          <li>Merangkap sebagai Pengurus dan/atau Pengawas.</li>
                          <li>Menjabat Pengurus pada organisasi lain yang bertentangan dengan dasar dan akidah Yayasan.</li>
                        </ol>

                        <p align="center">Bagian Kedua<br>Pengurus</p>
                        <p align="center">Pasal 13</p>

                        <ol>
                          <li>Pengurus Yayasan bertanggungjawab penuh atas kepengurusa Yayasan untuk kepentingan dan tujuan Yayasan</li>
                          <li>Pengurus mempunyai kewenangan untuk:
                              <ol>
                                <li>Melaksanakan kegiatan yang berhubungan dengan pencapaian maksud dan tujuan Yayasan</li>
                                <li> Mewakili dan bertindak atas nama Yayasan</li>
                              </ol>
                          </li>
                          <li> Dalam melaksanakan kewenangan sebagaimana dimaksud ayat (2) huruf b, Pengurus mengeluarkan Surat Keputusa</li>
                          
                        </ol>

                        <p align="center">Pasal 14</p>

                        <ol>
                          <li>Dalam melaksanakan usaha sebagaimana dimaksud Anggaran Dasar pasal 6 (enam), Pengurus melakukan kordinasi dengan Pembina untuk mendapatkan persetujuan.</li>
                          <li>Koordinasi sebagaimana dimaksud ayat (1), hanya wajib dilakukan dalam melaksanakan usaha sebagaimana dimaksud Anggaran Dasar pasal 6 (enam) huruf a dan</li>
                        </ol>

                        <p align="center">Pasal 15</p>                        
                        <ol>
                          <li>Pengurus dilarang: 
                            <ol type="a">
                              <li> Melakukan kegiatan yang secara nyata bisa merugikan Yayasan</li>
                              <li>Mengadakan perjanjian dengan organisasi yang terafiliasi dengan Yayasan, Pembina, Pengurus, dan/atau Pengawas Yayasan, atau seseorang yang bekerja pada Yayasan,</li>
                              <li> Melakukan tindakan atas nama Yayasan untuk kepentingan pribadi Pengurus,</li>
                              <li> Mengikat Yayasan sebagai penjamin utang,</li>
                              <li>Mengalihkan kekayaan Yayasan,  dan</li>
                              <li> Membebani kekayaan Yayasan untuk kepentingan pihak  lain.</li>
                            </ol></li>
                          <li>Larangan sebagaimana dimaksud dalam ayat (1) huruf b tidak berlaku dalam hal perjanjian tersebut bermanfaat bagi tercapainya maksud dan tujuan Yayasan</li>
                        </ol>

                        <p align="center">Pasal 16</p>   
                        <ol>
                          <li>Setiap Pengurus bertanggungjawab penuh secara pribadi apabila yang bersangkutan dalam menjalankan tugasnya tidak sesuai dengan ketentuan Anggaran Dasar, yang mengakibatkan kerugian Yayasan atau pihak ketiga.</li>
                          <p align="center">Pasal 17</p>   
                          <li> Pengurus tidak berwenang mewakili Yayasan apabila:
                              <ol type="a">
                                <li> Terjadi perkara di depan pengadilan antara Yayasan dengan anggota Pengurus yang bersangkutan; atau</li>
                                <li> Pengurus yang bersangkutan mempunyai kepentingan yang bertentangan dengan kepentingan Yayasan.</li>

                              </ol></li>
                          <li>Dalam hal terdapat keadaan sebagaimana dimaksud ayat (1), Pembina menunjuk wakil Yayasan, dalam rapat Pembina.</li>
                        </ol>                     

                        <p align="center">Pasal 18</p> 
                        <ol>
                          <li>Apabila Yayasan mengalami kepailitan karena kesalahan atau kelalaian Pengurus, dan kekayaan Yayasan tidak cukup untuk menutup kerugian akibat kepailitan tersebut, maka setiap anggota Pengurus secara tanggung renteng bertanggungjawab atas kerugian tersebut.</li>
                          <li>Anggota Pengurus yang dapat membuktikan bahwa kepailitan bukan karena kesalahan atau kelalaiannya tidak bertanggungjawab secara tanggung renteng atas kerugian sebagaimana dimaksud dalam ayat (1).</li>
                        </ol>

                        <p align="center">Bagian Ketiga <br> Pengawas</p> 
                        <p align="center">Pasal 19</p> 

                        <ol>
                          <li>Jumlah Pengawas Yayasan adalah 3 (tiga) orang.</li>
                          <li>Susunan Pengawas Yayasan terdiri dari:
                            <ol>
                              <li>Seorang ketua merangkap anggota</li>
                              <li>Seorang sekretaris merangkap anggota</li>
                              <li>Seorang Anggota</li>
                            </ol></li>
                          <li>Pengawas tidak boleh merangkap sebagai Pembina atau Pengurus.</li>
                        </ol>

                        <p align="center">Pasal 20</p> 
                        <p>Pengawas mempunyai kewenangan untuk:</p>
                        <ol>
                          <li>Melakukan Pengawasan terhadap kinerja Pengurus dalam melaksanakan tugas kepengurusa Yayasan.</li>
                          <li>Mengusulkan pemberhentian sementara Pengurus kepada Pembina.</li>
                        </ol>

                        <p align="center">Pasal 21</p> 
                        <p>Pengawas wajib dengan itikad baik dan penuh tanggungjawab menjalankan tugas untuk kepentingan Yayasan.</p>

                        <p align="center">Pasal 22</p> 
                        <ol>
                          <li> Pengawas dapat memberhentikan sementara anggota Pengurus.</li>
                          <li> Pemberhentian sementara sebagaimana dimaksud dalam ayat (1) langsung dilaporkan secara tertulis kepada Pembina dengan menyertakan alasannya.</li>
                          <li>Dalam jangka waktu 7 (tujuh) hari terhitung sejak tanggal laporan diterima, Pembina wajib memanggil anggota Pengurus yang bersangkutan untuk  diberi kesempatan membela diri.</li>
                          <li>Dalam jangka waktu paling lambat 7 (tujuh) hari terhitung sejak tanggal pembelaan diri sebagaimana dimaksud dalam ayat (3), Pembina wajib:
                            <ol type="a">
                              <li> Mencabut keputusan pemberhentian sementara; atau</li>
                              <li>Memberhentikan anggota Pengurus yang bersangkutan secara permanen.</li>
                            </ol>
                          </li>
                        </ol>

                        <p align="center">Pasal 23</p> 
                        <ol>
                          <li>Apabila Yayasan mengalami kepailitan karena kesalahan atau kelalaian Pengawas dalam melakukan tugas Pengawasan dan kekayaan Yayasan tidak cukup untuk menutup kerugian akibat kepailitan tersebut, setiap anggota Pengawas secara tanggung renteng bertanggungjawab atas kerugian tersebut.</li>
                          <li>Anggota Pengawas Yayasan yang dapat membuktikan bahwa kapailitan bukan karena kesalahan dan kelalaiannya, tidak bertanggungjawab secara tanggung renteng atas kerugian tersebut.</li>
                        </ol>


                        <h4 class="centered">BAB 3<br>PELAKSANA TUGAS</h4>
                        <p align="center">Pasal 24</p> 

                        <ol>
                          <li>Pengurus dalam melaksanakan kegiatan yayasan dapat mengangkat pelaksana kegiatan,  yakni apabila diperlukan,</li>
                          <li>Dalam hal belum diperlukan pelaksana kegiatan maka fungsi-fungsi pelaksana kegiatan melekat pada Pengurus,</li>
                          <li>elaksana kegiatan adalah orang perseorangan yang diberi tugas oleh Pengurus untuk melaksanakan kegiatan dan/atau usaha Yayasan.</li>
                          <li>Bidang kegiatan Yayasan meliputi:
                            <ol type="4.1">
                              <li>Bidang Sosial
                                <ol>
                                  <li> Mendirikan lembaga sosial formal dan/atau non formal,</li>
                                  <li>Panti Asuhan, Panti Jompo,</li>
                                  <li>Melestarikan lingkungan hidup.</li>
                                </ol>
                              </li>
                              <li>Bidang Kemanusiaan :
                                  <ol>
                                    <li>Memberi bantuan korban bencana alam,</li>
                                    <li> Memberi bantuan pengungsi perang,</li>
                                    <li>Memberi bantuan fakir, miskin, janda, yatim dan/atau piatu,</li>
                                  </ol>
                              </li>
                              <li>Bidang Keagamaan :
                                <ol>
                                  <li>Pembinaan anak, remaja dan keluarga,</li>
                                  <li>Meningkatkan pemahaman keagamaan,</li>
                                  <li> Melaksanakan syiar keagamaan</li>
                                  <li>Menerima dan menyalurkan zakat, infaq, shadaqah serta wakaf,</li>
                                  <li>Mendirikan sarana ibadah bagi ummat islam,</li>
                                  <li> Menyelenggarakan pondok pesantren, TPA dan/atau madrasah.</li>
                                </ol>
                              </li>
                            </ol>
                          </li>
                        </ol>

                        <p align="center">Pasal 25</p> 
                        <ol>
                          <li>Yang dapat diangkat menjadi Pelaksana Kegiatan adalah orang perseorangan yang mampu melakukan perbuatan hukum.</li>
                          <li>Pelaksana Kegiatan diangkat oleh Pengurus atas persetujuan Pembina untuk jangka waktu 5 (lima) tahun dan dapat diangkat kembali untuk 2 (dua) kali masa jabatan.</li>
                          <li>Susunan personalia pelaksana kegiatan minimal terdiri  atas:
                            <ol>
                              <li> Seorang Ketua;</li>
                              <li>Seorang Wakil Ketua;</li>
                              <li>Seorang Sekretaris</li> 
                              <li>Seorang Wakil Sekretaris; dan</li>
                              <li>Seorang Bendahara.</li>
                            </ol>
                          </li>
                        </ol>

                        <p align="center">Pasal 26</p> 
                        <ol>
                          <li>  Pelaksana Kegiatan mempunyai kewenangan   untuk:
                              <ol type="a">
                                <li>Mengangkat dan memberhentikan pegawai</li>
                                <li>Menyusun program kerja yang berhubungan dengan pencapaian maksud dan tujuan kegiatan yang diamanatkan</li>
                                <li>Melaksanakan kegiatan sebagaiman tertuang dalam program kerja</li>
                              </ol>
                          </li>
                          <li>Dalam melaksanakan kewenangan sebagaimana dimaksud ayat (1) huruf a, Pelaksana Kegiatan mengusulkan kepada Pengurus untuk mendapatkan persetujuan dalam bentuk Surat Keputusan.</li>
                          <li>Dalam melaksanakan kewenangan sebagaimana dimaksud ayat (1) huruf c, Pelaksana Kegiatan mengangkat pegawai.</li>
                        </ol>

                        <p align="center">Pasal 27</p> 
                        <p>Dalam melaksanakan kewenangan sebagaimana dimaksud pasal (26), Pelaksana Kegiatan menyusun petunjuk pelaksanaan.</p>

                        <p align="center">Pasal 28</p> 

                        <ol>
                          <li>Pelaksana kegiatan dilarang:
                            <ol>
                              <li> Melakukan kegiatan yang merugikan Yayasan</li>
                              <li> Mengadakan perjanjian dengan organisasi yang terafiliasi dengan Yayasan, Pembina, Pengurus, dan/atau Pengawas Yayasan, atau seseorang yang bekerja pada Yayasan.</li>
                              <li>Melakukan tindakan atas nama Yayasan untuk kepentingan pribadi.</li>
                            </ol>
                          </li>
                          <li>  Larangan sebagaimana dimaksud dalam ayat (1) huruf b tidak berlaku dalam hal perjanjian tersebut bermanfaat bagi tercapainya maksud dan tujuan Yayasan.</li>
                        </ol>

                        <p align="center">Pasal 29</p> 
                        <ol>
                          <li>Apabila Yayasan mengalami kepailitan karena kesalahan atau kelalaian Pelaksana Kegiatan, dan kekayaan Yayasan tidak cukup untuk menutup kerugian akibat kepailitan tersebut, maka setiap anggota Pelaksana Kegiatan secara tanggung renteng bertanggungjawab atas kerugian tersebut.</li>
                          <li>Anggota Pelaksana Kegiatan yang dapat membuktikan bahwa kepailitan bukan karena kesalahan atau kelalaiannya tidak bertanggungjawab secara tanggung renteng atas kerugian sebagaimana dimaksud dalam ayat (1).</li>
                        </ol>

                        <p align="center">Pasal 30</p> 
                        <p>Dalam hal Pelaksana Kegiatan selama menjalankan tugas melakukan tindakan yang oleh Pembina dinilai merugikan Yayasan, maka berdasarkan keputusan Pengurus atas persetujuan Pembina, Pelaksana Kegiatan tersebut dapat diberhentikan sebelum masa jabatanya berakhir.</p>
                        
                        <p align="center">Pasal 31</p> 
                        <p>Pelaksana Kegiatan berhenti karena:</p>
                        <ol>
                          <li>Meninggal dunia;</li>
                          <li>Mengundurkan diri;</li>
                          <li>Berakhir masa jabatan; dan</li>
                          <li>Diberhentikan.</li>
                        </ol>

                        <p align="center">Pasal 32</p> 
                        <ol>
                          <li>Pelaksna Kegiatan yang diberhentikan atau mengundurkan diri, wajib:
                            <ol type="a">
                              <li> Membuat laporan tertulis tentang hasil kerja yang menjadi tugasnya sampai dengan diberhentikannya anggota tersebut; dan</li>
                              <li> Menyerahkan semua inventaris Yayasan yang dibawa.</li>
                            </ol>
                          </li>
                          <li>Apabila anggota yang berhenti sebagaimana dimaksud pasal (1) masih mempunyai tanggungan terhadap Yayasan, penyelesaiannya diserahkan kepada Pembina.</li>
                        </ol>

                        <p align="center">Pasal 33</p> 
                        <p>Pelaksana Kegiatan bertanggungjawab terhadap pelaksanaan kegiatan yang menjadi kewenangan dan kewajibannya.</p>


                        <h4 class="centered">BAB 4<br>PERTANGGUNGJAWABAN KEGIATAN, KEKAYAAN, DAN KEUANGAN</h4>
                        <p align="center">Pasal 34</p> 

                        <ol>
                          <li>Kekayaan dan keuangan Yayasan mencakup kekayaan dan keuangan yang dialokasikan untuk organ Yayasan, baik berupa harta bergerak maupun tidak bergerak.</li>
                          <li> Pengurus dan Pengawas bertanggungjawab terhadap pengelolaan kekayaan dan keuangan Yayasan, yang ditugaskan kepada Bendahara Pengurus.</li>
                          <li>  Pengurus dan Pengawas menyusun laporan tahunan paling lambat 3 (tiga) bulan terhitung mulai tahun buku Yayasan ditutup, dan dilaporkan kepada Pembina.</li>
                          <li>Laporan sebagaimana dimaksud ayat (3) sekurang-kurangnya memuat:
                            <ol type="a">
                              <li>Laporan keadaan dan kegiatan Yayasan selama tahun buku yang lalu serta hasil yang telah dicapai.</li>
                              <li> Laporan keuangan yang terdiri atas laporan posisi keuangan pada akhir periode, laporan aktivitas, laporan arus kas, dan catatan laporan kuangan.</li>
                              <li> Melampirkan laporan dari pelaksana kegiatan dan usaha Yayasan.</li>
                            </ol>
                          </li>
                        </ol>

                        <p align="center">Pasal 35</p> 
                        <ol>
                          <li>Laporan sebagaimana dimaksud pasal 34 ayat (3) ditandatangani oleh Pengurus dan Pengawas</li>
                          <li>Dalam hal terdapat Pengurus dan/atau Pengawas tidak menandatangani laporan sebagaimana dimaksud ayat (1), maka yang bersangkutan harus menyebutkan alasannya secara tertulis.</li>
                          <li>Laporan sebagaimana dimaksud ayat (1) disahkan Pembina dalam rapat Pembina.</li>
                        </ol>

                        <p align="center">Pasal 36</p> 
                        <p>Dalam hal dokumen laporan tahunan ternyata tidak benar dan menyesatkan, maka Pengurus dan Pengawas secara tanggung renteng bertanggungjawab terhadap pihak yang dirugikan.</p>

                        <h4 class="centered">BAB 5<br>PENUTUP</h4>
                        <p align="center">Pasal 37</p> 

                        <ol>
                          <li>Segala sesuatu yang belum cukup diatur dalam Anggaran Rumah Tangga ini diatur lebih lanjut oleh Pembina dan/atau Pengurus sesuai kewenangannya.</li>
                          <li>Anggaran Rumah Tangga ini hanya dapat diubah oleh Rapat Gabungan Pembina dan Pengurus.</li>
                          <li> Menyimpang dari ketentuan dalam pasal –pasal yang mengatur mengenai tata cara pengangkatan Pembina, Pengurus dan Pengawas untuk pertama kalinya diangkat susunan Pembina, Pengurus, dan Pengawas Yayasan dengan susunan sebagai berikut :

                              <ol type="a">
                                <li>PEMBINA <br>
                                  <table>
                                    <tr>
                                      <td width="70px">Ketua </td>
                                      <td>: H. Jupriyanto,S.Si</td>
                                    </tr>
                                    <tr>
                                      <td width="70px">Anggota </td>
                                      <td>: Andi Maryanto, SE</td>
                                    </tr>
                                    <tr>
                                      <td width="70px">Anggota </td>
                                      <td>: Bima Sakayo, ST</td>
                                    </tr>
                                  </table>
                                </li>
                                <li>PENGURUS <br>
                                  <table>
                                    <tr>
                                      <td width="70px">Ketua </td>
                                      <td>: Arifah Sri Sugiyanti, SE</td>
                                    </tr>
                                    <tr>
                                      <td width="70px">Wakil Ketua </td>
                                      <td>: Yuntri Winda Mulyaningrum, S.Sn</td>
                                    </tr>
                                    <tr>
                                      <td width="70px">Sekretaris </td>
                                      <td>: Dias Ayu Pratiwi</td>
                                    </tr>
                                     <tr>
                                      <td width="70px">Bendahara </td>
                                      <td>: Bibit Tin Hartini, SE</td>
                                    </tr>
                                  </table>
                                </li>
                                 <li>PENGAWAS <br>
                                  <table>
                                    <tr>
                                      <td width="70px">Ketua </td>
                                      <td>: Ari Widodo, SE</td>
                                    </tr>
                                    <tr>
                                      <td width="70px">Anggota </td>
                                      <td>: Khotibul Umam, SHI</td>
                                    </tr>
                                  </table>
                                </li>
                              </ol>

                          </li>
                        </ol>



                  </div>
                </div>
              </div>

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
