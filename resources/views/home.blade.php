@extends('layouts.layout')

@section('pageCss')
@endsection
@section('content') 


 <section id="intro">
    <div class="jumbotron masthead">
      <div class="container">
        <!-- slider navigation -->
        <div class="sequence-nav">
          <div class="prev">
            <span></span>
          </div>
          <div class="next">
            <span></span> 
          </div>
        </div>
        <!-- end slider navigation -->
        <div class="row">
          <div class="span12">
            <div id="slider_holder">
              <div id="sequence">
                <ul>
                  <!-- Layer 1 -->
                  <li>
                    <div class="info animate-in">
                      <h2>Bootstrap based</h2>
                      <br>
                      <h3>Corporate business</h3>
                      <p>
                        Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                      </p>
                      <a class="btn btn-success" href="#">Learn more &raquo;</a>
                    </div>
                    <img class="slider_img animate-in" src="assets/img/slides/sequence/img-1.png" alt="">
                  </li>
                  <!-- Layer 2 -->
                  <li>
                    <div class="info">
                      <h2>Smart and fresh</h2>
                      <br>
                      <h3>Rich of features</h3>
                      <p>
                        Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                      </p>
                      <a class="btn btn-success" href="#">Learn more &raquo;</a>
                    </div>
                    <img class="slider_img" src="assets/img/slides/sequence/img-2.png" alt="">
                  </li>
                  <!-- Layer 3 -->
                  <li>
                    <div class="info">
                      <h2>Far from ugly</h2>
                      <br>
                      <h3>Latest technology</h3>
                      <p>
                        Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                      </p>
                      <a class="btn btn-success" href="#">Learn more &raquo;</a>
                    </div>
                    <img class="slider_img" src="assets/img/slides/sequence/img-3.png" alt="">
                  </li>
                </ul>
              </div>
            </div>
            <!-- Sequence Slider::END-->
          </div>
        </div>
      </div>
    </div>
  </section>
   <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span8">

          @foreach($berita['berita'] as $news)
            

          <!-- start article 1 -->
          <article class="blog-post">
            <div class="post-heading">
              <h3><a href='{{ URL::to("p/$news->link") }}'>{{ $news->judul_berita }}</a></h3>
            </div>
            <div class="row">
              <div class="span3">
                 @if($news->berita_img == '')
                   <div class="post-quote">
                    <blockquote>
                        {{ $news->judul_berita }}
                    </blockquote>
                   </div>
                 @else
                    <div class="post-image">
                      <a href='{{ URL::to("p/$news->link") }}'><img src='{{ asset("$news->berita_img") }}' alt="" /></a>
                    </div>
                 @endif
              </div>
              <div class="span5">
                <ul class="post-meta">
                  <li class="first"><i class="icon-calendar"></i><span>{{ dateID($news->tgl_upload) }}</span></li>
                </ul>
                <div class="clearfix">
                </div>

                <?php echo limitWords500($news->isi_berita); ?>
          
                <br><button class="btn btn-small btn-success" type="button">Read more</button>
              </div>
            </div>
          </article>


          @endforeach
<!--           <div class="pagination">
            <ul>
              <li><a href="#">Prev</a></li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </div> -->

          {{ $berita['berita']->links('vendor.pagination.myPagination') }}

        </div>
        <div class="span4">
          <aside>
            <div class="widget">
              <h4>Postingan Terakhir</h4>
              <ul class="recent-posts">
                @foreach($berita['lastpost'] as $recent)

                <li><a href='{{ URL::to("p/$news->link") }}'>{{ $recent->judul_berita }}</a>
                  <div class="clear">
                  </div>
                  <span class="date"><i class="icon-calendar"></i>{{ dateID($recent->tgl_upload) }}</span>
                  
                </li>

                @endforeach

              </ul>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('pageScript')

@endsection
