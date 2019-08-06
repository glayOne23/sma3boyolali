@extends('interior.layout')
@section('title')
    Berita SMAN 3 Boyolali
@endsection

@section('bgutama')
/images/bg3.jpg
@endsection

{{-- @section('body')
    class="blog-page"
@endsection --}}

@section('content')

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Galeri SMAN 3 Boyolali				
                    </h1>	
                    <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="/galeri">Galeri </a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    
    <!-- Start gallery Area -->
    <section class="gallery-area pb-120">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 pb-40 header-text text-center">
                    <h1 class="pb-10">  </h1>
                    <p>
                        
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

@endsection