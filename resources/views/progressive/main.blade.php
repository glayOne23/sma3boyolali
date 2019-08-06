{{-- {{dd($ekstrakurikuler->id)}} --}}
@extends('progressive.layout')
@section('title')
Selamat Datang di SMAN 3 Boyolali
@endsection

@section('slideshow')
    <div class="slider rs-slider load">
        <div class="tp-banner-container">
            <div class="rs_slider tp-banner" data-version="5.0.7">
                <ul>
                    @foreach ($slideshow->home_images as $slideshow_image)    
                        <li data-delay="7000" data-transition="fade" data-slotamount="7" data-masterspeed="1000">
                            <h2 class="tp-caption sft skewtotop title"
                                data-x="260"
                                data-y="200"
                                data-start="500"
                                data-transform_in="y:top;s:1000;e:Power4.easeOut"
                                data-transform_out="y:top;s:400;e:Power1.easeIn">
                                <strong>Selamat Datang di SMAN 3 Boyolali</strong>
                            </h2>                                            
                            <a href="https://boyolali.demo.siap-ppdb.com/"
                                class="tp-caption btn btn-default"
                                data-x="509"
                                data-y="338"
                                data-start="1000"
                                data-transform_in="y:bottom;s:400;e:Power0.easeOut"
                                data-transform_out="y:bottom;s:300;e:Power1.easeIn">
                                Pendaftaran
                            </a>

                            <img class="replace-2x" src="/images/{{$slideshow_image->name}}" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
                        </li>
                    @endforeach
                </ul>
            </div>        
        </div>    
    </div>
@endsection

@section('content')
    <div class="full-width-box bottom-padding">
        {{-- <div class="fwb-bg bg-primary"></div> --}}
        <div class="container">
            <div class="row">
                <div class="content-box black col-sm-6 col-md-6">
                    <div>Tentang</div>
                    <h2 class="title light"><strong>SMAN 3 Boyolali</strong></h2>
                    <p class="description">
                    SMA 3 Boyolali merupakan sekolah yang terletak di Boyolali<br>
                    You can form the page yourself by placing any information<br>
                    you want – graphs, tables, buttons, slides, animated
                    </p>
                    <a href="/sejarah">
                        <button class="btn btn-white btn-default">Sejarah SMA</button>
                    </a>
                    <br><br>
                </div>
            <div class="images-box col-sm-6 col-md-6">
                <div class="frame frame-shadow-lifted rotated-right-box">
                    <img class="replace-2x" src="/images/sejarah.JPG" width="568" height="351" alt="" style="width:568;height:351">
                </div>    
            </div>
            </div>
        </div>
    </div><!-- .full-width-box -->

    <div class="full-width-box">
        <div class="fwb-bg fwb-paralax" data-speed="2" style="background-image: url('/images/{{$kepsek->home_images->first()->name}}');"><div class="overlay"></div></div>

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6"></div>
                <div class="col-sm-6 col-md-6">
                    <div class="title-box">
                        <h1 class="title no-top-padding" style="color:white;">Sambutan Kepala Sekolah</h1>
                    </div>
                    <h4 style="color:white;">
                        {{$kepsek->content}}
                    </h4>
                </div>
            </div>
        </div>
    </div><!-- .full-width-box -->    
 
    <div class="full-width-box bottom-padding cm-padding-bottom-36">
	  <div class="fwb-bg fwb-paralax" data-speed="2" style="background-image: url('/images/bg3.jpg');"><div class="overlay"></div></div>
	  
	  <div class="container">
		<div class="portfolio">

            <div class="title-box">
                <h1 class=s"title no-top-padding" style="color:white;">Galeri Terbaru</h1>
            </div>
		  
		    <div class="clearfix"></div>
		  
		    <div class="row filter-elements">

            @foreach ($albums as $album)
			<div class="work-element web-design col-xs-12 col-sm-3 col-md-3">
			  <a href="/galeri/{{$album->id}} " class="work">
				<img class="replace-2x" src="/images/{{$album->cover}}" alt="{{$album->cover}}" style="width:270px;height:197px">
				<span class="shadow"></span>
				<div class="bg-hover"></div>
				<div class="work-title">
				  <h3 class="title">{{$album->name}}</h3>
				  <div class="description">Klik untuk lihat Isi Album</div>
				</div>
			  </a>
            </div><!-- .work-element -->
            @endforeach
			
			
		  </div>
		</div>
	  </div>
	</div><!-- .full-width-box -->
    
    {{-- berita dan prestasi --}}
    <div class="container">
        <div class="row">
        {{-- berita --}}
        <div class="col-sm-12 col-md-6">
          <div class="title-box">
            <a href="/prestasi" class="btn btn-default">Semua Prestasi <span class="glyphicon glyphicon-arrow-right"></span></a>
            <h2 class="title">Prestasi Terbaru</h2>
          </div>
          <ul class="latest-posts">
            @foreach ($achievements as $achievement)        
                <li>
                    <img class="replace-2x image img-circle" src="/images/{{$achievement->photo}} " alt="{{$achievement->photo}}" title="" width="84" height="84" data-appear-animation="rotateIn">
                    <div class="meta">
                        <span>{{$achievement->title}} </span>, 
                        <span>{{ date('d F Y', strtotime($achievement->created_at) ) }}</span>
                    </div>
                    <div class="description">
                        <a href="/berita/{{$achievement->id}} ">
                        {!! \Illuminate\Support\Str::words($achievement->content, 30,'....')  !!}
                        </a>
                    </div>
                </li>
            @endforeach
          </ul>
        </div>
        {{-- end berita --}}

        {{-- berita --}}
        <div class="col-sm-12 col-md-6">
          <div class="title-box">
            <a href="/berita" class="btn btn-default">Semua Berita <span class="glyphicon glyphicon-arrow-right"></span></a>
            <h2 class="title">Berita Terbaru</h2>
          </div>
          <ul class="latest-posts">
            @foreach ($blogs as $blog)        
                <li>
                    <img class="replace-2x image img-circle" src="/images/{{$blog->photo}} " alt="{{$blog->photo}}" title="" width="84" height="84" data-appear-animation="rotateIn">
                    <div class="meta">
                        <span>{{$blog->title}} </span>, 
                        <span>{{ date('d F Y', strtotime($blog->created_at) ) }}</span>
                    </div>
                    <div class="description">
                        <a href="/berita/{{$blog->id}} ">
                        {!! \Illuminate\Support\Str::words($blog->content, 30,'....')  !!}
                        </a>
                    </div>
                </li>
            @endforeach
          </ul>
        </div>
        {{-- end berita --}}
      </div>  
    </div>
    {{-- end berita dan prestasi --}}
@endsection