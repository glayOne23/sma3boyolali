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
                    <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="/galeri">Galeri </a><span class="lnr lnr-arrow-right"></span><a href="/galeri/{{$album->id}}">{{$album->name}} </a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    
    <!-- Start post-content Area -->
    <section class="post-content-area mt-5 mb-5">
        <div class="container">
            <div class="row">
                @foreach ($album->album_images as $photo)
                    <div class="col-lg-4 col-md-4 mb-4">
                        <div class="feature-img">
                            <img class="img-fluid rounded" src="/images/{{$photo->name}}" alt="{{$photo->name}}">
                        </div>
                    </div>                                
                @endforeach                
            </div>
        </div>	
    </section>
    <!-- End post-content Area -->

@endsection