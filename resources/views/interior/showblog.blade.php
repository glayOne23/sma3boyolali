@extends('interior.layout')
@section('title')
    Berita - {{$blog->title}}
@endsection

@section('bgutama')
/images/bg3.jpg
@endsection

@section('body')
    class="blog-page"
@endsection

@section('content')
        <!-- start banner Area -->
    <section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Berita-berita SMAN 3 Boyolali				
                    </h1>	
                    <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="/berita">Berita </a> <span class="lnr lnr-arrow-right"></span><a href="/berita/{{$blog->id}} ">{{$blog->title}}</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    
    <!-- Start post-content Area -->
    <section class="post-content-area mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">

                    <div class="single-post row">
                        <div class="col-lg-12 col-md-12 ">
                            <div class="feature-img">
                                <img class="img-fluid rounded" src="/images/{{$blog->photo}}" alt="{{$blog->photo}}">
                            </div>
                            <a class="posts-title" href="/berita/{{$blog->id}}"> <h3>{{$blog->title}}</h3></a>
                            <p class="date col-lg-12 col-md-12 col-6"><span class="lnr lnr-calendar-full"></span> {{ date('d F Y', strtotime($blog->created_at) ) }}</p>
                            <p class="excert">
                                    {!! $blog->content !!}
                            </p>
                        </div>
                    </div>                    										
                                
                </div>

                @include('interior.part.postterbaru')
                
            </div>
        </div>	
    </section>
    <!-- End post-content Area -->
@endsection