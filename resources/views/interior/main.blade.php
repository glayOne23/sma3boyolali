@extends('interior.layout')
@section('title')
Selamat Datang di SMAN 3 Boyolali
@endsection

@section('content')
    <!-- start banner Area -->
    @foreach ($slideshow->home_images as $slideshow_image)    
        @section('bgutama')
            /images/{{$slideshow_image->name}}
        @endsection
    @endforeach

    @section('bgkepsek')
        /images/{{$kepsek->home_images->first()->name}}
    @endsection
    
        <section class="banner-area relative" id="home">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row fullscreen d-flex justify-content-center align-items-center">
                    <div class="banner-content col-lg-9 col-md-12 justify-content-center ">
                        <h1>
                            Selamat Datang di <br>
                            SMAN 3 Boyolali
                        </h1>
                        <p class="text-white mx-auto">
                            If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each. You may be saying to yourself.
                        </p>
                        <a href="https://jateng.siap-ppdb.com/" class="primary-btn header-btn text-uppercase mt-10">Daftar Sekarang</a>
                    </div>											
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start about-video Area -->
        <section class="about-video-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 about-video-left">
                        <h6 class="text-uppercase">Tentang</h6>
                        <h1>
                            SMAN 3 <br>
                            Boyolali
                        </h1>
                        <p>
                            <span>SMA 3 Boyolali merupakan sekolah yang terletak di Boyolali.<br /> We are here to listen from you deliver exellence</span>
                        </p>
                        {{-- <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
                        </p> --}}
                        <a class="primary-btn mt-30" href="/sejarah">Sejarah SMA</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-thumbnail rounded" src="/images/bg3.jpg" alt="">
                    </div>

                </div>
            </div>	
        </section>
        <!-- End about-video Area --

        <!-- Start callto-action Area -->
        <section class="callto-action-area pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="callto-action-wrap col-lg-12 relative section-gap">
                            <div class="content text-left" style="padding-left:5%"> 
                                <h1>
                                    Sambutan Kepala Sekolah
                                    
                                    <br/>
                                    <br/>
                                </h1>
                                    <p>
                                        {{$kepsek->content}}
                                        <br/>
                                        <br/>
                                        <br/>
                                    </p>
                                {{-- <a href="#" class="primary-btn text-uppercase">Request quote now</a>			 --}}
                            </div>							
                        </div>
                    </div>
                </div>	
            </section>
            <!-- End callto-action Area -->

        <!-- Start gallery Area -->
        <section class="gallery-area pb-120">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12 pb-40 header-text text-center">
                        <h1 class="pb-10">Galeri Terbaru</h1>
                        <p>
                            Galeri agenda-agenda terbaru SMAN 3 Boyolali
                        </p>
                    </div>
                </div>							
                <div class="row">
                    @foreach ($albums as $album)
                    <div class="col-lg-6">
                        <div class="single-gallery">
                            <div class="content">
                                <a href="/galeri/{{$album->id}}">
                                    <div class="content-overlay"></div>
                                        <img class="content-image img-fluid d-block mx-auto rounded" src="/images/{{$album->cover}}" alt="{{$album->cover}}">
                                    <div class="content-details fadeIn-bottom">
                                    <h3 class="content-title mx-auto">{{$album->name}}</h3>
                                    <a href="/galeri/{{$album->id}}" class="primary-btn text-uppercase mt-20">Klik untuk lihat Isi Album</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>	
        </section>
        <!-- End gallery Area -->

        <!-- Start blog Area -->
        <section class="blog-area  pb-120">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-9">
                        <div class="title text-center">
                            <h1 class="mb-10">Berita Terbaru SMAN 3 Boyolali</h1>
                            <p>Berikut beberapa berita terbaru SMAN 3 Boyolali.</p>
                        </div>
                    </div>
                </div>							
                <div class="row">
                    <div class="active-blog-carusel">
                        @foreach ($blogs as $blog)        
                        
                            <div class="single-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="/images/{{$blog->photo}}" alt="{{$blog->photo}}" style="widht:360px;height:220px">
                                </div>
                                <div class="details">
                                    <a href="/berita/{{$blog->id}}"><h4 class="title">{{$blog->title}}</h4></a>
                                    <p>
                                        {!! \Illuminate\Support\Str::words($blog->content, 15,'....')  !!}
                                        <a href="/berita/{{$blog->id}}">Baca lebih lanjut</a>
                                    </p>
                                    <h6 class="date">{{ date('d F Y', strtotime($blog->created_at) ) }}</h6>
                                </div>	
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>	
        </section>
        <!-- End blog Area --
    
        <!-- Start blog Area -->
        <section class="blog-area  pb-120">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-9">
                        <div class="title text-center">
                            <h1 class="mb-10">Prestasi Terbaru SMAN 3 Boyolali</h1>
                            <p>Berikut beberapa prestasi terbaru SMAN 3 Boyolali.</p>
                        </div>
                    </div>
                </div>							
                <div class="row">
                    <div class="active-blog-carusel">
                        @foreach ($achievements as $achievement)        
                        
                            <div class="single-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="/images/{{$achievement->photo}}" alt="{{$achievement->photo}}" style="widht:360px;height:220px">
                                </div>
                                <div class="details">
                                    <a href="/berita/{{$achievement->id}}"><h4 class="title">{{$achievement->title}}</h4></a>
                                    <p>
                                        {!! \Illuminate\Support\Str::words($achievement->content, 15,'....')  !!}
                                        <a href="/berita/{{$achievement->id}}">Baca lebih lanjut</a>
                                    </p>
                                    <h6 class="date">{{ date('d F Y', strtotime($achievement->created_at) ) }}</h6>
                                </div>	
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>	
        </section>
        <!-- End blog Area --
        
        <!-- Start brands Area -->
        <!-- End brands Area -->
        <section class="brands-area mb-5">
            <div class="container no-padding">
                <div class="brand-wrap">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-60 col-lg-9">
                            <div class="title text-center">
                                <h1 class="mb-10">Link Terkait SMAN 3 Boyolali</h1>
                                <p>Link Terkait SMAN 3 Boyolali.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                        @foreach ($links as $link)    
                            <div class="col-lg-12">
                                <a href="{{$link->link}}"><img class="img-thumbnail rounded" src="/images/{{$link->image}}" alt="{{$link->image}}" style="width:230px;height:120px;"></a>
                                <br>
                                <center>
                                        <a href="{{$link->link}}"><h4 class="title">{{$link->title}}</h4></a>
                                        <a href="{{$link->link}}"><p class="title">{{$link->link}}</p></a>
                                </center>
                                
                            </div>
                        @endforeach
                    </div>																			
                </div>
            </div>	
        </section>

@endsection